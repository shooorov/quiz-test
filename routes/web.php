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
Route::get('/exams/{exam}/questions/{question}', 'QuestionController@question');
Route::get('/exams/{exam}/question/create', 'QuestionController@create');
Route::post('/question/store', 'QuestionController@store');
Route::get('/question/{question}/edit/', 'QuestionController@edit');
Route::post('/question/{question}/update', 'QuestionController@update');
Route::get('/question/{question}/delete/ ', 'QuestionController@delete');

Route::get('/result', 'AnswerController@index');
Route::post('/exams/{exam}/questions/store/answer/{question}', 'AnswerController@ans');
Route::post('/exams/{exam}/questions/store', 'AnswerController@store');
Route::get('/exams/{exam}/questions/skip/{question}', 'AnswerController@skip');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
