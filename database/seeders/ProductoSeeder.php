<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("productos")->delete();

        $sub01 = DB::table("subcategorias")->where("name","Arroz")->value('id');

            DB::table("productos")->insert([
                "name"=> "Arroz largo",
                "subcategoria_id" => $sub01,
            ]);
            DB::table("productos")->insert([
                "name"=> "Arroz redondo",
                "subcategoria_id" => $sub01
            ]);

        $sub02 = DB::table("subcategorias")->where("name","Pan")->value('id');

            DB::table('productos')->insert([
                "name"=> "Panecillo menor 100 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Panecillo integral menor 100 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan menor 250 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan integral menor 250 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan mayor 250 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan integral mayor 250 gr",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan redondo",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan para hamburguesa",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan de molde",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan para hot-dog",
                "subcategoria_id"=> $sub02
                ]);
            DB::table('productos')->insert([
                "name"=> "Pan rallado",
                "subcategoria_id"=> $sub02
                ]);

        $sub03 = DB::table("subcategorias")->where("name","Pasta")->value('id');
            DB::table('productos')->insert([
                "name"=> "Espirales 3 sabores",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Fideo cabellin",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Fideo entrefino",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Fideo grueso",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Macarron",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Espaguetti",
                "subcategoria_id"=> $sub03
                ]);
            DB::table('productos')->insert([
                "name"=> "Tallarin",
                "subcategoria_id"=> $sub03
                ]);

        $sub04 = DB::table("subcategorias")->where("name","Harina")->value('id');
            DB::table('productos')->insert([
                "name" => "Harina de trigo",
                "subcategoria_id" => $sub04
                ]);
            DB::table('productos')->insert([
                "name" => "Harina de maiz",
                "subcategoria_id" => $sub04
                ]);

        $sub05 = DB::table("subcategorias")->where("name","Bovino")->value("id");
            DB::table("productos")->insert([
                "name" => "Solomillo de ternera",
                "subcategoria_id" => $sub05
                ]);
            DB::table("productos")->insert([
                "name" => "Chuletón de ternera",
                "subcategoria_id" => $sub05
                ]);
            DB::table("productos")->insert([
                "name" => "Entrecot de ternera",
                "subcategoria_id" => $sub05
                ]);
            DB::table("productos")->insert([
                "name" => "Tacos para estofado",
                "subcategoria_id" => $sub05
                ]);
            DB::table("productos")->insert([
                "name" => "Filetes de ternera",
                "subcategoria_id" => $sub05
                ]);

        $sub06 = DB::table("subcategorias")->where("name","Porcino")->value("id");
            DB::table("productos")->insert([
                "name" => "Chuletas de lomo",
                "subcategoria_id" => $sub06
                ]);
            DB::table("productos")->insert([
                "name" => "Pieza de lomo",
                "subcategoria_id" => $sub06
                ]);
            DB::table("productos")->insert([
                "name" => "Filetes cinta de lomo",
                "subcategoria_id" => $sub06
                ]);
            DB::table("productos")->insert([
                "name" => "Solomillo de cerdo",
                "subcategoria_id" => $sub06
                ]);
            DB::table("productos")->insert([
                "name" => "Costillas de cerdo",
                "subcategoria_id" => $sub06
                ]);
            DB::table("productos")->insert([
                "name" => "Filetes de jamon",
                "subcategoria_id" => $sub06
                ]);

        $sub07 = DB::table("subcategorias")->where("name", "Cordero")->value("id");
            DB::table("productos")->insert([
                "name" => "Chuletas de cordero",
                "subcategoria_id" => $sub07
                ]);
            DB::table("productos")->insert([
                "name" => "Paletilla de cordero",
                "subcategoria_id" => $sub07
                ]);

        $sub08 = DB::table("subcategorias")->where("name", "Ave")->value("id");
            DB::table("productos")->insert([
                "name" => "Traseros de pollo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Muslo y contramuslo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Muslitos de pollo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Pechuga fileteada de pollo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Alitas de pollo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Pechuga entera de pollo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Pollo entero limpio",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Chuletas de pavo",
                "subcategoria_id" => $sub08
                ]);
            DB::table("productos")->insert([
                "name" => "Pechuga fileteada de pavo",
                "subcategoria_id" => $sub08
                ]);

        $sub09 = DB::table("subcategorias")->where("name","Charcutería")->value("id");
            DB::table("productos")->insert([
                "name" => "Chopped de pavo",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Chopped pork",
                "subcategoria_id" => $sub09
                ]);
            // DB::table("productos")->insert([
            //     "name" => "Chopped de ternera",
            //     "subcategoria_id" => $sub09
            //     ]);
            DB::table("productos")->insert([
                "name" => "Mortadela de cerdo",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Mortadela de pavo",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Chorizo 'Pamplona'",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Salami extra",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Salchichón extra",
                "subcategoria_id" => $sub09
                ]);
            DB::table("productos")->insert([
                "name" => "Lomo embuchado",
                "subcategoria_id" => $sub09
                ]);

            DB::table("productos")->insert([
                "name" => "Bacon",
                "subcategoria_id" => $sub09
                ]);

        $sub10 = DB::table("subcategorias")->where("name","Preparados")->value("id");

            DB::table("productos")->insert([
                "name"=> "Tacos carne adobada 'Pinchos'",
                "subcategoria_id"=> $sub10
                ]);
            DB::table("productos")->insert([
                "name"=> "Longaniza de cerdo",
                "subcategoria_id"=> $sub10
                ]);
            DB::table("productos")->insert([
                "name"=> "Carne picada de cerdo",
                "subcategoria_id"=> $sub10
                ]);
            DB::table("productos")->insert([
                "name"=> "Carne picada de ternera",
                "subcategoria_id"=> $sub10
                ]);

        $sub11 = DB::table("subcategorias")->where("name","Pescado Fresco")->value("id");

        // DB::table("productos")->insert([
        //     "name"=> "Bacaladilla",
        //     "subcategoria_id" => $sub11
        //     ]);
        DB::table("productos")->insert([
            "name"=> "Bacalao",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Boquerón",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Rape",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Gallo",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Lenguado",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Lubina",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Merluza",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Pescadilla",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Salmón",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Sardinas",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Trucha",
            "subcategoria_id" => $sub11
            ]);
        DB::table("productos")->insert([
            "name"=> "Dorada",
            "subcategoria_id" => $sub11
            ]);


        $sub12 = DB::table("subcategorias")->where("name","Pescado Congelado")->value("id");
        DB::table("productos")->insert([
            "name" => "Atún en rodajas",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Lomos de bacalao",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Merluza fileteada",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Cola de rape",
            "subcategoria_id"=> $sub12
            ]);

        DB::table("productos")->insert([
            "name" => "Pez espada",
            "subcategoria_id"=> $sub12
            ]);

        DB::table("productos")->insert([
            "name" => "Lomos de salmón",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Filete de lenguado",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Gambas peladas",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Mejillón sin concha",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Langostino crudo",
            "subcategoria_id"=> $sub12
            ]);
        DB::table("productos")->insert([
            "name" => "Anillas de pota",
            "subcategoria_id"=> $sub12
            ]);


        $sub13 = DB::table("subcategorias")->where("name","Crustáceo / Molusco")->value("id");
        DB::table("productos")->insert([
            "name" => "Almeja / Chirla",
            "subcategoria_id"=> $sub13
            ]);
        DB::table("productos")->insert([
            "name" => "Pulpo cocido",
            "subcategoria_id"=> $sub13
            ]);
        DB::table("productos")->insert([
            "name" => "Calamar entero",
            "subcategoria_id"=> $sub13
            ]);
        DB::table("productos")->insert([
            "name" => "Mejillones",
            "subcategoria_id"=> $sub13
            ]);
        DB::table("productos")->insert([
            "name" => "Langostinos cocidos",
            "subcategoria_id"=> $sub13
            ]);


        $sub14 = DB::table("subcategorias")->where("name","Pescado en conserva")->value("id");
        DB::table("productos")->insert([
            "name"=> "Atún en aceite girasol",
            "subcategoria_id"=> $sub14
            ]);
        DB::table("productos")->insert([
            "name"=> "Mejillones en escabeche",
            "subcategoria_id"=> $sub14
            ]);
        DB::table("productos")->insert([
            "name"=> "Anchoas en aceite oliva",
            "subcategoria_id"=> $sub14
            ]);
        DB::table("productos")->insert([
            "name"=> "Sardinillas en aceite girasol",
            "subcategoria_id"=> $sub14
            ]);
        DB::table("productos")->insert([
            "name"=> "Bonito del norte en Aceite Oliva",
            "subcategoria_id"=> $sub14
            ]);

        $sub15= DB::table("subcategorias")->where("name","Leche")->value("id");
        DB::table("productos")->insert([
            "name"=>"Leche entera",
            "subcategoria_id"=> $sub15
            ]);
        DB::table("productos")->insert([
            "name"=>"Leche semidesnatada",
            "subcategoria_id"=> $sub15
            ]);
        DB::table("productos")->insert([
            "name"=>"Leche desnatada",
            "subcategoria_id"=> $sub15
            ]);

        $sub16= DB::table("subcategorias")->where("name","Lacteos")->value("id");
        DB::table("productos")->insert([
            "name"=>"Arroz con leche",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Flan de huevo",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Flan de vainilla",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Natillas",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Yogur bebible fresa y plátano",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Yogur natural",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Yogur sabores",
            "subcategoria_id"=> $sub16
            ]);
        DB::table("productos")->insert([
            "name"=>"Nata montada (spray)",
            "subcategoria_id"=> $sub16
            ]);

        $sub17= DB::table("subcategorias")->where("name","Queso")->value("id");
        DB::table("productos")->insert([
            "name"=>"Queso fresco",
            "subcategoria_id"=> $sub17
            ]);
        DB::table("productos")->insert([
            "name"=>"Queso curado de oveja",
            "subcategoria_id"=> $sub17
            ]);
        DB::table("productos")->insert([
            "name"=>"Queso semicurado",
            "subcategoria_id"=> $sub17
            ]);
        DB::table("productos")->insert([
            "name"=>"Queso Mozarella rayado",
            "subcategoria_id"=> $sub17
            ]);

        $sub18= DB::table("subcategorias")->where("name","Huevos")->value("id");
        DB::table("productos")->insert([
            "name"=> "Huevos M",
            "subcategoria_id"=> $sub18
            ]);
        DB::table("productos")->insert([
            "name"=> "Huevos L",
            "subcategoria_id"=> $sub18
            ]);
        DB::table("productos")->insert([
            "name"=> "Huevos XL",
            "subcategoria_id"=> $sub18
            ]);

        $sub19= DB::table("subcategorias")->where("name","Aceites")->value("id");
        DB::table("productos")->insert([
            "name"=> "Girasol",
            "subcategoria_id" => $sub19
            ]);
        DB::table("productos")->insert([
            "name"=> "Oliva intenso",
            "subcategoria_id" => $sub19
            ]);
        DB::table("productos")->insert([
            "name"=> "Oliva virgen",
            "subcategoria_id" => $sub19
            ]);
        DB::table("productos")->insert([
            "name"=> "Oliva Virgen Extra",
            "subcategoria_id" => $sub19
            ]);

        $sub20= DB::table("subcategorias")->where("name","Mantequilla")->value("id");
        DB::table("productos")->insert([
            "name"=> "Mantequilla",
            "subcategoria_id" => $sub20
            ]);
        DB::table("productos")->insert([
            "name"=> "Margarina",
            "subcategoria_id" => $sub20
            ]);


        $sub21 = DB::table("subcategorias")->where("name","Cítricos")->value("id");
        DB::table("productos")->insert([
            "name"=> "Limones",
            "subcategoria_id" => $sub21
            ]);
        DB::table("productos")->insert([
            "name"=> "Naranjas (zumo)",
            "subcategoria_id" => $sub21
            ]);
        DB::table("productos")->insert([
            "name"=> "Mandarinas",
            "subcategoria_id" => $sub21
            ]);

        $sub22 = DB::table("subcategorias")->where("name","Plátanos")->value("id");
        DB::table("productos")->insert([
            "name"=> "Bananas",
            "subcategoria_id" => $sub22
            ]);
        DB::table("productos")->insert([
            "name"=> "Plátano canario",
            "subcategoria_id" => $sub22
            ]);

        $sub23 = DB::table("subcategorias")->where("name", "Manzanas")->value("id");
        DB::table("productos")->insert([
            "name"=> "Golden",
            "subcategoria_id" => $sub23
            ]);
        DB::table("productos")->insert([
            "name"=> "Roja",
            "subcategoria_id" => $sub23
            ]);

        $sub24 = DB::table("subcategorias")->where("name", "Peras")->value("id");
        DB::table("productos")->insert([
            "name"=> "Conferencia",
            "subcategoria_id" => $sub24
            ]);
        DB::table("productos")->insert([
            "name"=> "Ercolina",
            "subcategoria_id" => $sub24
            ]);


        $sub25 = DB::table("subcategorias")->where("name","Frutas con hueso")->value("id");
        DB::table("productos")->insert([
            "name"=> "Aguacate",
            "subcategoria_id" => $sub25
            ]);
        DB::table("productos")->insert([
            "name"=> "Ciruela",
            "subcategoria_id" => $sub25
            ]);
        DB::table("productos")->insert([
            "name"=> "Cerezas",
            "subcategoria_id" => $sub25
            ]);


        $sub26 = DB::table("subcategorias")->where("name","Aceitunas")->value("id");
        DB::table("productos")->insert([
            "name"=> "Manzanilla",
            "subcategoria_id" => $sub26
            ]);
        DB::table("productos")->insert([
            "name"=> "Negra",
            "subcategoria_id" => $sub26
            ]);
        DB::table("productos")->insert([
            "name"=> "Rellena anchoa",
            "subcategoria_id" => $sub26
            ]);

        $sub27 = DB::table("subcategorias")->where("name","Bayas")->value("id");
        DB::table("productos")->insert([
            "name"=> "Fresas",
            "subcategoria_id" => $sub27
            ]);
        DB::table("productos")->insert([
            "name"=> "Uva blanca",
            "subcategoria_id" => $sub27
            ]);

        $sub28 = DB::table("subcategorias")->where("name", "Frutos secos")->value("id");
        DB::table("productos")->insert([
            "name"=> "Almendras crudas",
            "subcategoria_id" => $sub28
            ]);
        DB::table("productos")->insert([
            "name"=> "Avellanas tostadas",
            "subcategoria_id" => $sub28
            ]);
        DB::table("productos")->insert([
            "name"=> "Cacahuetes fritos",
            "subcategoria_id" => $sub28
            ]);
        DB::table("productos")->insert([
            "name"=> "Pistachos tostados",
            "subcategoria_id" => $sub28
            ]);
        DB::table("productos")->insert([
            "name"=> "Nueces peladas",
            "subcategoria_id" => $sub28
            ]);

        $sub29= DB::table("subcategorias")->where("name","Otras")->value("id");
        DB::table("productos")->insert([
            "name"=> "Chirimoya",
            "subcategoria_id" => $sub29
            ]);
        DB::table("productos")->insert([
            "name"=> "Kiwi",
            "subcategoria_id" => $sub29
            ]);
        DB::table("productos")->insert([
            "name"=> "Mango",
            "subcategoria_id" => $sub29
            ]);
        DB::table("productos")->insert([
            "name"=> "Sandia",
            "subcategoria_id" => $sub29
            ]);
        DB::table("productos")->insert([
            "name"=> "Melon",
            "subcategoria_id" => $sub29
            ]);
        DB::table("productos")->insert([
            "name"=> "Piña",
            "subcategoria_id" => $sub29
            ]);

        $sub30 = DB::table("subcategorias")->where("name","Con hoja / tallo")->value("id");
        DB::table("productos")->insert([
            "name"=> "Acelgas",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Ajos",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Apio",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Cebolla tubo",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Puerro",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Lechuga iceberg",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Col lombarda",
            "subcategoria_id" => $sub30
        ]);
        DB::table("productos")->insert([
            "name"=> "Zanahorias",
            "subcategoria_id" => $sub30
        ]);
        $sub31 = DB::table("subcategorias")->where("name","Hortaliza de fruto")->value("id");
        DB::table("productos")->insert([
            "name"=> "Tomate ensalada",
            "subcategoria_id" => $sub31
        ]);
        DB::table("productos")->insert([
            "name"=> "Calabacin",
            "subcategoria_id" => $sub31
        ]);
        DB::table("productos")->insert([
            "name"=> "Calabaza",
            "subcategoria_id" => $sub31
        ]);
        DB::table("productos")->insert([
            "name"=> "Pepino",
            "subcategoria_id" => $sub31
        ]);
        DB::table("productos")->insert([
            "name"=> "Pimiento verde freir",
            "subcategoria_id" => $sub31
        ]);

        $sub32 = DB::table("subcategorias")->where("name","Setas")->value("id");
        DB::table("productos")->insert([
            "name"=> "Champiñones",
            "subcategoria_id" => $sub32
        ]);
        DB::table("productos")->insert([
            "name"=> "Setas",
            "subcategoria_id" => $sub32
        ]);


        $sub33 = DB::table("subcategorias")->where("name","Legumbres secas")->value("id");
        DB::table("productos")->insert([
            "name"=> "Alubia blanca",
            "subcategoria_id" => $sub33
        ]);
        DB::table("productos")->insert([
            "name"=> "Garbanzos",
            "subcategoria_id" => $sub33
        ]);
        DB::table("productos")->insert([
            "name"=> "Lentejas",
            "subcategoria_id" => $sub33
        ]);


        $sub34 = DB::table("subcategorias")->where("name","Conservas vegetales")->value("id");
        DB::table("productos")->insert([
            "name"=> "Alcachofa troceada",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Alubias en bote",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Champiñon laminado",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Esparragos",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Garbanzo cocido",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Guisantes frescos",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Judía verde troceada",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Maiz dulce",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Tomate entero pelado",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Tomate triturado",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Tomate frito tarro",
            "subcategoria_id"=> $sub34
            ]);
        DB::table("productos")->insert([
            "name"=> "Zanahoria rallada",
            "subcategoria_id"=> $sub34
            ]);

        $sub35 = DB::table("subcategorias")->where("name","Patatas freir malla")->value("id");
        DB::table("productos")->insert([
            "name"=> "Patatas freir malla",
            "subcategoria_id"=> $sub35
            ]);


        $sub36 = DB::table("subcategorias")->where("name","Azucar")->value("id");
        DB::table("productos")->insert([
            "name"=> "Azucar blanco",
            "subcategoria_id"=> $sub36
            ]);

        $sub37 = DB::table("subcategorias")->where("name","Miel")->value("id");
        DB::table("productos")->insert([
            "name"=> "Miel de flores",
            "subcategoria_id"=> $sub37
            ]);

        $sub38 = DB::table("subcategorias")->where("name","Café")->value("id");
        DB::table("productos")->insert([
            "name"=> "Cafe molido Natural",
            "subcategoria_id"=> $sub38
            ]);

        }
}
