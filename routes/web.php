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

// ��������� �����
Route::group(['middleweare' => 'web'], function() {
    
    // �������
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'home']);
        
    // �������� ��������
    Route::get('/page/{id}', ['uses' => 'PageController@execute', 'as' => 'page']);
    
    // �����������
    Route::auth();
    
});

// �������� ����� (�������)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    
    // ������� �������
    Route::get('/', ['uses' => 'AdminController@execute', 'as' => 'admin']);
    
    // ���������� ���������� ��������
    Route::group(['prefix' => 'pages'], function() {
    
        Route::get('/', ['uses' => 'Auth\AdminPagesController@execute', 'as' => 'pages']);
        
        Route::match(['get', 'post'], '/add', ['uses' => 'Auth\AdminPagesAddController@execute', 'as' => 'pagesAdd']);
        
        Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'Auth\AdminPagesEditController@execute', 'as' => 'pagesEdit']);
        
    });
    
});
