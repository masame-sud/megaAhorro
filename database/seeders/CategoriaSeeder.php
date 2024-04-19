<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Categorias")->delete();

        DB::table("categorias")->insert([
            "name"=> "Pan y Cereales",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Carne",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Pescado",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Leche, queso y huevos",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Aceites y Grasas",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Frutas",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Legumbres y Hortalizas",
        ]);
        DB::table("categorias")->insert([
            "name"=> "Azucar, miel y café",
        ]);
        // Categoria::create([
        //     "name"=> "Azucar, miel y café",
        // ]);
        // Categoria::create([
        //     "name"=> "Carne",
        // ]);
        // Categoria::create([
        //     "name"=> "Pescado",
        // ]);
        // Categoria::create([
        //     "name"=> "Leche, queso y huevos",
        // ]);
        // Categoria::create([
        //     "name"=> "Aceites y grasas",
        // ]);
        // Categoria::create([
        //     "name"=> "Frutas",
        // ]);
        // Categoria::create([
        //     "name"=> "Legumbres / Hortalizas",
        // ]);
        // Categoria::create([
        //     "name"=> "Azucar, miel y café",
        // ]);
        
    }
}
