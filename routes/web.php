<?php

use App\Livewire\Cadastro;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro', Cadastro::class)->name('cadastro');
