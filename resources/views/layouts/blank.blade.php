<html>

<head>
    <title>@yield('title')</title>
    <livewire:styles>
</head>

<body>
    @include('templates/header')
    <div style="margin-top: 20px; margin-bottom: 20px">
        @yield('content')
    </div>

    @include("templates/footer")    
    @stack('script-after')

    <livewire:scripts>
</body>

</html>