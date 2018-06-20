<?php
use App\User;
use App\Notifications\AddMail;
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
    Route::post('Contact', 'ContactController@store')->name('contactstore');
    Route::get('Equipe', 'EquipeController@equipe')->name('equipe');
    Route::get('DigitalMediaLab', 'MedialabController@index')->name('DigitalMediaLab');
    Route::get('Apropos', 'ApropoController@apropo')->name('apropos');
    Route::get('Podcast', 'PodcastController@podcast')->name('podcast');
    Route::get('Actualite', 'ActualiteController@actualite')->name('actualite');
    Route::get('Connexion', 'ConnexionController@index')->name('connexion');
    Route::get('inscriptionhome', 'InscriptionController@index')->name('inscriptionhome');
    Route::get('inscriptionP', 'InscriptionporteurController@index')->name('inscriptionP');
    Route::post('inscriptionPs', 'InscriptionporteurController@store')->name('inscriptionP.store');
    Route::get('inscriptionPaffecter', 'InscriptionporteurController@affecter')->name('affecter');
    Route::get('inscriptionPidee', 'InscriptionporteurController@idee')->name('idee');
    Route::get('inscriptionPideeinv', 'InscriptionporteurController@ideeinv')->name('ideeinv');
    Route::get('inscriptionEntreprise', 'InscriptionEntrepriseController@index')->name('inscriptionEntreprise');
    Route::post('inscriptionEntreprisestore', 'InscriptionEntrepriseController@store')->name('inscriptionEntreprise.store');
    Route::get('inscriptionEntreprisevalider', 'InscriptionEntrepriseController@valider')->name('entreprise.valider');
    Route::get('inscriptionEntreprisedesactiver', 'InscriptionEntrepriseController@desactiver')->name('entreprise.desactiver');
    Route::get('inscriptionEntrepriseideeinv', 'InscriptionEntrepriseController@invEntreprise')->name('inventreprise');
    Route::get('inscriptionInvestisseur', 'InscriptionInvestisseurController@index')->name('inscriptionInvestisseur');
    Route::post('inscriptionInvestisseurstore', 'InscriptionInvestisseurController@store')->name('inscriptionInvestisseur.store');
    Route::get('inscriptionInvestisseurvalider', 'InscriptionInvestisseurController@valider')->name('valider');
    Route::get('inscriptionInvestisseurdesactiver', 'InscriptionInvestisseurController@desactiver')->name('investisseur.desactiver');

    Route::get('Galerie', 'GalerieController@galerie')->name('galerie');
    Route::get('JumpInIncubator', 'JumpinController@jump')->name('jumpin');
    Route::get('Popup', 'PopupController@index')->name('popup');
} );



//compte de porteure
Route::get('porteure/home', function () {

    return view('porteure.home');
});

//compte de l'entreprise
Route::get('entreprise/home', function () {
    return view('entreprise.home');
});


//compte de l'Investisseur
Route::get('investisseur/home', function () {
    return view('investisseur.home');
});



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
Route::resource('admin/publicite','PubliciteController');
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
Route::get('entreprise/home','Entreprise\HomeController@index')->name('entreprise.home');


Route::get('/home', function (){
    if(Auth::User()->role=='entreprise')
    {
        $notifications=auth()->user()->unreadNotifications;
        foreach ($notifications as $notification){
            dd($notification->data['user']['name']);

        }
        return view('entreprise.home');
        User::find(1)->notify(new AddMail());
    }
    else if (Auth::User()->role=='investisseur')
    {
        return view('investisseur.home');
    }
    else if (Auth::User()->role=='porteur')
    {
        return view('porteure.home');
    }
    else
    {return( 'faire l"inscription please');}
})->name('home');
Route::get('login','Auth\LoginController@showLoginForm')->name('login');

Route::get('/profilP/','UserController@profileP')->name('profilP');
Route::get('/profilE','UserController@profileEnt')->name('profilE');
Route::get('/profilI','UserController@profileinv')->name('profilI');
Route::get('/editE','UserController@editE')->name('editE');
Route::get('/editI','UserController@editI')->name('editI');
Route::get('/editP','UserController@editP')->name('editP');
Route::get('/updateE','UserController@updateE')->name('updateE');
Route::get('/updateI','UserController@updateI')->name('updateI');
Route::get('/updateP','UserController@updatePorteur')->name('updateP');
