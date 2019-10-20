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

Route::get('/series', function() {
    $series = ["Walking Dead", "La Casa de Papel", "Titans"];

    $lista = array_reduce($series, function($string, $serie) {
        $string .= "<li>$serie</li>";
        return $string;
    }, "");

    return "<ul>$lista</ul>";
});
