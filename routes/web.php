<?php

use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Producto;

use App\Models\Subcategoria;
use App\Models\Supermercadoproducto;

use App\Http\Controllers\SupermercadoproductoController;
use App\Http\Controllers\GuardaPreciosController;
use App\Http\Controllers\FormcontactoController;
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
    // 'noticiasIndex' => Noticia::all()->sortByDesc('id')->values(),
    $noticiasIndex = Noticia::latest()->get();
    return view('index')->with('noticiasIndex', $noticiasIndex);
});

Route::view ('/nosotros', 'nosotros');

Route::resource('contacto', FormcontactoController::class);

Route::get('/noticias', function () {

    $noticias = Noticia::with("producto")->latest()->simplePaginate(6);

    return view('noticias')->with('noticias', $noticias);
});

Route::get('/noticias/{noticia}', function (Noticia $noticia) {
    return view('noticia', [
        'noticia' => $noticia,
    ]);
});

Route::get('/categorias', [SupermercadoproductoController::class, 'categorias'])->name('categorias');

Route::get('/categorias/{categoria}', [SupermercadoproductoController::class, 'categoria'])->name('categoria');

// Route::get('/categorias/{categoria}', function (Categoria $categoria) {
//     return view('subcategorias', [
//         'subcategorias' => Subcategoria::where('categoria_id' , $categoria->id)->get(),
//         'categoria' => $categoria,
//     ]);
// });

Route::get('/subcategorias/{id}', [SupermercadoproductoController::class, 'subcategoria']);

// Route::get('/productos/{subcategoria}', function (Subcategoria $subcategoria) {
//     return view ('productos', [
//         'subcategoria' => $subcategoria,
//         'productos' => Producto::where ('subcategoria_id', $subcategoria->id)->get(),
//         'categoria' => Categoria::where('id', $subcategoria->categoria_id)->get(),
//     ]);
// } );

Route::get ('/producto/{producto}', [SupermercadoproductoController::class, 'producto']);

// Route::get('/producto/{producto}', function (Producto $producto) {
//     return view ('producto', [
//         'producto' => $producto,
//         'suppro' =>  Supermercadoproducto::where ('producto_id', $producto->id)->get(),
//     ] );
// });
Route::get('/actmercadona', [GuardaPreciosController::class, 'mercadona'])->name('actmercadona');
Route::get('/actcarrefour', [GuardaPreciosController::class, 'carrefour'])->name('actcarrefour');
Route::get('/acteci', [GuardaPreciosController::class, 'eci'])->name('acteci');
Route::get('/actdia', [GuardaPreciosController::class, 'dia'])->name('actdia');
Route::get('/acteroski', [GuardaPreciosController::class, 'eroski'])->name('acteroski');
Route::get('/actalcampo', [GuardaPreciosController::class, 'alcampo'])->name('actalcampo');
