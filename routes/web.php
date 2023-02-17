<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio');

Route::view('/ventas', 'ventas')->name('ventas');

Route::view('/productos', 'productos')-> name('productos');

Route::view('/clientes', 'clientes')-> name('clientes');

Route::view('/usuarios', 'usuarios')->name('usuarios');