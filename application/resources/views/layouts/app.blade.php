<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackIO - @yield('title', 'Sistema de Gestão')</title>
    <!-- Importando o Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('app.home') }}" class="text-2xl font-bold text-indigo-600">TrackIO</a>
            <div>
                <a href="{{ route('reminders.index') }}" class="text-gray-700 hover:text-indigo-600 mx-2">Lembretes</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 mx-2">Sobre</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 mx-2">Contato</a>
                <form action="{{ route('login.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 ml-4">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white shadow-inner py-4 mt-12">
        <div class="max-w-7xl mx-auto text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} TrackIO. Todos os direitos reservados.
        </div>
    </footer>
</body>
</html> 