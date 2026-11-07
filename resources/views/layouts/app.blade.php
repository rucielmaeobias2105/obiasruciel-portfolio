<!DOCTYPE html>
<html lang="en" data-accent="gold">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ruciel Mae Obias — Turning ideas into thoughtful, functional digital experiences">
    <title>@yield('title', 'E-PORTFOLIO | Ruciel Mae Obias')</title>
    <link rel="icon" type="image/png" href="profile/tab_icon.png">

    <link rel="stylesheet" href="src/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

@include('partials.navbar')

    <main>
@include('partials.backdrop')

@yield('content')
    </main>

@include('partials.footer-transition')

@include('partials.footer')

@include('partials.modals')

@include('partials.scroll-top')

    <script type="module" src="src/js/app.js"></script>
</body>
</html>
