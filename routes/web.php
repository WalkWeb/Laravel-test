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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Публичная часть
Route::group(['middleweare' => 'web'], function() {

    // Главная
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'home']);

    // Страницы сервисов
    Route::get('/page/{id}', ['uses' => 'PageController@execute', 'as' => 'page']);

    // Авторизация
    Route::auth();
});

// Закрытая часть (админка)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    // Главная админки
    Route::get('/', ['uses' => 'AdminController@execute', 'as' => 'admin']);

    // Управление страницами сервисов
    Route::group(['prefix' => 'pages'], function() {

        Route::get('/', ['uses' => 'Auth\AdminPagesController@execute', 'as' => 'pages']);

        Route::match(['get', 'post'], '/add', ['uses' => 'Auth\AdminPagesAddController@execute', 'as' => 'pagesAdd']);

        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'Auth\AdminPagesEditController@execute', 'as' => 'pagesEdit']);
    });
});
