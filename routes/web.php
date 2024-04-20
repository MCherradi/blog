<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/articles', 'ArticleController@getAllArticles');
Route::get('/articles/{id}', 'ArticleController@getArticleByID');
Route::get('/addArticleForm', function(){
    return view('article.ajout_form');
});
Route::post('/addArticleHandler', 'ArticleController@addArticle');
Route::get('/deleteArticle/{id}', 'ArticleController@deleteArticle');
Route::get('/editArticleForm/{id}', 'ArticleController@edit_form');
Route::post('/editArticleHandler/{id}', 'ArticleController@updateArticle');

