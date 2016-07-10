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

Route::resource('/', 'front\homeController');
Route::resource('institut', 'front\salonController');
Route::resource('prestations', 'front\prestationsController');
Route::resource('produits', 'front\productsController');
Route::resource('offres', 'front\offersController');
Route::resource('conseils', 'front\advicesController');
Route::resource('contact', 'front\contactController');
Route::resource('partenaires', 'front\partnersController');
Route::resource('mentions-legales', 'front\legalNoticeController');
Route::resource('remerciements', 'front\thanksController');




/*ROUTES BACK*/

Route::group(['prefix' => 'admin'], function() {

    Route::group(['middleware' => 'auth']
        , function () {
            /*pour l'authentification, tout se passe dans le dossier vendor/bestmomo */
            Route::get('/', ['as' => 'admin.home', 'uses' => '\Bestmomo\Scafold\Http\Controllers\HomeController@index']);
            Route::resource('actu', 'back\ActuController');
            Route::resource('offres', 'back\OffersController');
            Route::resource('conseils', 'back\AdvicesController');

        });

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

});