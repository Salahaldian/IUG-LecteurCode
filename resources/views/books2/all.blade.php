@extends('layouts.app')

    @push('style')
        <style>
            .table {
                background-color: #9ca3af;
            }
        </style>
    @endpush

    @section('title')
        <h1>Book Details Page</h1>
    @endsection

    @section('mainContent')
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
    @endsection
