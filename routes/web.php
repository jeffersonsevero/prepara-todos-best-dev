<?php

use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\UserProfile;
use App\Models\User;
use App\services\GithubServices;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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



Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::prefix('dashboard')->group(function(){

        Route::get('/users', ShowUsers::class)->name('show.users');
        Route::get('/perfil', UserProfile::class )->name('user.profile');


    });




});

// Route::get('dashboard/users', ShowUsers::class)->middleware(['auth'])->name('show.users');



require __DIR__ . '/auth.php';
