<html>

    @php
        $enterprise = "Salahaldin Inc.";
    @endphp
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome to Inventory page</h1>
        <div>
            Translate <input type="checkbox" checked>
        </div>
        <ul>
            @foreach($inventories as $inventory)
{{--                @if($loop->first) <p>First iteration</p> @endif--}}
{{--                @if($loop->last) <p>Last iteration</p> @endif--}}
{{--                <p>{{ $loop->count }}</p>--}}
{{--                <p>{{ $loop->remaining }}</p>--}}
                <li>{{ $loop->iteration }}- {{ $inventory->name }}</li>
                <ul>
                    @foreach($inventory->locations as $location)
                        <li>{{ $loop->parent->iteration }} --- {{ $loop->iteration }}- {{ $location }}</li>
                    @endforeach
                </ul>
            @endforeach
        </ul>

        <footer>
            <p @style(['color:blue', 'background-color:yellow'])>Copyright for {{ $enterprise }}</p>
        </footer>
    </body>
</html>
