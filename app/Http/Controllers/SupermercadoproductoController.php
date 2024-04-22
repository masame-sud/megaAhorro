<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Precio;
use App\Models\Subcategoria;
use App\Models\Producto;
use App\Models\Noticia;
use App\Models\Supermercadoproducto;

use Illuminate\Http\Request;

class SupermercadoproductoController extends Controller
{
    //
    public function categorias()
    {
        $Categorias = Categoria::all();
        return view("categorias")->with("categorias", $Categorias);
    }

    public function categoria($id)
    {
        $categoria = Categoria::where('id', $id)->first();
        $subcategorias = Subcategoria::where('categoria_id', $id)->get();

        return view ('subcategorias')->with('subcategorias', $subcategorias)->with('categoria', $categoria);
    }

    public function subcategoria($id)
    {
        $productos = Producto::where('subcategoria_id', $id)->get();
        $subcategoria = Subcategoria::where('id' , $productos[0]->subcategoria_id)->get();

        return view('productos')->with('productos', $productos)->with('subcategoria', $subcategoria);
    }

    public function producto($id)
    {
        $suppro = Supermercadoproducto::where('producto_id', $id)->get();
        $producto = Producto::with(["subcategoria", "Noticia"])->where('id', $suppro[0]->producto_id)->get();
        $noticias = Noticia::where('producto_id', $suppro[0]->producto_id)->paginate(3);
        $supermercadoproductos = Supermercadoproducto::with(["precio", "supermercado", "producto", ])->where('producto_id', $id)->get();


        return view('producto')->with('suppro', $suppro)->with('producto', $producto)
        ->with('supermercadoproductos', $supermercadoproductos)->with('noticias', $noticias);
    }
}
