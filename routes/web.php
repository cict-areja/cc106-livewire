<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\TicketsController;
use App\Livewire\LiveTickets;

// Authentication Routes
Auth::routes();

// Livewire Component Route
Route::get('/', LiveTickets::class);

// Sample Controller Routes
Route::get('/tickets', [TicketsController::class, 'index'])->name('ticekts');
Route::post('/add-tickets', [TicketsController::class, 'store'])->name('ticekts.store');



// Sample Routes
Route::get('/hello', function () {
    $users = User::get()->take(10);

    return view('hello')
        ->with('usrs', $users);
});

Route::get('/insert', function(){

    $user = User::create([
        'name' => fake()->name,
        'email' => fake()->safeEmail(),
        'password' => Hash::make('password'),
        'address' => fake()->address
    ]);

    return $user;
});

Route::get('/update/{id}', function($id){
    $user = User::find($id)
        ->update([
            'name' => 'John Doe'
        ]);

    return $user;
});

Route::get('/delete/{id}', function($id){
    $user = User::find($id)
        ->delete();

    return $user;
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
