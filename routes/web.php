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
define('TODO_LIST_ROUTE_NAME','list_todo'); # rename to TODO_LIST_ROUTE_NAME
define('CREATE_TODO_ROUTE_NAME','update_todo');
define('DELETE_TODO_ROUTE_NAME','delete_todo');
define('DELETE_BY_ID_TODO_ROUTE_NAME','delete_by_id_todo');

define('AJAX_INDEX_ROUTE_NAME', 'ajax');
define('TRY_AJAX_1_ROUTE_NAME', 'try_ajax');

define('WEB_URL','/');

Route::get('/', function () {
    echo'xxx';
});

// Route::get('/{psyname}', function ($name) {
//     echo$name;
// });

Route::name(TODO_LIST_ROUTE_NAME)->get('/todo', 'TodoController@index');
Route::get('/todo/test_var', 'TodoController@test_var');
Route::name(CREATE_TODO_ROUTE_NAME)->post('/todo', 'TodoController@update');
#Route::name(DELETE_TODO_ROUTE_NAME)->delete('/todo/{todo}', 'TodoController@remove');
Route::name(DELETE_BY_ID_TODO_ROUTE_NAME)->delete('/todo/{todo}', 'TodoController@remove2');

Route::name(AJAX_INDEX_ROUTE_NAME)->get('/ajax', 'AjaxController@index');
Route::name(TRY_AJAX_1_ROUTE_NAME)->get('/ajax/try_ajax1', 'AjaxController@try_ajax1');

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

# https://www.w3resource.com/laravel/URL-generation.php
Route::name('ironman')->get('the/{first}/avenger/{second}',function($first, $second) {
    return "Tony Stark, the {$first} avenger {$second}.";
});
Route::get('example', function(){
    return URL::route('ironman', array('aaa', 'bbb'));
});

Route::name(ADMIN_ROUTE_NAME_PREFIX)->group(function () {
    Route::get('users', function () {
        // Route assigned name "admin.users"...
    })->name(USER_LIST_ROUTE_NAME);
});

Route::fallback(function () {
    echo'404 page here.';
});
