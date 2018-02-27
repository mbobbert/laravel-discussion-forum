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
Route::get('/',function()
{
    return view('welcome');
});
//list of questions
Route::get('/questions', 'QuestionController@index');
//Route::get('/questions/{id}', 'QuestionController@show');
Route::get('questions/create', 'QuestionController@create');

Route::post('/questions/store', 'QuestionController@store');

//detail of a question
Route::get('/questions/{id}', 'QuestionController@show')->name('show question');
