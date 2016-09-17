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
    Route::get('begin', function(){
        Session::flash('status', 'Hello There');
        return redirect('/');
    });
    Route::get('/', function(){
          //return view('welcome');
        return redirect('/index');
    });


    Route::auth();

    Route::get('/ueditor/process', 'UeditorController@index');
    Route::post('/ueditor/process', 'UeditorController@index');
    Route::get('/courses/welcome', 'CourseController@index');
    Route::get('/courses/lecture/{id}', 'CourseController@course');

    Route::get('/home', 'HomeController@index');
    Route::get('/index', 'IndexController@index');
    Route::get('/slider', 'SliderController@index');
    Route::get('/myslider', 'SliderController@myslider');
    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::get('/facedetect', 'FaceDetectController@index');
    Route::post('/facedetect/process', 'FaceDetectController@process');

    Route::get('flyers/home', 'FlyersController@index');
    Route::resource('flyers', 'FlyersController');
    Route::resource('news', 'NewsController');
    Route::get('news/detail/{id}', 'NewsController@detail');
    Route::get('{zip}/{street}', 'FlyersController@show');
    //Route::post('{zip}/{street}/photos', ['as' => 'store_photo_path', 'uses' => 'FlyersController@addPhoto']);
    Route::post('{zip}/{street}/photos', ['as' => 'store_photo_path', 'uses' => 'PhotosController@store']);

    Route::delete('photos/{id}', 'PhotosController@destroy');


    Route::get('/designpatterns', function(){
        return view("rshare.designpatterns");
    });

    Route::get('/about', 'PagesController@about');
});
