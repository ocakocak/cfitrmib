<html>

<head>
    <title>Sahabat Karir</title>
</head>

<body>
    @include('templates/header')
    @include('templates/sidebar')
    <div style="margin-top: 20px; margin-bottom: 20px">
        @yield('content')
    </div>

    @include("templates/footer")    
    @stack('script-after')
</body>
@yield('footer')
</html>