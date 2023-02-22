<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\backendLogicController;
use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Frontend
Route::get('/', [frontendController::class, 'index']);
Route::get('about', [frontendController::class, 'about']);
Route::get('index', [frontendController::class, 'index']);
Route::get('contact',[frontendController::class, 'contact']);
Route::get('blog',[frontendController::class, 'blog']);
Route::get('portfolio',[frontendController::class, 'portfolio']);
Route::get('services',[frontendController::class, 'services']);
Route::get('support',[frontendController::class, 'support']);



//Backend 
Route::get('dashboard', [backendController::class, 'test']);
Route::get('tables', [backendController::class, 'tables']);
Route::get('profile', [backendController::class, 'profile']);
Route::get('forms', [backendController::class, 'forms']);
Route::get('services1', [backendController::class, 'services']);
Route::get('login', [backendController::class, 'login']);



//CRUD
Route::post('contact1', [backendLogicController::class, 'contact']);
Route::get('deletecontact/{id}', [backendController::class, 'deletecontact']);
Route::post('support1', [backendLogicController::class, 'support1']);
Route::get('deletesupport/{id}', [backendController::class, 'deletesupport']);
Route::post('service1', [backendLogicController::class, 'service1']);
Route::get('deleteservice/{id}', [backendController::class, 'deleteservice']);
Route::post('login1', [backendLogicController::class, 'login1']);