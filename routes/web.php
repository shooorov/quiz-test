<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/exams', 'ExamController@index');
Route::get('/exam/create', 'ExamController@create');
Route::post('/exam/store', 'ExamController@store');
Route::get('/exam/{exam}/delete', 'ExamController@delete');
Route::get('/exam/{exam}/edit', 'ExamController@edit');
Route::post('/exam/{exam}/update', 'ExamController@update');
Route::get('exams/{exam}/question/published ', 'ExamController@published');
Route::get('/exams/running', 'ExamController@running');

Route::get('/exams/{exam}/questions', 'QuestionController@index');
Route::get('/exams/{exam}/question/create', 'QuestionController@create');
Route::post('/question/store', 'QuestionController@store');
Route::get('/question/{question}/edit/', 'QuestionController@edit');
Route::post('/question/{question}/update', 'QuestionController@update');
Route::get('/question/{question}/delete/ ', 'QuestionController@delete');

Route::get('/result', 'AnswerController@index');
Route::post('/exams/{exam}/questions/store', 'AnswerController@store');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
