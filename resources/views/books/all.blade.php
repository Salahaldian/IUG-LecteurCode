<html>
    <head>
        @include('includes.style')
    </head>
    <body>
        <div class="container">
            @include('includes.header')
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Author</td>
                        <td>Edition</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->edition }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('includes.footer', ['company' => 'Salahaldin'])
        </div>
    </body>
    @include('includes.js')
</html>
