<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

# routing get hello
Route::get('hello', function () {
    return 'Hello World';
});

# routing match
Route::match(['get', 'post'], 'match', function () {
    return 'Hello ';
});

# routing any
Route::any('foo', function () {
    return 'Hello World';
});

#get id
Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

#get name
Route::get('name/{name?}', function ($name = "dimas") {
    return $name;
});

#get where
Route::get('coba/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('belajar', ['as' => 'belajar', function () {
    return 'Hello World';
}]);
Route::get('baru', function () {
    return view('baru');
});

