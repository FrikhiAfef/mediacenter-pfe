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

// front controller
Route::group(['namespace'=>'utilisateur'],function() {
    Route::get('/','HomeController@index' );
    Route::get('Emission', 'EmissionController@emission')->name('emission');
    Route::get('Evenement', 'EvenementController@evenement')->name('evenement');
    Route::get('Programmes', 'ProgrammeController@programme')->name('programme');
    Route::get('Contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contactstore');
    Route::get('Equipe', 'EquipeController@equipe')->name('equipe');
    Route::get('DigitalMediaLab', 'MedialabController@index')->name('DigitalMediaLab');
    Route::get('Apropos', 'ApropoController@apropo')->name('apropos');
    Route::get('Podcast', 'PodcastController@podcast')->name('podcast');
    Route::get('Actualite', 'ActualiteController@actualite')->name('actualite');
    Route::get('Connexion', 'ConnexionController@index')->name('connexion');
    Route::get('Inscription', 'InscriptionController@index')->name('inscription');
    Route::get('Galerie', 'GalerieController@galerie')->name('galerie');
    Route::get('JumpInIncubator', 'JumpinController@jump')->name('jumpin');
    Route::get('Popup', 'PopupController@index')->name('popup');
} );

//les routes de superadmin
Route::group(['namespace'=>'admin'],function() {
    //route de home
    Route::get('admin/home','HomeController@index')->name('admin.home');
    //route de entreprise
    Route::resource('admin/entreprise','EntrepriseController');
    //route de entreprise
    Route::resource('admin/animateur','AnimateurController');

    //route de l'investisseur
    Route::resource('admin/investisseur','InvestisseurController');
    //route de partenaire
    Route::resource('admin/partenaire','PartenaireController');
    //route de role
    Route::resource('admin/administrateur','AdministrateurController');
    //route de permission
    Route::resource('admin/permission','PermissionController');
    //route de porteur
    Route::resource('admin/porteur','PorteurController');
    //route de role
    Route::resource('admin/role','RoleController');
    //admin roure
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route:: post('admin-login', 'Auth\LoginController@login');
} );

//les routes de admin=responsable
Route::group(['namespace'=>'responsable\radio'],function() {
    //route de l'actualité
    Route::resource('admin/actualite','ActualiteController');
    //route d'a propos
    Route::resource('admin/apropo','AproposController');
    //route de contact
    Route::resource('admin/contact','ContactController');
    //route de l'emission
    Route::resource('admin/emission','EmissionsController');
    //route de l'equipe
    Route::resource('admin/equipe','EquipeController');
    //route de l'evenement
    Route::resource('admin/evenement','EvenementController');
    //route de galerie
    Route::resource('admin/galerie','GaleriesController');
    //route de jum in incubator
    Route::resource('admin/jumpin','JumpinController');
    //route de digital media lab
    Route::resource('admin/medialab','MedialabController');
    //route de podcast
    Route::resource('admin/podcast','PodcastController');
    //route de programme
    Route::resource('admin/programme','ProgrammesController');
} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
