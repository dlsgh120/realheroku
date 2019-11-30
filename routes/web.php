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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/board','BoardController@index');

Route::get('/board/write','BoardController@write'); //글쓰기 폼 열기

Route::post('/board','BoardController@store'); //글쓰기 저장

Route::get('/board/read/{id}','BoardController@read'); //글 읽기

Route::get('/board/edit/{id}','BoardController@edit'); //글 변경하기 폼

Route::post('/board/update/{id}','BoardController@update'); //게시판 수정->업데이트

Route::get('/board/destroy/{id}','BoardController@destroy'); //삭제

/////////////////////////////////////////////////////

Route::get('/about','AboutController@index');

