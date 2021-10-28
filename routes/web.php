<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Accounts;
use App\Http\Livewire\Admin\Notification;
use App\Http\Livewire\Admin\Profile;
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

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('admin/accounts', Accounts::class)->name('admin.accounts');
Route::get('admin/notification', Notification::class)->name('admin.notification');
Route::get('admin/profile', Profile::class)->name('admin.profile');
