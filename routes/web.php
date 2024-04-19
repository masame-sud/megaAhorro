<?php

use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Precio;
use App\Models\Subcategoria;
use App\Models\Supermercadoproducto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'noticias' => Noticia::all(),
    ]);
});


Route::get('/noticias', function () {
    return view('noticias', [
        'noticias' => Noticia::all()->sortByDesc('id'),
    ]);
});

Route::get('/noticias/{noticia}', function (Noticia $noticia) {
    return view('noticia', [
        'noticia' => $noticia,
    ]);
});

Route::get('/categorias', function () {
    return view('categorias', [
        'categorias' => Categoria::all(),
    ]);
});

Route::get('/categorias/{categoria}', function (Categoria $categoria) {
    return view('subcategorias', [
        'subcategorias' => Subcategoria::where('categoria_id' , $categoria->id)->get(),
        'categoria' => $categoria,
    ]);
});

Route::get('/productos/{subcategoria}', function (Subcategoria $subcategoria) {
    return view ('productos', [
        'subcategoria' => $subcategoria,
        'productos' => Producto::where ('subcategoria_id', $subcategoria->id)->get(),
        'categoria' => Categoria::where('id', $subcategoria->categoria_id)->get(),
    ]);
} );

Route::get('/producto/{producto}', function (Producto $producto) {
    return view ('producto', [
        'producto' => $producto,
        'suppro' =>  Supermercadoproducto::where ('producto_id', $producto->id)->get(),
    ] );
});
