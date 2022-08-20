<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\Register_client;
use App\Http\Controllers\SuiviCommandeAdminController;
use App\Http\Controllers\SuiviCommandeController;
use App\Http\Controllers\TraitementController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/lentile', [CommandeController::class, 'index_lentille'])->name('lentile');
Route::get('/nikon', [CommandeController::class, 'index_nikon'])->name('nikon');

Route::get('/infinty', [CommandeController::class, 'index_infinty'])->name('infinty');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/suivi', [SuiviCommandeController::class, 'index'])->name('suivi');
/**
 * Ajouter produit
 */
Route::get('/ajouter_lentille', [ProduitController::class, 'index_lentille'])->name('ajouter_lentille');
Route::get('/ajouter_nikon', [ProduitController::class, 'index_nikon'])->name('ajouter_nikon');
Route::get('/ajouter_infinty', [ProduitController::class, 'index_infinty'])->name('ajouter_infinty');
/**
 * route admin
 */
    Route::get('/admin', function () {
        return view('admin.admin');
})->name('admin')->middleware(['admin']);


Route::get('/register_client', [Register_client::class, 'create'])->name('register_client');
Route::get('/admin_commande', [CommandeController::class, 'index'])->name('admin_commande')->middleware(['admin']);

/**
 * Ajouter client
 */
Route::post('/register_client', [Register_client::class, 'store'])->name('register_nv_client');

/**
 * POST ajouter produit
 */

Route::post('/ajouter_lentille', [ProduitController::class, 'store_lentille'])->name('ajouter_lentille_post');

/**
 * POST COMMANDE
 */

Route::post('/commandee', [CommandeController::class, 'store'])->name('commande_post');

Route::get('/commande/{id}', [CommandeController::class, 'show'])->name('commande_show');

/***
 * GET "suivi_COMMANDE_admin
 */
Route::get('/enattente', [SuiviCommandeAdminController::class, 'index_enattente'])->name('enattente')->middleware(['admin']);
Route::get('/livree', [SuiviCommandeAdminController::class, 'index_livree'])->name('livree')->middleware(['admin']);
Route::get('/annulee', [SuiviCommandeAdminController::class, 'index_annulee'])->name('annulee')->middleware(['admin']);
Route::get('/encours', [SuiviCommandeAdminController::class, 'index_encours'])->name('encours')->middleware(['admin']);

/***
 * changement des etat de commades
 */

Route::get('/validé/{id}', [SuiviCommandeAdminController::class, 'validee'])->name('validee')->middleware(['admin']);
Route::get('/livré/{id}', [SuiviCommandeAdminController::class, 'livree'])->name('livraison')->middleware(['admin']);


/**
 * les traitement
 * 
 */

 Route::get('/traitement', [TraitementController::class, 'index'])->name('traitement')->middleware(['admin']);
 Route::post('/ajouter_traitement', [TraitementController::class, 'store_trairement'])->name('traitement_post');

require __DIR__.'/auth.php';
