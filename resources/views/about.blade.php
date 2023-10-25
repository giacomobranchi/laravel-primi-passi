<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>


<body class="antialiased">
    <header>
        <ul style="list-style:none; display: flex;">
            <li style="padding:0 1rem"><a href="/">Home</a></li>
            <li><a href="/contacts">Contacts</a></li>
        </ul>
    </header>
    <main style="text-align: center;">
        <h1>{{$about}}</h1>
        <p>{{$message}}</p>
    </main>

</body>

</html>