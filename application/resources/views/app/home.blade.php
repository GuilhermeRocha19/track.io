<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Importando o Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <span class="text-2xl font-bold text-indigo-600">TrackIO</span>
            <div>
                <a href="{{ route('reminders.create') }}" class="text-gray-700 hover:text-indigo-600 mx-2">Novo Lembrete</a>
                <form action="{{ route('login.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 ml-4">Sair</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="flex flex-col items-center justify-center flex-1 py-20">
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center">Bem-vindo {{ Auth::user()->name }} <span class="text-indigo-600">TrackIO</span></h1>
        <p class="text-lg text-gray-600 mb-8 text-center max-w-xl">
            Gerencie sua frota de caminhões de forma simples, rápida e eficiente. Controle viagens, motoristas e muito mais em um só lugar.
        </p>
        <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-md text-lg font-semibold hover:bg-indigo-700 transition">Começar agora</a>
    </main>
    <footer class="bg-white shadow-inner py-4 mt-12">
        <div class="max-w-7xl mx-auto text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} TrackIO. Todos os direitos reservados.
        </div>
    </footer>
</body>
</html>
