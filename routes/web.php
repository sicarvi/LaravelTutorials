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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "Contact info - Online Store";
    $data2 = "Contact information";
    $description = "This is my contact information";
    $email = "Email: lapaginita@gmail.com";
    $address = "Address: P. Sherman, 42 Wallaby Way, Sydney";
    $phone = "Phone number: 2505678";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("email", $email)
      ->with("address", $address)
      ->with("phone", $phone);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
