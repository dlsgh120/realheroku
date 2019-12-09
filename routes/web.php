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

Route::get('/about/1','AboutController@explane'); //홈페이지 설명
 
Route::get('/about/2','AboutController@information'); //나의정보

//////////////////////////////////////////////////////

Route::get('/notice','NoticeController@index');//공지사항

Route::get('/notice/write','NoticeController@write'); //글쓰기 폼 열기

Route::post('/notice','NoticeController@store'); //글쓰기 저장

Route::get('/notice/read/{id}','NoticeController@read'); //글 읽기

Route::get('/notice/edit/{id}','NoticeController@edit'); //글 변경하기 폼

Route::post('/notice/update/{id}','NoticeController@update'); //공지사항 수정->업데이트

Route::get('/notice/destroy/{id}','NoticeController@destroy'); //삭제

//////////////////////////////////////////////////////////

Route::get('/main','MainController@index');

Route::get('/main/write','MainController@write');//메인페이지 글쓰기 폼 열기

Route::post('/main','MainController@store'); //글쓰기 저장

Route::get('/main/read/{id}','MainController@read'); //글 읽기

Route::get('/main/edit/{id}','MainController@edit'); //글 변경하기 폼

Route::post('/main/update/{id}','MainController@update'); //공지사항 수정->업데이트

Route::get('/main/destroy/{id}','MainController@destroy'); //삭제

////////////////////////////////////////////////////

Route::post('/review/{getid}','ReviewController@store'); //리뷰작성

Route::get('/review','ReviewController@index');

