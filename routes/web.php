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
Route::get('/exams', 'ExamController@index');
Route::get('/exam/create', 'ExamController@create');
Route::post('/exam/store', 'ExamController@store');
Route::get('/exam/{exam}/delete', 'ExamController@delete');
Route::get('/exam/{exam}/edit', 'ExamController@edit');
Route::post('/exam/{exam}/update', 'ExamController@update');

Route::get('/exams/{exam}/questions/', 'QuestionController@index');
Route::get('/exams/{exam}/question/create/', 'QuestionController@create');
Route::post('/question/store', 'QuestionController@store');
Route::get('/question/{question}/edit/', 'QuestionController@show');
Route::post('/question/{question}/update', 'QuestionController@update');
Route::get('/question/{question}/delete/ ', 'QuestionController@delete');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
