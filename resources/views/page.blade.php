<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Weclome to {{ $pageName }} page</h1>
        <h1>Weclome to <?php echo $pageName ?> page</h1>

        <ul>
            {{-- show data by php native code --}}
            <?php
                foreach ($data as $item)
                {
                    echo "<li>". $item . "</li>";
                }
            ?>
        </ul>
    </body>
</html>
