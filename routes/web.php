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

Route::get('/journal', function () {
    return view('journal');
})->name('journal');

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/addJournal', function () {
    return view('addJournal');
});

Route::get('/more',function(){
    return view('more');
});


//---------------------------------------
//editor

Route::get('/editor/profile', function () {
    return view('editor.profile');})
->name('editor.profile');

Route::post('/editor/update','App\Http\Controllers\EditorController@update')
->name('editor.update');


Route::get('/editor/research', function () {
    return view('editor.resarch');
})->name('editor.research');


Route::get('/editor/show', function () {
    return view('editor.show');
})->name('editor.show');


Route::get('/editor/policy', function () {
    return view('editor.policy');
})->name('editor.policy');
