<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');

Route::get('/viewdataleader', [MemberController::class, 'viewdataleader'])->name('viewdataleader');

Route::get('/viewdataleadercard', [MemberController::class, 'viewdataleadercard'])->name('viewdataleadercard');

Route::get('/viewdataadmin', [MemberController::class, 'viewdataadmin'])->name('viewdataadmin');

Route::get('/viewdataedit', [MemberController::class, 'viewdataedit'])->name('viewdataedit');

Route::get('/payment', [ProjectController::class, 'payment'])->name('payment');

Route::get('/timeline', [ProjectController::class, 'timeline'])->name('timeline');

Route::post('/insert-member' ,[MemberController::class, 'insertMember'])->name('insertMember');

Route::post('/upload-data' ,[AdminController::class, 'uploadData'])->name('uploadData');

Route::get('/member', [MemberController::class, 'member'])->name('member');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => IsAdminMiddleware::class], function (){
    Route::get('/admin', [AdminController::class,'admindashboard'])->name('admindashboard');
    Route::get('/adminparticipant', [AdminController::class,'adminparticipant'])->name('adminparticipant');
    Route::get('/bukti', [AdminController::class,'bukti'])->name('bukti');
});

Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('/updatemember/{id}', [MemberController::class, 'getDataById'])->name('getDataById');

Route::patch('/updatemember/{id}', [MemberController::class, 'updatemember'])->name('updatemember');
