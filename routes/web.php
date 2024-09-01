<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');




Route::get('/sweets/create', [SweetController::class, 'create'])->name('sweets.create');

Route::post('/sweets/store', [SweetController::class, 'store'])->name('sweets.store');

Route::get('/sweets/index', [SweetController::class, 'index'])->name('sweets.index');

Route::get('/sweets/show/{sweet}', [SweetController::class, 'show'])->name('sweets.show');

Route::get('/sweets/edit/{sweet}', [SweetController::class, 'edit'])->name('sweets.edit');

Route::put('/sweets/update/{sweet}', [SweetController::class, 'update'])->name('sweets.update');

Route::delete('/sweets/udestroy/{sweet}', [SweetController::class, 'destroy'])->name('sweets.destroy');




Route::get('/recipes/index', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');

Route::post('/recipes/store', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/recipes/show{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/recipes/edit{recipe}', [RecipeController::class, 'edit'])->name('recipes.edit');

Route::put('/recipes/update{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

Route::delete('/recipes/destroy{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

// Route::resource('sweet',SweetController::class); //riassuntiva