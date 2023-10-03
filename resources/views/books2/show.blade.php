@extends('layouts.app')
    @section('title')
        <h1>Book Details Page</h1>
    @endsection
    @section('mainContent')
        <p>Name of book is: {{ $book->name }}</p>
        <p>Author of book is: {{ $book->author }}</p>
        <p>Edition of book is: {{ $book->edition }}</p>
    @endsection
