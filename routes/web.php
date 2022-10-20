<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\backend\AdminprofileController;
use App\Http\Controllers\backend\FacultyController;

 

use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\LanguageController;

// Create a seperate site for examination dpt to upload the results and then we can get results via Api frm it

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');

 /*****************************Admin Related All Route*************************/

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');


/*****************************user profile and change the password***********************/

Route::prefix('profile')->group(function(){

    Route::get('/home',[AdminprofileController::class, 'Home'])->name('admin.home');
    Route::get('/view',[AdminprofileController::class, 'ProfileView'])->name('admin.profile.view');
    Route::get('/edit',[AdminprofileController::class, 'Profileedit'])->name('admin.profile.edit');
    Route::post('/store',[AdminprofileController::class, 'ProfileUpdate'])->name('admin.profile.store');
    Route::post('/password/update',[AdminprofileController::class, 'PasswordUpdate'])->name('admin.password.update');

});//end of the profile controller group
Route::prefix('faculty')->group(function(){

Route::get('/view',[FacultyController::class, 'faculty'])->name('admin.addfaculty');

Route::post('/store',[FacultyController::class, 'store'])->name('faculty.store');
Route::get('/edit/{id}',[FacultyController::class, 'facultyedit'])->name('faculty.edit');
Route::get('/delete/{id}',[FacultyController::class, 'facultydelete'])->name('faculty.delete');
Route::post('/update',[FacultyController::class, 'facultyupdate'])->name('faculty.update');

});
});//end of the cc

/*****************************User Related All Route List*************************/

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

