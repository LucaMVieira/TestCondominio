<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Condominial</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-8">Sistema Condominial</h1>
        <a href="{{ route('login') }}"
           class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
            Entrar no Sistema
        </a>
    </div>
</body>
</html>
