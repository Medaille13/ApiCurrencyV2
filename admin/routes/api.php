<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function(Request $request){
    return 'Authenticated';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Api

Route::get("/currency", function(){
    return view("...\index.html");
 });



// Page admin inscription + connexion

Route::get('/admin/inscription', function()  {
    return view('\InscriptionAdmin');
    })->name("inscriptionadminpage");
    //return redirect()->route("ConnexionAdmin");


Route::get('/admin/connexion', function()  {
    return view('\ConnexionAdmin');
})->name("connexionadminpage");


// Déconnexion admin
Route::get('/admin/logout',"App\Http\Controllers\AdminController@logout")->name("logoutadmin");


// Page d'accueil
Route::get('/admin/accueil', function() {
    return view("\AccueilAdmin");
})->name("accueiladmin");


// CRUD ADMIN
Route::post('/admin/login',"App\Http\Controllers\AdminController@read")->name("adminlogin");
Route::post('/admin/inscription',"App\Http\Controllers\AdminController@inscription")->name("admininscription");


Route::post('/admin/register',"App\Http\Controllers\AdminController@create")->name("adminpaire");
Route::get('/admin/formulaire', function(){
    return view("\FormulaireAjoutCurrencyAdmin");
})->name("formulaire"); //Cette route fonctionne

Route::get('/admin/edit',"App\Http\Controllers\AdminController@edit")->name("editpaire");
Route::get('/admin/supprimer/{id}',"App\Http\Controllers\AdminController@delete")->name("deletepaire");
Route::get('/admin/modif/{id}',"App\Http\Controllers\AdminController@modif")->name("modifpaire");
Route::post('/admin/modification',"App\Http\Controllers\AdminController@modification")->name("modificationpaire");



// Récupération bdr pour l'api
Route::get('/recuperationpaire', "App\Http\Controllers\AdminController@apirecuperation");

// Récupération clic utilisateur
Route::any('/recuperationclic/{paire}',"App\Http\Controllers\AdminController@clicrecuperation");
