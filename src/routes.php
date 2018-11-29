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

Route::group(['middleware' => ['web']], function () {

    Route::post('/profile/{uid}',     [
        'uses' => 'KindGuide\Controllers\VolunteerController@volunProfileAdm', 
        'middleware' => ['auth']
    ]);
    Route::get( '/profile/{uid}',     [
        'uses' => 'KindGuide\Controllers\VolunteerController@volunProfileAdm', 
        'middleware' => ['auth']
    ]);
    
    Route::get('/admin', [
        'uses' => 'KindGuide\Controllers\KindGuideAdmin@dashHome', 
        'middleware' => ['auth']
    ]);
    
    Route::get('/dashboard', [
        'uses' => 'KindGuide\Controllers\KindGuideAdmin@dashHome', 
        'middleware' => ['auth']
    ]);

});    

?>