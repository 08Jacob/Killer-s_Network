<html lang="{{ str_replace('_', '_', app()->getlocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Killers Network </title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    @if (session('success'))
        <div id="flash" class="px-4 text-center bg-green-50 text-green-500 font-bold mb-4">
            <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <header>
        <nav>
            <h1> Killers Network</h1>
            <a href="{{ route('killer.index') }}">All Killers</a>
                <a href="{{ route('killer.create') }}">Create New Killers</a>
                <a href="/killer/contact"></a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
