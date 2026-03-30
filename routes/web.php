<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeShopController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CategoriaExtraController;
use App\Http\Controllers\TamanioController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;





//Route::post('/venta', [App\Http\Controllers\CoffeshopController::class, 'store'])->name('venta.store');

Route::group(['middleware' => ['auth']], function () {

    });

    Route::get('/sing_up', [UsuarioController::class, 'autoregistro_form']);
    Route::post('/sing_up/save', [UsuarioController::class, 'autoregistro'])->name('autoregistro');


    //rutas de vuejs
    Route::get('/venta', [App\Http\Controllers\CoffeshopController::class, 'venta'])->name('venta');
    Route::get('/productos', [App\Http\Controllers\CoffeshopController::class, 'productos'])->name('productos');
    Route::get('/tamanios', [App\Http\Controllers\CoffeshopController::class, 'tamanios'])->name('tamanios');


    Route::get('/Venta', [CoffeeShopController::class, 'venta'])->name ('venta');
    Route::get('/Venta/productos', [CoffeeShopController::class, 'productos'])->name ('productos');
    Route::get('/Venta/categorias', [CoffeeShopController::class, 'categorias'])->name ('categorias');
    Route::get('/Venta/tamanios', [CoffeeShopController::class, 'tamanios'])->name ('tamanios');
    Route::post('/venta/guardar_orden', [VentaController::class, 'guardarOrden'])->name('guardar_orden');

    //Catalogo tipo de Categorias
    Route::get('/categoria', [CategoriaController::class, 'categoria'])->name ('categoria');
    Route::get('categoria/formulario/{id?}', [CategoriaController::class, 'formulario'])->name ('categoria.formulario');
    Route::post('categoria/guardar', [CategoriaController::class, 'guardar'])->name ('categoria.guardar');

    // Ruta para Usuarios
    Route::get('/usuario', [UsuarioController::class, 'index'])->name('index_usuario');
    Route::get('/usuario/formulario/{id?}', [UsuarioController::class, 'formulario']);
    Route::post('/usuario/save', [UsuarioController::class, 'save']);

    //Catalogo tipo de Categorias extras
    Route::get('/extra', [ExtraController::class, 'extra'])->name ('extra');
    Route::get('/categoriaExtra', [CategoriaExtraController::class, 'categoriaExtra'])->name ('categoriaExtra');
    Route::get('categoriaExtra/formulario/{id?}', [CategoriaExtraController::class, 'formulario'])->name ('categoriaExtra.formulario');
    Route::post('categoriaExtra/guardar', [CategoriaExtraController::class, 'guardar'])->name ('categoriaExtra.guardar');

    //Catalogo tipo de Productos
    Route::get('/producto', [ProductoController::class, 'producto'])->name ('producto');
    Route::get('producto/formulario/{id?}', [ProductoController::class, 'formulario'])->name ('producto.formulario');
    Route::post('producto/guardar', [ProductoController::class, 'guardar'])->name ('producto.guardar');
    

    //Catalogo tipo de Tamanios
    Route::get('/tamanio', [TamanioController::class, 'tamanio'])->name ('tamanio');
    Route::get('tamanio/formulario/{id?}', [TamanioController::class, 'formulario'])->name ('tamanio.formulario');
    Route::post('tamanio/guardar', [TamanioController::class, 'guardar'])->name ('tamanio.guardar');
    

    //Catalogo tipo de Extras
    Route::get('extra/formulario/{id?}', [ExtraController::class, 'formulario'])->name ('extra.formulario');
    Route::post('extra/guardar', [ExtraController::class, 'guardar'])->name ('extra.guardar');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login/iniciar', [LoginController::class, 'iniciar_sesion']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    

    
    