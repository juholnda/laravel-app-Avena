<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

Route::get("/", [PaginasController::class, 'login']);

Route::get('/desativada', [PaginasController::class, 'desativada']);

Route::get('/email', [PaginasController::class, 'email']);

Route::get('/password', [PaginasController::class, 'password']);

Route::get('/register', [PaginasController::class, 'register']);

Route::get('/schedule', [PaginasController::class, 'schedule']);

Route::get('/jointeam', [PaginasController::class, 'jointeam']);

Route::get('/equipes', [PaginasController::class, 'equipes']);

Route::get('/planopaciente', [PaginasController::class, 'planopaciente']);

Route::get('/criarequipe', [PaginasController::class, 'criarequipe']);

Route::get('/tituloequipe', [PaginasController::class, 'tituloequipe']);

Route::get('/equipecriada', [PaginasController::class, 'equipecriada']);

Route::get('/equipesneuro', [PaginasController::class, 'equipesneuro']);

Route::get('/salaatividades', [PaginasController::class, 'salaatividades']);

Route::get('/contas', [PaginasController::class, 'contas']);