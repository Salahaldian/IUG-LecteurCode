<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome to {{ $page }}</h1>

        <h3>The current time is {{ Date('Y-m-d') }}</h3>
        <h3>Code is {!! $code !!}</h3>
    </body>

    <script>
        var currentDAte = {{ Date('Y-m-d') }};
        var data = {{ \Illuminate\Support\Js::from($data) }};
        console.log(data);
    </script>
</html>
