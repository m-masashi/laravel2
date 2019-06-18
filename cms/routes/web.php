<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view( 'books' );
});

//Route::get('/', function () {
//    return view('welcome');
//});

/*
* 新「本」を追加
*/

Route::post('/books', function (Request $request) {
    //
});

/*
* 本を削除
*/

Route::delete('/book/{book}', function (Book $book) {
    //
});
