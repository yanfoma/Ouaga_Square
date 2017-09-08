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
    return view('index');
});

/*  page d'accueil  */

Route::get('/index', 'IndexController@index');

/*  login  */

Route::get('/login', ['as'=>'login','uses'=>'IndexController@login']);

Route::post('log', 'AdminController@log');

/*  index admin  */

Route::get('/admin_index','AdminController@index');

/*  backup de la BDD  */

Route::get('/backup','AdminController@backup');

Route::get('/sauvegarde','AdminController@sauvegarde');

/*  categorie de projet  */

Route::get('/creer_categorie_projet','AdminController@creer_categorie_projet');

Route::post('/c_categorie_projet','AdminController@c_categorie_projet');

/*  phase de projet  */

Route::get('/creer_projet_phase','AdminController@creer_projet_phase');

Route::post('/c_projet_phase','AdminController@c_projet_phase');

/*  responsable de projet  */

Route::get('/creer_projet_responsable','AdminController@creer_projet_responsable');

Route::post('/c_projet_responsable','AdminController@c_projet_responsable');

/*  executeur de projet  */

Route::get('/creer_projet_executeur','AdminController@creer_projet_executeur');

Route::post('/c_projet_executeur','AdminController@c_projet_executeur');

/*  projet  */

Route::get('/creer_projet','AdminController@creer_projet');

Route::post('/c_projet','AdminController@c_projet');

/*  detail projet  */

Route::get('detail_projet{id}', 'AdminController@detail_projet'); 

/*  enregister le projet au format pdf  */

Route::get('pdf{id}', 'IndexController@pdf'); 

/*  commentaire  */

Route::post('/commentaire','IndexController@commentaire');