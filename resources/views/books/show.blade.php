<html>
    <head>
        @include('includes.style')
    </head>
    <body>
        <div class="container">
            @include('includes.header')
            <p>Name of book is: {{ $book->name }}</p>
            <p>Author of book is: {{ $book->author }}</p>
            <p>Edition of book is: {{ $book->edition }}</p>
            @include('includes.footer', ['company' => $company])
        </div>
    </body>
    @include('includes.js')
</html>
