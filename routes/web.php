<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    dd(
        [
            "name" => "Fabio",
            "cpf" => "1312312321",
        ],
        [
            "name" => "Weslly",
            "cpf" => "931283142",
        ],
        [
            "name" => "Elaine",
            "cpf" => "78923721",
        ],
        [
            "name" => "Talita",
            "cpf" => "2e232112",
        ],
    );
});
