<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\client\ControllPannelController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// });







// ------------------------------------------------------------------------
// Client section
// ------------------------------------------------------------------------
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::view('/', 'client.controllpannel.index');
    Route::view('/about us', 'client.controllpannel.about_us');
});






// ------------------------------------------------------------------------
// Admin section
// ------------------------------------------------------------------------

//start  roles managment
Route::get('/generate_roles', [SettingsController::class, 'generateRoles'])->name('generate_roles');
//end roles managment