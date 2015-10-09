<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('palavar_categories');
});

Route::get('/reply', function () {
    return view('reply');
});

Route::get('/thread', function () {
    return view('thread');
});


Route::get('/categories/{categoryId}/{categoryAlias}','ForumController@getViewCategory');
Route::post('/postreply/{categoryId}/{categoryAlias}/{threadId}/{threadAlias}','ForumController@postReplyToThread');
Route::post('/thread/{categoryId}/{categoryAlias}','ForumController@postCreateThread');
Route::post('/createthread/{categoryId}/{categoryAlias}','ForumController@postCreateThread');
Route::get('/thread/{categoryId}/{categoryAlias}/{threadId}/{threadAlias}','ForumController@getViewThread');
Route::get('/createthread/{categoryId}/{categoryAlias}','ForumController@getCreateThread');
Route::get('/showthreads/{categoryId}/{categoryAlias}','ForumController@getViewCategoryOnlyThreads');