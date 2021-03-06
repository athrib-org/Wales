<?php

use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WellController;
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

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('states/locals/{state}', [StateController::class, 'getLocals']);

    Route::resource('/locals', LocalController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/states', StateController::class);
    Route::resource('/basic-informations', BasicInformationController::class)->parameter('basic_information', 'basicInformation');

    Route::get('locals/regions/{local}', [LocalController::class, 'getRegions']);
    Route::resource('/regions', RegionController::class);
    Route::resource('/project-managers', ProjectManagerController::class)->parameter('project_manager', 'projectManager');
    Route::resource('/wells', WellController::class);

    Route::get('basic-informations/download/file/{media}', [BasicInformationController::class, 'downloadFile'])->name('basic_informations.downloadfile');
    Route::get('basic-informations/delete/file/{media}/{donorentity}', [BasicInformationController::class, 'deleteFile'])->name('basic_informations.deletefile');
    Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
    Route::post('/report', [App\Http\Controllers\SearchController::class, 'report'])->name('report');
});
    

require __DIR__ . '/auth.php';
