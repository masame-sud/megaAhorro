<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Noticias")->delete();

        DB::table("Noticias")->insert([
            "title"=> "Crece la preocupacion por el precio de los huevos",
            "img_url" => "./img/front01.jpg",
            "producto_id" => "106",
            "p1" => "En los últimos días los precios de los huevos no han dejado de subir y está generando una preocupación en los consumidores.",
            "p2" => "Ya sea debido a los problemas de producción o de distribución, no parece que vaya a cesar esta subida próximamente.",
            "p3" => "Salvo que cambie la situación, como siempre la mejor opción es aprovechar toda la comida con una cocina de aprovechamiento y consumo en el hogar.",
            "publish_at" => NULL,
        ]);

        DB::table("Noticias")->insert([
            "title"=> "La tortilla española, un  lujo del siglo 21",
            "img_url" => "./img/front02.jpg",
            "producto_id" => "110",
            "p1" => "La popular tortilla española, que durante años se ha servido como tapa con la bebida en los bares, va camino de ser una comida inaccesible",
            "p2" => "Las costantes subidas de precios del aceite de Oliva, medio con el que popularmente se elaboraba y le daba ese característico sabor, han encarecido su elaboración.",
            "p3" => "Si los precios siguen subiendo, cada vez menos hogares podrán tener recursos para consumir este plato tan típico.",
            "publish_at" => NULL,
        ]);

        DB::table("Noticias")->insert([
            "title"=> "Los limones sin recoger y el precio sin parar de subir",
            "img_url" => "./img/front03.jpg",
            "producto_id" => "115",
            "p1" => "Con la excusa de que no sale rentable la recolección, toneladas de alimento se pudren en el suelo de los campos españoles.",
            "p2" => "Al mismo tiempo, la ausencia de los mismos en el mercado hace que sea mas demandado el producto importado del extranjero, con los costes que eso conlleva.",
            "p3" => "Se hace necesario una gestión adecuada de las economías familiares para superar esta época de incertidumbre.",
            "publish_at" => NULL,
        ]);
    }
}
