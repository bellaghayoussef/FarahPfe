<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffresController;
use App\Http\Controllers\TechnosController;
use App\Http\Controllers\CertifsController;
use App\Http\Controllers\DomainsController;
use App\Http\Controllers\RolesController;

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
    return view('welcome');
});

Route::group([
    'prefix' => 'users',
], function () {
    Route::get('/', [UsersController::class, 'index'])
         ->name('users.user.index');
    Route::get('/create', [UsersController::class, 'create'])
         ->name('users.user.create');
    Route::get('/show/{user}',[UsersController::class, 'show'])
         ->name('users.user.show');
    Route::get('/{user}/edit',[UsersController::class, 'edit'])
         ->name('users.user.edit');
    Route::post('/', [UsersController::class, 'store'])
         ->name('users.user.store');
    Route::put('user/{user}', [UsersController::class, 'update'])
         ->name('users.user.update');
    Route::delete('/user/{user}',[UsersController::class, 'index'])
         ->name('users.user.destroy');
});

Route::group([
    'prefix' => 'offres',
], function () {
    Route::get('/', [OffresController::class, 'index'])
         ->name('offres.offre.index');
    Route::get('/create', [OffresController::class, 'create'])
         ->name('offres.offre.create');
    Route::get('/show/{offre}',[OffresController::class, 'show'])
         ->name('offres.offre.show');
    Route::get('/{offre}/edit',[OffresController::class, 'edit'])
         ->name('offres.offre.edit');
    Route::post('/', [OffresController::class, 'store'])
         ->name('offres.offre.store');
    Route::put('offre/{offre}', [OffresController::class, 'update'])
         ->name('offres.offre.update');
    Route::delete('/offre/{offre}',[OffresController::class, 'index'])
         ->name('offres.offre.destroy');
});

Route::group([
    'prefix' => 'technos',
], function () {
    Route::get('/', [TechnosController::class, 'index'])
         ->name('technos.techno.index');
    Route::get('/create', [TechnosController::class, 'create'])
         ->name('technos.techno.create');
    Route::get('/show/{techno}',[TechnosController::class, 'show'])
         ->name('technos.techno.show');
    Route::get('/{techno}/edit',[TechnosController::class, 'edit'])
         ->name('technos.techno.edit');
    Route::post('/', [TechnosController::class, 'store'])
         ->name('technos.techno.store');
    Route::put('techno/{techno}', [TechnosController::class, 'update'])
         ->name('technos.techno.update');
    Route::delete('/techno/{techno}',[TechnosController::class, 'index'])
         ->name('technos.techno.destroy');
});

Route::group([
    'prefix' => 'certifs',
], function () {
    Route::get('/', [CertifsController::class, 'index'])
         ->name('certifs.certif.index');
    Route::get('/create', [CertifsController::class, 'create'])
         ->name('certifs.certif.create');
    Route::get('/show/{certif}',[CertifsController::class, 'show'])
         ->name('certifs.certif.show');
    Route::get('/{certif}/edit',[CertifsController::class, 'edit'])
         ->name('certifs.certif.edit');
    Route::post('/', [CertifsController::class, 'store'])
         ->name('certifs.certif.store');
    Route::put('certif/{certif}', [CertifsController::class, 'update'])
         ->name('certifs.certif.update');
    Route::delete('/certif/{certif}',[CertifsController::class, 'index'])
         ->name('certifs.certif.destroy');
});

Route::group([
    'prefix' => 'domains',
], function () {
    Route::get('/', [DomainsController::class, 'index'])
         ->name('domains.domain.index');
    Route::get('/create', [DomainsController::class, 'create'])
         ->name('domains.domain.create');
    Route::get('/show/{domain}',[DomainsController::class, 'show'])
         ->name('domains.domain.show')->where('id', '[0-9]+');
    Route::get('/{domain}/edit',[DomainsController::class, 'edit'])
         ->name('domains.domain.edit')->where('id', '[0-9]+');
    Route::post('/', [DomainsController::class, 'store'])
         ->name('domains.domain.store');
    Route::put('domain/{domain}', [DomainsController::class, 'update'])
         ->name('domains.domain.update')->where('id', '[0-9]+');
    Route::delete('/domain/{domain}',[DomainsController::class, 'index'])
         ->name('domains.domain.destroy')->where('id', '[0-9]+');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'roles',
], function () {
    Route::get('/', [RolesController::class, 'index'])
         ->name('roles.role.index');
    Route::get('/create', [RolesController::class, 'create'])
         ->name('roles.role.create');
    Route::get('/show/{role}',[RolesController::class, 'show'])
         ->name('roles.role.show');
    Route::get('/{role}/edit',[RolesController::class, 'edit'])
         ->name('roles.role.edit');
    Route::post('/', [RolesController::class, 'store'])
         ->name('roles.role.store');
    Route::put('role/{role}', [RolesController::class, 'update'])
         ->name('roles.role.update');
    Route::delete('/role/{role}',[RolesController::class, 'index'])
         ->name('roles.role.destroy');
});
