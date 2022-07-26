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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main_page');
});
Route::get('/product', function () {
    return view('product_view');
});
Route::get('/product/edit', function () {
    return view('edit_product');
});
/*Route::get('/client', function () {
    return view('main_page');
});*/
Route::get('/client/edit', function () {
    return view('edit_client');
});
