<?php

use App\Http\Controllers\loginController;
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

Route::get('/', [loginController::class, 'index'])->name('login');

Route::get('/trainee', function() {
    return view('trainee.traineeDashboard');
})->name('trainee');

// facilitator
Route::get('/facilitator', function() {
    return view('faci.faciDashboard');
})->name('faci');

Route::get('/facilitator/reports', function() {
    return view('faci.faciReports');
})->name('faciReports');

// admin
Route::get('/adminlogin', function() {
    return view('adminLogin');
})->name('adminlogin');

Route::get('/admin', function() {
    return view('admin.adminAddUser');
})->name('admin');

Route::get('/admin/addTrainee', function() {
    return view('admin.adminAddTrainee');
})->name('adminAddTrainee');

Route::get('/admin/addFacilitator', function() {
    return view('admin.adminAddFacilitator');
})->name('adminAddFacilitator');

Route::get('/admin/weekly', function() {
    return view('admin.adminReports');
})->name('adminReports');

Route::get('/admin/facilitators', function() {
    return view('admin.adminFacilitators');
})->name('facilitator');

Route::get('/admin/traineelist', function() {
    return view('admin.adminTraineesList');
})->name('trainees');
