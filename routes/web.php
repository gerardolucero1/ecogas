<?php

use App\Models\Info;
use Inertia\Inertia;
use App\Models\Winner;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\QuestionController;
use phpDocumentor\Reflection\Types\Resource_;

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
    $questions = Question::all();
    $winners = Winner::all();
    $info = Info::first();

    return Inertia::render('Index2', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'questions' => $questions,
        'winners' => $winners,
        'info' => $info
    ]);
})->name('welcome');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        $winners = Winner::all();
        $info = Info::first();
        
        return Inertia::render('Dashboard', compact('winners', 'info')); 
    })->name('dashboard');

    Route::get('question', 'App\Http\Controllers\QuestionController@index')->name('questions.index');
    Route::get('question/create', 'App\Http\Controllers\QuestionController@create')->name('questions.create');
    Route::get('question/edit/{id}', 'App\Http\Controllers\QuestionController@edit')->name('questions.edit');
    Route::post('question', 'App\Http\Controllers\QuestionController@store')->name('questions.store');
    Route::post('question/{id}', 'App\Http\Controllers\QuestionController@update')->name('questions.update');
    Route::delete('question/{id}', 'App\Http\Controllers\QuestionController@destroy')->name('questions.delete');

    Route::get('get-questions', 'App\Http\Controllers\QuestionController@getQuestions');

    Route::get('winner', 'App\Http\Controllers\WinnerController@index')->name('winners.index');
    Route::get('winner/create', 'App\Http\Controllers\WinnerController@create')->name('winners.create');
    Route::get('winner/edit/{id}', 'App\Http\Controllers\WinnerController@edit')->name('winners.edit');
    Route::post('winner', 'App\Http\Controllers\WinnerController@store')->name('winners.store');
    Route::post('winner/{id}', 'App\Http\Controllers\WinnerController@update')->name('winners.update');
    Route::delete('winner/{id}', 'App\Http\Controllers\WinnerController@destroy')->name('winners.delete');

    Route::get('get-winners', 'App\Http\Controllers\WinnerController@getWinners');

    Route::post('update-info', 'App\Http\Controllers\InfoController@update');
});
