<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\ObjetosController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
      Route::get('/cadastro/extintor',[ObjetosController::class, 'create'])->name('objetos.create');
      Route::get('/cadastros/extintor',[ObjetosController::class, 'exibeExtintor'])->name('exibe.extintor');
      Route::get('/geraQr/{objeto}',[ObjetosController::class, 'geraQR'])->name('objetos.geraQR');
      Route::get('/inspecionar/{objeto}',[ObjetosController::class, 'inspecionar'])->name('inspecao.efetuar');
      Route::get('/inativarObjt/{objeto}',[ObjetosController::class, 'inativarObjt'])->name('inspecao.inativarObjt');
      Route::get('/editar/{objeto}',[ObjetosController::class, 'editarobjt'])->name('objt.editar');
      Route::get('/historico/{objeto}',[ObjetosController::class, 'historicobjt'])->name('objt.historico');
      Route::get('/inspeçoes/{objeto}',[ObjetosController::class, 'ExibeLogs'])->name('objt.ExibeLogs');
      Route::get('/checklist/editar',[ObjetosController::class, 'editarChecklist'])->name('objt.editarChecklist');
      Route::get('/cadastro/usuario', function(){ return view('auth.register');})->name('usuario.cadastrar');
      Route::get('/usuarios/editar', [ObjetosController::class, 'editarUsuario'])->name('usuario.editar');
      Route::get('/inspecao/concluida',[ObjetosController::class, 'inspecaoConcluida']);
      Route::get('/cadastro/item', [ObjetosController::class, 'CadastroObjeto'])->name('objetos.novo');
      
});
