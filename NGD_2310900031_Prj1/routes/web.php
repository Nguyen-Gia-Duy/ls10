<?php
use App\Http\Controller\NGD_QUAN_TRIController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admins/ngd-login',[NGD_QUAN_TRIController::class,'ngdLogin'])->name('admins.ngdLogin');
Route::post('/admins/ngd-login',[NGD_QUAN_TRIController::class,'ngdLoginSubmit'])->name('admins.ngdLoginSubmit');
