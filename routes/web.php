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


route::get('/info/{id}','BailController@client')->name('client.info');
route::get('/accueil',"BailController@accueil")->name('accueil');
route::get('/client/{id}','BailController@connexion_client')->name('info.client');
Route::get('/demande', "BailController@demande")->name('demande.form');
Route::post('traitement','BailController@insertion')->name('client.insertion');
route::post('/fournisseur_page','BailController@finsertion')->name('fournisseur.page');
route::get('connexion','BailController@connexion')->name('form.connexion');
Route::post('connexion_client','BailController@connexion_client')->name('client.connexion');
route::get('/fournisseur','BailController@fournisseur')->name('form.fournisseur');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dash','BailController@dash')->name('admin.dashboard');
   route::get('/dashboard/{id}','BailController@valider')->name('client.valider');
    route::get('/dashboard_bq/{id}','BailController@bloquer')->name('client.bloquer');
    route::get('/liste','BailController@liste')->name('liste.dash');
    route::get('/contrat','BailController@contrat')->name('gestion.voir_contrat');
    route::get('/agent','BailController@agent')->name('gestion.agent');
    Route::patch('info/{id}', 'BailController@update')->name('client.update');
//Route::get('modif/{id}/edit', 'BailController@edit')->name('client.edit');

Route::get('modif/{user}/edit', 'BailController@edit')->name('client.edit');
});

route::get('/facture/{id}','BailController@facture')->name('client.facture');

route::get('/dash_fournisseur','BailController@dash_fournisseur');
Route::get('/deconnexion', function(){
    auth()->logout();
    return redirect('/');


});

route::get('/new_demande/{id}','BailController@demande_credit')->name('demande.credit');
route::post('valide','BailController@valide')->name('valide.credit');
