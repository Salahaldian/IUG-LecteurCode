<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('my/first', function () {
    return "Hello to my page";
});

Route::get('page/welcome', function () {
    return "Welcome Welcome";
});

Route::get('home', function () {
    return view('home');
});

Route::get('std/profile', function () {
    $name = "Ahmad";
    $gpa = 88.4;
//    return view('student.profile')->with('name', $name)->with('gpa', $gpa);
//    return view('student.profile', [ 'name' => $name, 'gpa' => $gpa ]);
    return view('student.profile')->with(compact('name','gpa'));
});

Route::get('std/grades', function () {
    return view('student.info.grades');
});

Route::get('std/personal', function () {
    return view('student.info.personal');
});

Route::get('std/sta', function () {
    return view('student.info.sta');
});

Route::get('page', function () {
    $pageName = "CR Page";
    $data = ['A', 'B', 'C'];
    return view('page')->with(compact('pageName', 'data'));
});

Route::get('greeting-page', function () {
    return view('greeting', [
        'page' => 'Greeting Page',
        'code' => "hello <script> alert('hi') </script>",
        'data' => [1,22,3],
    ]);
});

Route::get('products/show', function () {
    $product = [
        'name' => 'Coffee',
        'price' => 30.4,
        'brand' => 'StarBucks'
    ];
    $stores = ['Store A' , 'Store Link' , 'Store Gaza'];
    $c1 = (object)['name' => 'Ahmad', 'address' => 'Gaza'];
    $c2 = (object)['name' => 'Ali', 'address' => 'Cairo'];
    $customers = [$c1, $c2];
    return view('products/show', [
        'product' => $product,
        'stores' => $stores,
        'customers' => $customers
    ]);
});

Route::get('inventories', function () {
    $inv1 = (object)['name' => 'Inventory 1', 'qty' => 2500, 'locations' => ['Gaza', 'Rafah']];
    $inv2 = (object)['name' => 'Inventory BC', 'qty' => 1000, 'locations' => ['L1', 'C1']];
    $inv3 = (object)['name' => 'UY', 'qty' => 8000, 'locations' => ['LO2']];
    $inventories = [$inv1, $inv2, $inv3];
    return view('products.inventories', [
        'inventories' => $inventories
    ]);
});

#########################################

Route::get('books', function () {
    $b1 = (object)['name' => 'Clean Code', 'author' => 'Uncle Bob', 'edition' => 1];
    $b2 = (object)['name' => 'Introduction to Java', 'author' => 'Someone', 'edition' => 3];
    $b3 = (object)['name' => 'Pattern in Cloud Systems', 'author' => null, 'edition' => 2];
    $books = [$b1, $b2, $b3];
    return view('books.all', [
        'books' => $books,
    ]);
});

Route::get('book', function () {
    $b1 = (object)['name' => 'Clean Code', 'author' => 'Uncle Bob', 'edition' => 1];
    return view('books.show', [
        'book' => $b1,
        'company' => 'Salahaldin'
    ]);
});
