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
define('PROFILE_ROUTE_NAME','profile');
define('ADMIN_ROUTE_NAME_PREFIX','admin.');
define('USER_LIST_ROUTE_NAME','names');

Route::get('/', function () {
    echo'xxx';
});

// Route::get('/{psyname}', function ($name) {
//     echo$name;
// });

Route::get('/todo', 'TodoController@index');
Route::post('/todo', 'TodoController@update');


Route::get('search/{rest}', function ($rest) {
    echo $rest;
})->where('rest', '.*');

Route::any('/', function () {
    echo'Handling all HTTP methods at "/"';
});

Route::name(PROFILE_ROUTE_NAME)->get('user/profile', function () {
    echo'user profile here:';
    echo route('profile');
});

Route::name(ADMIN_ROUTE_NAME_PREFIX)->group(function () {
    Route::get('users', function () {
        // Route assigned name "admin.users"...
    })->name(USER_LIST_ROUTE_NAME);
});

Route::fallback(function () {
    echo'404 page here.';
});
