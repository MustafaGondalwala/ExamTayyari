<?php

use Illuminate\Support\Facades\Route;

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


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/admin/dashboard','Admin\HomeController@index')->name('admin.home');
    Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
    Route::get('/','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@login')->name('login');
    Route::post('/logout','LoginController@logout')->name('logout');
    Route::get('/home', 'DashboardController@index')->name('home');

    //Forgot Password Routes
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

    Route::get('/users',"UserController@index")->name('users.list');
    Route::get('/category',"CategoryController@index")->name('category.list');
    Route::get('/category/add',"CategoryController@add")->name('category.add');
    Route::post('/category/add',"CategoryController@addPost")->name('category.addPost');
    Route::get('/category/{id}/delete',"CategoryController@delete");
    Route::get('/category/{id}',"CategoryController@add");

    

    Route::get('/exam/{id}','ExamController@add')->name('exam.add');
    Route::get('/exam','ExamController@index')->name('exam.list');
    Route::get('/exam/{id}/delete','ExamController@deleteExam')->name('exam.delete');
    Route::get('/exam/add','ExamController@add')->name('exam.add');
    Route::post('/exam/add','ExamController@addPost')->name('exam.addPost');


    Route::get('/ebook','EbookController@index')->name('ebook.list');
    Route::get('/ebook/{id}','EbookController@add')->name('ebook.add');
    Route::get('/ebook/add','EbookController@add')->name('ebook.add');
    Route::post('/ebook/add','EbookController@addPost')->name('ebook.addPost');


    Route::get('/mock-test',"MockTestController@index")->name('mock-test.list');
    Route::get('/mock-test/add',"MockTestController@add")->name('mock-test.add');
    Route::post('/mock-test/add',"MockTestController@addPost")->name('mock-test.addPost');


    Route::get('/previous-question-paper/{id}',"PreviousQuestionPaperController@add")->name('previous-question-paper.add');
    Route::get('/previous-question-paper/add',"PreviousQuestionPaperController@add")->name('previous-question-paper.add');
    Route::post('/previous-question-paper/add',"PreviousQuestionPaperController@addPost")->name('previous-question-paper.addPost');
    Route::get('/previous-question-paper',"PreviousQuestionPaperController@index")->name('previous-question-paper.list');
});
