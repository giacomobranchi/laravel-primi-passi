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
<header>
    <ul style="list-style:none; display: flex;">
        <li style="padding:0 1rem"><a href="/about">About Us</a></li>
        <li><a href="/contacts">Contacts</a></li>
    </ul>
</header>

<body class=" antialiased">
    <h1 style="text-align: center;">{{$welcome}}</h1>
</body>

</html>