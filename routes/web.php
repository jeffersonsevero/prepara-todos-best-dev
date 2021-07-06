<?php

use App\Http\Livewire\ShowDevsWithVotes;
use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\UserCreate;
use App\Http\Livewire\UserEdit;
use App\Http\Livewire\UserProfile;
use App\Models\User;
use App\services\GithubServices;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;


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
        Route::get('/criar-usuario', UserCreate::class)->name('user.create');
        Route::get('/editar-usuario', UserEdit::class)->name('user.edit');
        Route::get('/devs-com-voto', ShowDevsWithVotes::class)->name('devs.with.vote');

    });




});

Route::get('dashboard/users', ShowUsers::class)->middleware(['auth'])->name('show.users');



require __DIR__ . '/auth.php';
