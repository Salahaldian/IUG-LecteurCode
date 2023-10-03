<html>
    <head>
        @include('includes.style')
        @stack('style')
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        @include('includes.header')

        @yield('title')

        <hr>

        @yield('mainContent')

        @include('includes.footer')
    </div>
    </body>
    @include('includes.js')
    @stack('js')
</html>
