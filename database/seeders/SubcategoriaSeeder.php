<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Subcategorias")->delete();


        $catUno = DB::table('Categorias')->where('name', 'Pan y Cereales')->value('id');

        DB::table("Subcategorias")->insert([
            "name"=> "Arroz",
            "categoria_id" => $catUno,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Pan",
            "categoria_id" => $catUno,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Pasta",
            "categoria_id" => $catUno,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Harina",
            "categoria_id" => $catUno,
        ]);


        $catDos = DB::table('Categorias')->where('name', 'carne')->value('id');

        DB::table("Subcategorias")->insert([
            "name"=> "Bovino",
            "categoria_id" => $catDos,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Porcino",
            "categoria_id" => $catDos,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Cordero",
            "categoria_id" => $catDos,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Ave",
            "categoria_id" => $catDos,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Charcutería",
            "categoria_id" => $catDos,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Preparados",
            "categoria_id" => $catDos,
        ]);


        $catTres = DB::table('Categorias')->where('name', 'Pescado')->value('id');
        DB::table("Subcategorias")->insert([
            "name"=> "Pescado Fresco",
            "categoria_id" => $catTres,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Pescado Congelado",
            "categoria_id" => $catTres,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Crustáceo / Molusco",
            "categoria_id" => $catTres,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Pescado en conserva",
            "categoria_id" => $catTres,
        ]);


       $catCuatro = DB::table("Categorias")->where('name', 'Leche, queso y huevos')->value('id');

       DB::table("Subcategorias")->insert([
        "name"=> "Leche",
        "categoria_id" => $catCuatro,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Lacteos",
            "categoria_id" => $catCuatro,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Queso",
            "categoria_id" => $catCuatro,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Huevos",
            "categoria_id" => $catCuatro,
        ]);


        $catCinco = DB::table("Categorias")->where('name', 'Aceites y Grasas')->value('id');
        DB::table("Subcategorias")->insert([
            "name"=> "Aceites",
            "categoria_id" => $catCinco,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Mantequilla",
            "categoria_id" => $catCinco,
        ]);


        $catSiete = DB::table("Categorias")->where("name", "Frutas")->value("id");
        DB::table("Subcategorias")->insert([
            "name"=> "Cítricos",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Plátanos",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Manzanas",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Peras",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Frutas con hueso",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Aceitunas",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Bayas",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Frutos secos",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Otras",
            "categoria_id" => $catSiete,
        ]);


        $catSiete = DB::table("Categorias")->where('name', 'Legumbres y Hortalizas')->value('id');
        DB::table("Subcategorias")->insert([
            "name"=> "Con hoja / tallo",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Hortaliza de fruto",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Setas",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Legumbres secas",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Conservas vegetales",
            "categoria_id" => $catSiete,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Patatas freir malla",
            "categoria_id" => $catSiete,
        ]);

        $catOcho = DB::table("Categorias")->where("name","Azucar, miel y café")->value('id');
        DB::table("Subcategorias")->insert([
            "name"=> "Azucar",
            "categoria_id" => $catOcho,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Miel",
            "categoria_id" => $catOcho,
        ]);
        DB::table("Subcategorias")->insert([
            "name"=> "Café",
            "categoria_id" => $catOcho,
        ]);

    }
}
