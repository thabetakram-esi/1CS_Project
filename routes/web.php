<?php

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

Route::get('/', 'MyController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/EspaceAdministrateur','Mycontroller@espace_admin');
Route::get('/EspaceAdministrateur/etudiant/create',['uses'=>'PostController@create','as'=>'etudiant.create']);
Route::get('/EspaceAdministrateur/enseignant/create',['uses'=>'MyController2@create','as'=>'enseignant.create']);
Route::post('/EspaceAdministrateur/etudiant/store',['uses'=>'PostController@store','as'=>'etudiant.store']);
Route::post('/EspaceAdministrateur/enseignant/store',['uses'=>'MyController2@store','as'=>'enseignant.store']);
Route::get('/EspaceAdministrateur/etudiant/show',['uses'=>'PostController@index','as'=>'etudiant.show']);
Route::get('/EspaceAdministrateur/enseignant/show',['uses'=>'MyController2@index','as'=>'enseignant.show']);
Route::get('/EspaceAdministrateur/etudiant/modifier',['uses'=>'PostController@modifier','as'=>'etudiant.modifier']);
Route::get('/EspaceAdministrateur/enseignant/modifier',['uses'=>'Mycontroller2@modifier','as'=>'enseignant.modifier']);

Route::get('/EspaceAdministrateur/etudiant/update{id}',['uses'=>'PostController@update','as'=>'etudiant.update']);
Route::get('/EspaceAdministrateur/enseignant/update{id}',['uses'=>'Mycontroller2@update','as'=>'enseignant.update']);

Route::get('/EspaceAdministrateur/enseignant/destroy{id}',['uses'=>'Mycontroller2@destroy','as'=>'enseignant.destroy']);
Route::get('/EspaceAdministrateur/etudiant/destroy{id}',['uses'=>'PostController@destroy','as'=>'etudiant.destroy']);

Route::get('/EspaceAdministrateur/etudiant/supprimer',['uses'=>'PostController@supprimer','as'=>'etudiant.supprimer']);
Route::get('/EspaceAdministrateur/enseignant/supprimer',['uses'=>'Mycontroller2@supprimer','as'=>'enseignant.supprimer']);


Route::get('/EspaceEnseignant','Mycontroller@espace_ens');
Route::get('/EspaceEnseignant/AjouterCours','Mycontroller@ajouter_crs');
Route::post('/EspaceEnseignant/ajouter',['uses'=>'Mycontroller@store','as'=>'cours.ajout']);
Route::get('/EspaceEtudiant','Mycontroller@espace_etd');
Route::get('/EspaceEtudiant/ConsulterCours','Mycontroller@Consulter');