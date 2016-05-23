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

/*routes front*/

Route::get('/', 'front\homeController@index');


/*ROUTES BACK*/

Route::group(['prefix' => 'admin'], function() {

    Route::group(['middleware' => 'auth']
        , function () {
            /*pour l'authentification, tout se passe dans le dossier vendor/bestmomo */
            Route::get('/', ['as' => 'admin.home', 'uses' => '\Bestmomo\Scafold\Http\Controllers\HomeController@index']);
            Route::resource('pages', 'back\PagesController');
            Route::resource('articles', 'back\PostsController');
            Route::resource('mise-en-avant', 'back\SidebarController');
            Route::resource('galerie', 'back\GalleryController');

        });

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

});