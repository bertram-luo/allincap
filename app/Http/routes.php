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



Route::group(['middlewareGroups' => ['web']], function(){
    /************************* start of project routes************************/
    Route::get('/', function(){
        return redirect('/index');
    });
    Route::get('/index', 'IndexController@index');
    Route::get('/index/detail/{id}', 'IndexController@detail');
    Route::auth();

    Route::get('/admin', function(){
        return redirect('/news');
    });

    Route::resource('news', 'NewsController');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::get('/ueditor/process', 'UeditorController@index');
    Route::post('/ueditor/process', 'UeditorController@index');

    /************************* end of project routes************************/
    // dummy for test
    Route::get('/home', 'HomeController@index');
    Route::get('/slider', 'SliderController@index');
    Route::get('/myslider', 'SliderController@myslider');

    // dummy legacy
    Route::get('begin', function(){
        Session::flash('status', 'Hello There');
        return redirect('/');
    });
    Route::delete('photos/{id}', 'PhotosController@destroy');
    Route::get('/about', 'PagesController@about');
});
