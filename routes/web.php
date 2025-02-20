<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('login', [AuthController::class, 'signIn'])->name('signIn');


Route::get('pages/osa_registrations/view', [PageController::class, 'osa'])->name('osa')->middleware('auth');
Route::get('pages/studentComplains/view', [PageController::class, 'studentComplains'])->name('studentComplains')->middleware('auth');
Route::post('updateComplainStatus/{id}', [PageController::class, 'updateStatus'])->name('updateStatus')->middleware('auth');




Route::get('/',   function () {return view('index');})->name('home');

Route::get('/gallery/{type}', [GalleryController::class, 'index'])->name('gallery');
Route::get('/videos/', [GalleryController::class, 'videos'])->name('videos');
Route::get('/naac/{type}', [PageController::class, 'naac'])->name('naac');
Route::get('/nirf/{type}', [PageController::class, 'nirf'])->name('nirf');
Route::get('/alumni/{type}', [PageController::class, 'alumni'])->name('alumni');
Route::get('/annual-report/{type}', [PageController::class, 'report'])->name('annual-report');
Route::get('/activities/{type}', [PageController::class, 'activities'])->name('activities');
Route::get('/administration/{type}', [PageController::class, 'administration'])->name('administration');
Route::get('/aboutCollege/{type}/{folder?}/{file?}', [PageController::class, 'aboutCollege'])->name('aboutCollege');
Route::get('/pdfViewer/{folder}/{file}', [PageController::class, 'pdfViewer'])->name('pdfViewer');
Route::get('/admission/{type}/{folder}/{file}', [PageController::class, 'admissionPages'])->name('admissionPages');
Route::get('/academics/{type}/{folder?}/{file?}', [PageController::class, 'academics'])->name('academics');

Route::get('facility/{type}', [FacilityController::class, 'facility'])->name('facility');

Route::get('/condition/{type}', [ConditionsController::class, 'index'])->name('condition');
Route::get('/contact', function () {return view('contact');})->name('contact');

