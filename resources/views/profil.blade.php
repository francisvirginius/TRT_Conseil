<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/assets/css/app.css">
    <script type="module" src="/dist/assets/js/app.js" defer></script>
</head>
<body>
    <div class="mt-10 container mx-auto" id="app">
        @yield('content')
        <navbar></navbar>
        <voiranonnce></voiranonnce>
    </div>
    <router-view></router-view>
    
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>