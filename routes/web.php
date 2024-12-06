<?php

use App\Http\Controllers\TodolistFormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodolistFormController::class, 'index']);
Route::get('/create-page', [TodolistFormController::class, 'createPage']);
Route::post('/create', [TodolistFormController::class, 'create']);
Route::get('/edit-page/{id}', [TodolistFormController::class, 'editPage']);
Route::post('/edit', [TodolistFormController::class, 'edit']);
Route::get('/delete-page/{id}', [TodolistFormController::class, 'deletePage']);
Route::post('/delete/{id}', [TodolistFormController::class, 'delete']);