<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// route Agenda
Route::get('/agenda',[AgendaController::class,'index'])->name('agenda');
// ->middleware('auth');
Route::get('/createagenda',[AgendaController::class,'create'])->name('createagenda');
Route::post('/storeagenda',[AgendaController::class,'store'])->name('storeagenda');
Route::get('/showagenda/{id}',[AgendaController::class,'show'])->name('showagenda');
Route::post('/updateagenda/{id}',[AgendaController::class,'update'])->name('updateagenda');
Route::get('/deleteagenda/{id}',[AgendaController::class,'destroy'])->name('deleteagenda');

// route Guru
Route::get('/guru',[UserController::class,'index'])->name('guru');
Route::get('/createagenda',[UserController::class,'create'])->name('createagenda');
Route::post('/storeagenda',[UserController::class,'store'])->name('storeagenda');

// >middleware('auth');
Route::get('/createguru',[GuruController::class,'create'])->name('createguru');
Route::get('/storeguru',[GuruController::class,'store'])->name('storeguru');
Route::get('/showguru/{id}',[GuruController::class,'show'])->name('showguru');
Route::post('/updateguru/{id}',[GuruController::class,'update'])->name('updateguru');
Route::get('/deleteguru/{id}',[GuruController::class,'destroy'])->name('deleteguru');

// route kelas
Route::get('/kelas',[KelasController::class,'index'])->name('kelas');
// ->middleware('auth');
Route::get('/createkelas',[KelasController::class,'create'])->name('createkelas');
Route::get('/storekelas',[KelasController::class,'store'])->name('storekelas');
Route::get('/showkelas/{id}',[KelasController::class,'show'])->name('showkelas');
Route::post('/updatekelas/{id}',[KelasController::class,'update'])->name('updatekelas');
Route::get('/deletekelas/{id}',[KelasController::class,'destroy'])->name('deletekelas');


Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

