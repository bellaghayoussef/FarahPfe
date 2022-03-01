<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Techno;
use App\Models\Certif;
use App\Models\User;
use App\Models\favori;
use App\Models\Offre;
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
    $users = User::whereHas("roles", function ($q) {
            $q->where("name", "client");
        })->get();
    return view('welcome', compact('users'));
});


Route::post('/send', [App\Http\Controllers\MailController::class, 'send']);
Auth::routes(['verify' => true]);








Route::middleware('auth:web')->group(function () {
Route::group(
    [

        'middleware' => [
                            'auth',
                            'verified',
                            'role:client||admin'
                        ],
    ],
    function(){



Route::get('/user', function (Request $request) {
    $user = Auth::user();
    return view('profile.user', compact('user'));
})->name('user');
    Route::post('user/{offre}', [App\Http\Controllers\UsersController::class, 'update'])->name('user.update');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('offre', [App\Http\Controllers\OffresController::class, 'index'])->name('offre.index');
    Route::get('offre/create', [App\Http\Controllers\OffresController::class, 'create'])->name('offre.create');
    Route::get('offre/show/{offre}', [App\Http\Controllers\OffresController::class, 'show'])->name('offre.show');
    Route::get('offre/{offre}/edit', [App\Http\Controllers\OffresController::class, 'edit'])->name('offre.edit');
    Route::post('offre', [App\Http\Controllers\OffresController::class, 'store'])->name('offre.store');
    Route::post('offre/{offre}', [App\Http\Controllers\OffresController::class, 'update'])->name('offre.update');
    Route::delete('offre/{offre}', [App\Http\Controllers\OffresController::class, 'destroy'])->name('offre.destroy');

    Route::get('offre/candidats/{offre}', [App\Http\Controllers\OffresController::class, 'candidats'])->name('offre.candidats');

    Route::get('clientetudiant', [App\Http\Controllers\ClientController::class, 'etudiant'])->name('clientetudiant');
    Route::get('favori', [App\Http\Controllers\ClientController::class, 'favori'])->name('favori');


    Route::get('etudiantshow/{id}', [App\Http\Controllers\ClientController::class, 'etudiantshow'])->name('etudiantshow');



});


Route::group(
    [

        'middleware' => [
                            'auth',
                            'role:admin'
                        ],
    ],
    function(){


Route::get('/etudiant', [App\Http\Controllers\UsersController::class, 'etudiant'])->name('etudiant');
    Route::get('/client', [App\Http\Controllers\UsersController::class, 'client'])->name('client');
    Route::get('techno', [App\Http\Controllers\TechnosController::class, 'index'])->name('techno.index');
    Route::get('techno/create', [App\Http\Controllers\TechnosController::class, 'create'])->name('techno.create');
    Route::get('techno/show/{techno}', [App\Http\Controllers\TechnosController::class, 'show'])->name('techno.show');
    Route::get('techno/{techno}/edit', [App\Http\Controllers\TechnosController::class, 'edit'])->name('techno.edit');
    Route::post('techno', [App\Http\Controllers\TechnosController::class, 'store'])->name('techno.store');
    Route::post('techno/{techno}', [App\Http\Controllers\TechnosController::class, 'update'])->name('techno.update');
    Route::delete('techno/{techno}', [App\Http\Controllers\TechnosController::class, 'destroy'])->name('techno.destroy');

    Route::get('certif', [App\Http\Controllers\CertifsController::class, 'index'])->name('certif.index');
    Route::get('certif/create', [App\Http\Controllers\CertifsController::class, 'create'])->name('certif.create');
    Route::get('certif/show/{certif}', [App\Http\Controllers\CertifsController::class, 'show'])->name('certif.show');
    Route::get('certif/{certif}/edit', [App\Http\Controllers\CertifsController::class, 'edit'])->name('certif.edit');
    Route::post('certif', [App\Http\Controllers\CertifsController::class, 'store'])->name('certif.store');
    Route::post('certif/{certif}', [App\Http\Controllers\CertifsController::class, 'update'])->name('certif.update');
    Route::delete('certif/{certif}', [App\Http\Controllers\CertifsController::class, 'destroy'])->name('certif.destroy');


    Route::get('/createetudiant', [App\Http\Controllers\UsersController::class, 'createetudiant'])->name('createetudiant');
    Route::post('/store_etudiant', [App\Http\Controllers\UsersController::class, 'store_etudiant'])->name('store_etudiant');
    Route::get('/{user}/editetudiant', [App\Http\Controllers\UsersController::class, 'editetudiant'])->name('editetudiant');
    Route::post('/update_etudiant/{user}', [App\Http\Controllers\UsersController::class, 'update_etudiant'])->name('update_etudiant');
    Route::delete('destroyetudiant/{user}', [App\Http\Controllers\UsersController::class, 'destroyetudiant'])->name('destroyetudiant');
    Route::get('/show_etudiant/{user}', [App\Http\Controllers\UsersController::class, 'show_etudiant'])->name('show_etudiant');
Route::group([
    'prefix' => 'domains',
], function () {
    Route::get('/', 'App\Http\Controllers\DomainsController@index')
         ->name('domains.domain.index');
    Route::get('/create','App\Http\Controllers\DomainsController@create')
         ->name('domains.domain.create');
    Route::get('/show/{domain}','App\Http\Controllers\DomainsController@show')
         ->name('domains.domain.show')->where('id', '[0-9]+');
    Route::get('/{domain}/edit','App\Http\Controllers\DomainsController@edit')
         ->name('domains.domain.edit')->where('id', '[0-9]+');
    Route::post('/', 'App\Http\Controllers\DomainsController@store')
         ->name('domains.domain.store');
    Route::put('domain/{domain}', 'App\Http\Controllers\DomainsController@update')
         ->name('domains.domain.update')->where('id', '[0-9]+');
    Route::delete('/domain/{domain}','App\Http\Controllers\DomainsController@destroy')
         ->name('domains.domain.destroy')->where('id', '[0-9]+');
});



    Route::get('/admin', [App\Http\Controllers\UsersController::class, 'admin'])->name('admin');

    Route::get('/createclient', [App\Http\Controllers\UsersController::class, 'createclient'])->name('createclient');
    Route::post('/store_client', [App\Http\Controllers\UsersController::class, 'store_client'])->name('store_client');
    Route::get('/{user}/editclient', [App\Http\Controllers\UsersController::class, 'editclient'])->name('editclient');
    Route::post('/update_client/{user}', [App\Http\Controllers\UsersController::class, 'update_client'])->name('update_client');
    Route::delete('destroyclient/{user}', [App\Http\Controllers\UsersController::class, 'destroyclient'])->name('destroyclient');
    Route::get('/show_client/{user}', [App\Http\Controllers\UsersController::class, 'show_client'])->name('show_client');




    Route::get('/createadmin', [App\Http\Controllers\UsersController::class, 'createadmin'])->name('createadmin');
    Route::post('/store_admin', [App\Http\Controllers\UsersController::class, 'store_admin'])->name('store_admin');
    Route::get('/{user}/editadmin', [App\Http\Controllers\UsersController::class, 'editadmin'])->name('editadmin');
    Route::post('/update_admin/{user}', [App\Http\Controllers\UsersController::class, 'update_admin'])->name('update_admin');
    Route::delete('destroyadmin/{user}', [App\Http\Controllers\UsersController::class, 'destroyadmin'])->name('destroyadmin');
    Route::get('/show_admin/{user}', [App\Http\Controllers\UsersController::class, 'show_admin'])->name('show_admin');

});

///////////////////////etudiantroute
Route::group(
    [

        'middleware' => [
                            'auth',
                            'verified',
                            'role:etudiant'
                        ],
    ],
    function(){



    Route::get('profileetudiant', [App\Http\Controllers\EtudiantController::class, 'index'])->name('profileetudiant');



    Route::post('profileetudiant/{user}', [App\Http\Controllers\EtudiantController::class, 'update'])->name('profileetudiant.update');
    Route::post('profileetudiante/{user}', [App\Http\Controllers\EtudiantController::class, 'competence'])->name('profileetudiant.competence');
    Route::post('postuler/{offre}', [App\Http\Controllers\EtudiantController::class, 'postuler'])->name('postuler');
    Route::post('profileetudiantee/{user}', [App\Http\Controllers\EtudiantController::class, 'certif'])->name('profileetudiant.certif');

    Route::get('removetechno/{techno}', [App\Http\Controllers\EtudiantController::class, 'removetechno'])->name('removetechno');

    Route::get('removecertif/{certif}', [App\Http\Controllers\EtudiantController::class, 'removecertif'])->name('removecertif');

});
///////////////////////////////////////


});

