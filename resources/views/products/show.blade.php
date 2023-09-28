<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome to product page</h1>

        {{--  بتفحص لو في بيانات داخل المتغير يعني معرف وقيمته مش null --}}
        @isset($product)
            <p>The product is existing</p>
        @endisset

        {{-- بتفحص المتعير لو فاضي ، يعني بتفحص الفيمة تعته ولو كانت برضو null or zero or false or null string --}}
        @empty($product)
            <p>The product is empty</p>
        @endempty

        @auth
            <p>The user is authenticated</p>
        @endauth

        @guest
            <p>The user is not authenticated</p>
        @endguest

        <p>Name is: {{ $product['name'] }}</p>

        @if($product['price'] >= 50)
            <p>The price = {{ $product['price'] }} is High</p>
        @elseif($product['price'] >= 20 and $product['price'] < 50)
            <p>The price = {{ $product['price'] }} is Mid</p>
        @else
            <p>The price = {{ $product['price'] }} is Low</p>
        @endif

        {{-- unless(var) = if( !($var) )--}}
        @unless($product['price'] >= 100)
            <p>The product price is more than 100</p>
        @endif

        @switch( $product['name'] )
            @case('Coffee')
                <p>The product is a Coffee</p>
                @break
            @case('Tea')
                <p>The product is a Tea</p>
                @break
            @default
                <p>The product is not a drink</p>
        @endswitch

        <p>Brand is: {{ $product['brand'] }}</p>

        <ul>
            @for($i = 0; $i < count($stores); $i++)
                <li>{{ $stores[$i]  }}</li>
            @endfor
        </ul>

        <ul>
            @foreach($stores as $store)
                <li>{{ $store }}</li>
            @endforeach
        </ul>

        <ul>
            @forelse($customers as $customer)
                <li>{{ $customer->name }}</li>
            @empty
                <li>No Customers</li>
            @endforelse
            {{-- forelse work like this code :
            @if(!empty($customers))
                @foreach($customers as $customer)
                    <li>{{ $customer->name }}</li>
                @endforeach
            @else
                <li>No Customers</li>
            @endif
            --}}
        </ul>
    </body>
</html>
