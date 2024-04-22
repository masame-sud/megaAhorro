<?php

namespace Database\Seeders;

use App\Models\Noticia;
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
            "img_url" => "./img/front/01.jpg",
            "producto_id" => "106",
            "p1" => "En los últimos días los precios de los huevos no han dejado de subir y está generando una preocupación en los consumidores.",
            "p2" => "Ya sea debido a los problemas de producción o de distribución, no parece que vaya a cesar esta subida próximamente.",
            "p3" => "Salvo que cambie la situación, como siempre la mejor opción es aprovechar toda la comida con una cocina de aprovechamiento y consumo en el hogar.",
            "created_at" => now(),
        ]);

        DB::table("Noticias")->insert([
            "title"=> "La tortilla española, un  lujo del siglo 21",
            "img_url" => "./img/front/02.jpg",
            "producto_id" => "110",
            "p1" => "La popular tortilla española, que durante años se ha servido como tapa con la bebida en los bares, va camino de ser una comida inaccesible",
            "p2" => "Las costantes subidas de precios del aceite de Oliva, medio con el que popularmente se elaboraba y le daba ese característico sabor, han encarecido su elaboración.",
            "p3" => "Si los precios siguen subiendo, cada vez menos hogares podrán tener recursos para consumir este plato tan típico.",
            "created_at" => now(),
        ]);

        DB::table("Noticias")->insert([
            "title"=> "Los limones sin recoger y el precio sin parar de subir",
            "img_url" => "./img/front/03.jpg",
            "producto_id" => "115",
            "p1" => "Con la excusa de que no sale rentable la recolección, toneladas de alimento se pudren en el suelo de los campos españoles.",
            "p2" => "Al mismo tiempo, la ausencia de los mismos en el mercado hace que sea mas demandado el producto importado del extranjero, con los costes que eso conlleva.",
            "p3" => "Se hace necesario una gestión adecuada de las economías familiares para superar esta época de incertidumbre.",
            "created_at" => now(),
        ]);

        Noticia::create([
            "title"=> "Ojalá que llueva, porque no hay café en el campo",
            "img_url" => "./img/front/04.jpeg",
            "producto_id" => "176",
            "p1" => "Las últimas temporadas de sequía han ido mermando progresivamente la producción de café en distintas zonas del mundo",
            "p2" => "Unido al aumento paulatino de la demanda de café, tan necesario en nuestro día a día, no está provocando un aumento de precios de momento",
            "p3" => "Las jornadas de trabajo promenten ser mas díficiles si esta situación no cambia pronto",
            "created_at" => now(),
        ]);

        Noticia::create([
            "title"=> "Mejillón, el marisco de la clase baja",
            "img_url" => "./img/front/05.jpeg",
            "producto_id" => "84",
            "p1" => "El que durante años ha sido el feo de los mariscos, es ahora considerado un manjar, al menos si tenemos en cuenta su precio.",
            "p2" => "Además, cada vez es más dificil encontrarlo en las diferentes grandes superficies.",
            "p3" => "Como siempre, recomendamos favorecer al comercio local minorista de cercanía, que en muchas ocasiones pueden ofrecer precios competitivos.",
            "created_at" => now(),
        ]);

        Noticia::create([
            "title"=> "El pollo mantiene su precio",
            "img_url" => "./img/front/06.jpeg",
            "producto_id" => "41",
            "p1" => "Durante los últimos tiempos el precio del pollo se mantiene sorprendentemente estable, aunque con algunas contradicciones.",
            "p2" => "Por ejemplo, según el precio / kilo, las pechugas enteras valen igual que las alitas y un pollo entero cuesta igual que sólo comprar contramuslos.",
            "p3" => "Como siempre, recomendamos favorecer al comercio local minorista de cercanía, que en muchas ocasiones pueden ofrecer precios competitivos.",
            "created_at" => now(),
        ]);


    }
}
