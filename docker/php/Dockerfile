FROM php:8.2-fpm

# Copy composer.lock and composer.json
# COPY composer.lock composer.json /var/www/


RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git   \
    curl  \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libexif-dev \
    libonig-dev 

WORKDIR /var/www


# Instale Node.js e npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Install extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Ajuste de permissões
RUN chown -R www-data:www-data /var/www/application
RUN chmod -R 777 /var/www/application

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]