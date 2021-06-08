<?php

use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LocaleController;


use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[NoticiasController::class, 'inicio']);
Route::get('imagenes/{id}', [ImagenesController::class, 'galeria'])->name('galeria');
Route::get('galeria/{nombre}', [ImagenesController::class, 'imagen'])->name('imagen');
Route::get('buscar-usuarios', [UsuariosController::class, 'buscar'])->name('buscar');

Route::resource('usuarios', UsuariosController::class);
Route::resource('noticias', NoticiasController::class);
Route::resource('actividades', ActividadesController::class);
Route::resource('eventos', EventosController::class);
Route::resource('galeria-de-usuarios', UsuariosController::class);
Route::resource('galeria-de-imagenes', ImagenesController::class);
Route::resource('users', UsuariosController::class);
Route::resource('fotos', ImagenesController::class);

Route::get('adminNoticias', [NoticiasController::class, 'admin'])->name('noticiasAdmin');
Route::get('adminEventos', [EventosController::class, 'admin'])->name('eventosAdmin');
Route::get('adminActividades', [ActividadesController::class, 'admin'])->name('actividadesAdmin');
Route::get('adminGaleria', [ImagenesController::class, 'admin'])->name('galeriaAdmin');
Route::get('adminUsuarios', [UsuariosController::class, 'admin'])->name('usuariosAdmin');
Route::get('editar-administrador/{id}', [UsuariosController::class, 'editAdmin'])->name('editAdmin');

Route::get('locale/{locale}', LocaleController::class);

Route::get('galeria-propia',[UsuariosController::class, 'perfil']);

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});



/*Route::get('/',function(){
    $noticias=NoticiasController::class, 'index';
    $eventos=EventosController::class, 'index';

    return view('inicio', compact('noticias','eventos'));
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
