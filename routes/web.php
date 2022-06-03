<?php
use App\Contrat;
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

use App\Http\Controllers\BailController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//on a un namespace pour demander a notre controller de chercher les controllers dans le namespace specifié
//on a un prefix pour dire au route de toujours commencer par admin
//on concatene avec name(admin.)
route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    route::resource('users','UsersController');



});


route::get('/info/{id}/','BailController@client')->name('client.info');
route::get('/accueil',"BailController@accueil")->name('accueil');
route::get('/client/{id}','BailController@connexion_client')->name('info.client');


// route::post('/fournisseur_page','BailController@finsertion')->name('fournisseur.page');
route::get('connexion','BailController@connexion')->name('form.connexion');
Route::post('connexion_client','BailController@connexion_client')->name('client.connexion');
route::post('/dossier',"BailController@createDossier")->name('client.dossier');

// route::get('/fournisseur','BailController@fournisseur')->name('form.fournisseur');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dash','BailController@dash')->name('admin.dashboard');
    route::get('/doc',"BailController@dossier")->name('gestion.dossier');

    route::get('/dashboard/{id}','BailController@valider')->name('client.valider');
    // route::get('/dashboard_bq/{id}','BailController@bloquer')->name('client.bloquer');
    route::get('/liste','BailController@liste')->name('liste.dash');
    route::get('/credit','BailController@credit')->name('gestion.credit');
    route::post('/remboursement/','BailController@remboursement')->name('gestion.remboursement');
    route::get('/agent','BailController@agent')->name('gestion.agent');
    Route::patch('info/{id}', 'BailController@update')->name('client.update');
Route::get('modif/{id}/edit', 'BailController@edit')->name('client.edit');
        route::post('/traitement','BailController@insertion')->name('client.insertion');
        route::get('/demande', "BailController@demande")->name('client.create');
Route::get('/status/{id}','BailController@verifie_status')->name('verifie.status');
Route::get('admin//user/{user}/edit', 'BailController@edit')->name('client.edit');
route::get('/recouvreurs','BailController@recouvreurs')->name('gestion.recouvreurs');
route::post('store',"BailController@store_recouvreur")->name('gestion.enregistrement');
});

route::get('/facture/{id}','BailController@facture')->name('client.facture');


Route::get('/deconnexion', function(){
    auth()->logout();
    return redirect('/');


});

route::get('/new_demande/{id}','BailController@demande_credit')->name('demande.credit');
route::post('valide','BailController@valide')->name('valide.credit');
