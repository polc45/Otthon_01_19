<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssassinController;
use App\Http\Controllers\WeaponController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assassins', [AssassinController::class, 'index'])->name('assassins.index');

Route::get("/assassins/create", [AssassinController::class, "create"])->name("assassins.create");

Route::post('/assassins', [AssassinController::class, 'store'])->name('assassins.store');

Route::get("/weapons", [WeaponController::class, "index"])->name("weapons.index");

Route::get("/weapons/create", [WeaponController::class, "create"])->name("weapons.create");

Route::post('/weapons', [WeaponController::class, 'store'])->name('weapons.store');