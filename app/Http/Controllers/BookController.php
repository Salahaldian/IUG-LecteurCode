<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAll()
    {
        $b1 = (object)['name' => 'Clean Code', 'author' => 'Uncle Bob', 'edition' => 1];
        $b2 = (object)['name' => 'Introduction to Java', 'author' => 'Someone', 'edition' => 3];
        $b3 = (object)['name' => 'Pattern in Cloud Systems', 'author' => null, 'edition' => 2];
        $books = [$b1, $b2, $b3];
        // dd($books); // just return the date information
        // dump($books); // return the view with data information
        return view('books2.all', [
            'books' => $books,
            'company' => 'Salahaldin'
        ]);
    }

    public function getOne()
    {
        $b1 = (object)['name' => 'Clean Code', 'author' => 'Uncle Bob', 'edition' => 1];
        return view('books2.show', [
            'book' => $b1,
            'company' => 'Salahaldin'
        ]);
    }
}
