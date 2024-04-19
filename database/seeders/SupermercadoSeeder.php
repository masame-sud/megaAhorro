<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupermercadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Supermercados")->delete();

        DB::table("Supermercados")->insert([
            "name"=> "Mercadona",
            "logo_url" => ""
        ]);
        DB::table("Supermercados")->insert([
            "name"=> "Carrefour",
            "logo_url" => ""
        ]);
        DB::table("Supermercados")->insert([
            "name"=> "El Corte Inglés",
            "logo_url" => ""
        ]);
        DB::table("Supermercados")->insert([
            "name"=> "Día",
            "logo_url" => ""
        ]);
        DB::table("Supermercados")->insert([
            "name"=> "Eroski",
            "logo_url" => ""
        ]);
        DB::table("Supermercados")->insert([
            "name"=> "Alcampo",
            "logo_url" => ""
        ]);
    }
}
