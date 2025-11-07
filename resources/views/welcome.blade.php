<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
    <title>Killer Network</title>
    <link rel="stylesheet" href="">

    @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello, welcome to Killer Network!
</h1>
<p> This is a sample Laravel application using Blade templating and Tailwind CSS for styling. </p>
<p> Explore the features and enjoy your stay!</p>
<p> - The Killer Network Team</p>
<p> Click the button below to view the list of ninjas.</p>
<a href="/killer" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    Find Killers.....
</a>
<p>
    Next....
</p>
<a href="{{ route('killer.contact') }}" class="bg-yellow-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    Contacts.....
</a>
    </body>
</html>
