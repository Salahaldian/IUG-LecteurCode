<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('mystyle.css') }}">
        <title>Profile Student</title>
    </head>
    <body>
        <h1 style="color: blue; font-weight: bold;">Welcome to student profile page</h1>
        <h2 style="background-color: #4b5563;">Welcome {{ $name }}, his GPA is {{ $gpa }}</h2>
    </body>
    <script src="{{ asset('js/jquery.js') }}"></script>
</html>
