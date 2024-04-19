<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class SupermercadoproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Supermercadoproductos")->delete();

        $mercadona = DB::table("supermercados")->where("name","Mercadona")->value("id");
        $carrefour = DB::table("supermercados")->where("name","Carrefour")->value("id");
        $eci = DB::table("supermercados")->where("name","El Corte Inglés")->value("id");
        $dia = DB::table("supermercados")->where("name","Día")->value("id");
        $eroski = DB::table("supermercados")->where("name","Eroski")->value("id");
        $alcampo = DB::table("supermercados")->where("name","Alcampo")->value("id");

        // $supermercados = DB::select('select * from supermercados');
        // $productos = DB::select('select * from productos');

        // foreach ($productos as $producto) {
        //       foreach ($supermercados as $supermercado) {
        //         DB::table("supermercadoproductos")->insert([
        //                 "producto_id"=> $producto->id,
        //                 "supermercado_id"=> $supermercado->id,
        //                 "img_url" => "",
        //                 "scrab_id" => "",
        //                 "peso" => 1000,
        //                 "descripcion"=> ""
        //                                                  ]);
        //                                                 }
        //                                      }

$p10101 = DB::table("productos")->where("name","Arroz largo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/801f924df0d429d82c0a136901dcb9b0.jpg?fit=crop&h=600&w=600",
            "peso" => 1000,
            "scrab_id"=> "5063",
            "descripcion" => "Arroz largo Hacendado",
            "link" => "https://tienda.mercadona.es/product/5063/arroz-largo-hacendado-paquete"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_350x_/img_pim_food/197726_00_1.jpg",
            "peso" => 1000,
            "scrab_id"=> "R-538408171",
            "descripcion" => "Arroz largo categoria 1 Carrefour",
            "link" => "https://www.carrefour.es/supermercado/arroz-largo-categoria-1-carrefour-classc-1-kg/R-538408171/p"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $eci,
            "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202208/30/00118005600343____3__600x600.jpg",
            "peso" => 1000,
            "scrab_id"=> "0110118005600343",
            "descripcion" => "EL CORTE INGLES arroz largo extra",
            "link" => "https://www.elcorteingles.es/supermercado/0110118005600343-el-corte-ingles-arroz-largo-extra-paquete-1-kg/"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/5873/5873_ISO_0_ES.jpg?imwidth=392",
            "peso" => 1000,
            "scrab_id"=> "5873",
            "descripcion" => "Arroz largo de primera categoria arrozona",
            "link" => "https://www.dia.es/arroz-pastas-y-legumbres/arroz/p/5873"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10101,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/4374161.jpg",
            "peso" =>1000,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4374161-arroz-largo-eroski-basic-paquete-1-kg/",
            "descripcion" => "Arroz largo EROSKI BASIC",
            "link" => "https://supermercado.eroski.es/es/productdetail/4374161-arroz-largo-eroski-basic-paquete-1-kg/"
             ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10101,
        "supermercado_id"=> $alcampo,
        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/38e6e6f3-a05e-4cd8-a43b-86fe8cf1bcac/500x500.jpg",
        "peso" =>1000,
        "scrab_id"=> "21308",
        "descripcion" => "Arroz largo PRODUCTO ALCAMPO",
        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Arroz-largo-PRODUCTO-ALCAMPO-paquete-de-1-kg/21308"
            ]);

$p10102 = DB::table("productos")->where("name","Arroz redondo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/0daf43fb5761b823ce83c985930c97c9.jpg?fit=crop&h=600&w=600",
            "peso" => 1000,
            "scrab_id"=> "5044",
            "descripcion" => "Arroz redondo HACENDADO",
            "link" => "https://tienda.mercadona.es/product/5044/arroz-redondo-hacendado-paquete"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/101424_00_1.jpg",
            "peso" => 1000,
            "scrab_id"=> "R-prod1022743",
            "descripcion" => "Arroz categoría primera Carrefour",
            "link" => "https://www.carrefour.es/supermercado/arroz-categoria-primera-carrefour-1-kg/R-prod1022743/p"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $eci,
            "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202209/13/00118005700754____3__600x600.jpg",
            "peso" => 1000,
            "scrab_id"=> "0110118005700754",
            "descripcion"=> "EL CORTE INGLES arroz redondo",
            "link" => "https://www.elcorteingles.es/supermercado/0110118005700754-el-corte-ingles-arroz-redondo-paquete-1-kg/"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/151/151_ISO_0_ES.jpg?imwidth=392",
            "peso" => 1000,
            "scrab_id"=> "151",
            "descripcion" => "Arroz extra Arrozona",
            "link" => "https://www.dia.es/arroz-pastas-y-legumbres/arroz/p/151"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10102,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/300434.jpg",
            "peso" =>1000,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/300434-arroz-extra-eroski-basic-paquete-1-kg/",
            "descripcion" => "Arroz extra EROSKI Basic",
            "link" => "https://supermercado.eroski.es/es/productdetail/300434-arroz-extra-eroski-basic-paquete-1-kg/"
             ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10102,
        "supermercado_id"=> $alcampo,
        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/db855738-4cde-4828-b403-47c3f0e2edbc/500x500.jpg",
        "peso" =>1000,
        "scrab_id"=> "18165",
        "descripcion" => "Arroz redondo extra PRODUCTO ALCAMPO",
        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Arroz-redondo-extra-PRODUCTO-ALCAMPO-paquete-de-1-kg/18165"
            ]);

$p10201 = DB::table("productos")->where("name","Panecillo menor 100 gr")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/cd8aa2ecd79d7f883dc5c52453c9c51d.jpg?fit=crop&h=600&w=600",
            "peso" => 85,
            "scrab_id"=> "92998",
            "descripcion" => "Panecillo sin sal añadida",
            "link" => "https://tienda.mercadona.es/product/92998/panecillo-sin-sal-anadida"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/256179_00_1.jpg",
            "peso" => 100,
            "scrab_id"=> "R-fprod1210204",
            "descripcion" => "Baguetina Enharinada",
            "link" => "https://www.carrefour.es/supermercado/baguetina-enharinada-1-ud/R-fprod1210204/p"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $eci,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $dia,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10201,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/21813472.jpg",
            "peso" => 100,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21813472-bollo-de-pan-redondo-ud-eroski-100-g/",
            "descripcion" => "Bollo de pan redondo",
            "link" => "https://supermercado.eroski.es/es/productdetail/21813472-bollo-de-pan-redondo-ud-eroski-100-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10201,
        "supermercado_id"=> $alcampo,
        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5f2a827c-a4ac-4798-9d58-c0abdd6836b9/500x500.jpg",
        "peso" => 105,
        "scrab_id"=> "64510",
        "descripcion" => "Panecillo viena gourmet",
        "link" => "https://www.compraonline.alcampo.es/products/panecillo-viena-gourmet-105g/64510"
            ]);

$p10202 = DB::table("productos")->where("name","Panecillo integral menor 100 gr")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/9ff7d3890d76b08e513d008f310c994c.jpg?fit=crop&h=600&w=600",
                "peso" => 80,
                "scrab_id"=> "83284",
                "descripcion" => "Panecillo harina integral 50% de trigo sin sal añadida",
                "link" => "https://tienda.mercadona.es/product/83284/panecillo-harina-integral-50-trigo-sin-sal-anadida"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/274757/274757_ISO_0_ES.jpg?imwidth=392",
                "peso" => 90,
                "scrab_id"=> "274757",
                "descripcion" => "VIENA ANDALUZA INTEGRAL DE TRIGO (10%)",
                "link" => "https://www.dia.es/panes-harinas-y-masas/pan-recien-horneado/p/274757"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10202,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10202,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b65140fe-0820-4702-9923-9f1c67792074/500x500.jpg",
                "peso" =>60,
                "scrab_id"=> "55400",
                "descripcion" => "Panecillo integral con masa madre",
                "link" => "https://www.compraonline.alcampo.es/products/Panecillo-integralcon-masa-madre-de-Fabricaci%C3%B3n-Propia-60-g/55400"
                    ]);

$p10203 = DB::table("productos")->where("name","Pan menor 250 gr")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/b0382f15d4c53669852e014255bdc714.jpg?fit=crop&h=600&w=600",
            "peso" => 250,
            "scrab_id"=> "83277",
            "descripcion" => "Barra de pan",
            "link" => "https://tienda.mercadona.es/product/83202.1/barra-pan"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/216537_00_1.jpg",
            "peso" => 250,
            "scrab_id"=> "R-527063193",
            "descripcion" => "Barra de pan pistola",
            "link" => "https://www.carrefour.es/supermercado/barra-de-pan-pistola-carrefour-250-g/R-527063193/p"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $eci,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/38109/38109_ISO_0_ES.jpg?imwidth=392",
            "peso" => 250,
            "scrab_id"=> "38109",
            "descripcion" => "Barra de pan El molino de Dia",
            "link" => "https://www.dia.es/panes-harinas-y-masas/pan-recien-horneado/p/38109"
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10203,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/587352.jpg",
            "peso" => 220,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/587352-baguette-220-g/",
            "descripcion" => "Baguette",
            "link" => "https://supermercado.eroski.es/es/productdetail/587352-baguette-220-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10203,
            "supermercado_id"=> $alcampo,
            "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/82dd335e-fe47-4c61-ad6e-43596181b094/500x500.jpg",
            "peso" =>250,
            "scrab_id"=> "55503",
            "descripcion" => "Barra de pan común",
            "link" => "https://www.compraonline.alcampo.es/products/barra-de-pan-com%C3%BAn-250g/78854"
                ]);

$p10204 = DB::table("productos")->where("name","Pan integral menor 250 gr")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $mercadona,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/550659_00_1.jpg",
                    "peso" => 250,
                    "scrab_id"=> "R-VC4AECOMM-550659",
                    "descripcion" => "Barra 100% integral",
                    "link" => "https://www.carrefour.es/supermercado/barra-100-integral-250-g/R-VC4AECOMM-550659/p"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $eci,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $dia,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10204,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/23467301.jpg",
                    "peso" => 210,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25629544-barra-integral-de-trigo-100-eroski-210-g/",
                    "descripcion" => "Barra integral de trigo 100% EROSKI",
                    "link" => "https://supermercado.eroski.es/es/productdetail/25629544-barra-integral-de-trigo-100-eroski-210-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10204,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8104e648-033b-41f8-8c9d-f4f5dee34cb4/500x500.jpg",
                    "peso" => 220,
                    "scrab_id"=> "55413",
                    "descripcion" => "Baguette integral con masa madre",
                    "link" => "https://www.compraonline.alcampo.es/products/baguette-integral-con-masa-madre-de-fabricaci%C3%B3n-propia-220-g/55405"
                        ]);

$p10205 = DB::table("productos")->where("name","Pan mayor 250 gr")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/284599e6e5bf62e1b0a9a834b385fbdd.jpg?fit=crop&h=500&w=500",
                    "peso" => 400,
                    "scrab_id"=> "86610.1",
                    "descripcion" => "Barra de pan de espiga",
                    "link" => "https://tienda.mercadona.es/product/86610.1/barra-pan-espiga"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/240795_00_1.jpg",
                    "peso" => 325,
                    "scrab_id"=> "R-fprod1190377",
                    "descripcion" => "Barra grande extra",
                    "link" => "https://www.carrefour.es/supermercado/barra-grande-extra-carrefour-1-ud/R-fprod1190377/p"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202304/28/00118574700177____7__600x600.jpg",
                    "peso" => 340,
                    "scrab_id"=> "0110118574700177",
                    "descripcion" => "RUIPAN Pan especial torrijas",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118574700177-ruipan-pan-especial-torrijas-envase-340-g/"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/295264/295264_ISO_0_ES.jpg?imwidth=392",
                    "peso" => 350,
                    "scrab_id"=> "295264",
                    "descripcion" => "Hogaza El molino de Dia",
                    "link" => "https://www.dia.es/panes-harinas-y-masas/pan-recien-horneado/p/295264"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10205,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/1106434_x.jpg",
                    "peso" => 330,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1106434-barra-grande-eroski-330-g/",
                    "descripcion" => "Barra Grande EROSKI",
                    "link" => "https://supermercado.eroski.es/es/productdetail/1106434-barra-grande-eroski-330-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10205,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/60388cd3-7537-4986-911e-e176e1aec26d/500x500.jpg",
                    "peso" => 300,
                    "scrab_id"=> "73228",
                    "descripcion" => "Barra de Pan Paris",
                    "link" => "https://www.compraonline.alcampo.es/products/barra-de-pan-par%C3%ADs-300g/73228"
                        ]);

$p10206 = DB::table("productos")->where("name","Pan integral mayor 250 gr")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/a93e344e8688362870bc4bc130ac938e.jpg?fit=crop&h=500&w=500",
                        "peso" => 350,
                        "scrab_id"=> "83859.1",
                        "descripcion" => "Pan integral trigo 100%",
                        "link" => "https://tienda.mercadona.es/product/83859.1/pan-integral-trigo-100"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/550656_00_2.jpg",
                        "peso" => 360,
                        "scrab_id"=> "R-VC4AECOMM-550656",
                        "descripcion" => "Pan de la abuela integral 100%",
                        "link" => "https://www.carrefour.es/supermercado/pan-de-la-abuela-integral-100/R-VC4AECOMM-550656/p"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $eci,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $dia,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10206,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/23420037.jpg",
                        "peso" => 380,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2498655-hogaza-100-integral-eroski-380-g/",
                        "descripcion" => "Hogaza 100% integral EROSKI",
                        "link" => "https://supermercado.eroski.es/es/productdetail/24948655-hogaza-100-integral-eroski-380-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10206,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f4ed83aa-c9aa-467d-a2c4-6b70cd0b7466/500x500.jpg",
                        "peso" => 400,
                        "scrab_id"=> "91356",
                        "descripcion" => "Hogaza de trigo integral con masa madre",
                        "link" => "https://www.compraonline.alcampo.es/products/hogaza-de-trigo-integral-con-masa-madre-de-fabricaci%C3%B3n-propia-400g/91356"
                            ]);

$p10207 = DB::table("productos")->where("name","Pan redondo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/f2c461ca72260e92cd55bda23e266256.jpg?fit=crop&h=500&w=500",
                "peso" => 800,
                "scrab_id"=> "23086.1",
                "descripcion" => "Barra pan de pueblo",
                "link" => "https://tienda.mercadona.es/product/23086.1/barra-pan-pueblo"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/433734_00_1.jpg",
                "peso" => 800,
                "scrab_id"=> "R-VC4AECOMM-433734",
                "descripcion" => "Pan de Pueblo sin aditivos",
                "link" => "https://www.carrefour.es/supermercado/pan-de-pueblo-sin-aditivos-1-ud/R-VC4AECOMM-433734/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/284801/284801_ISO_0_ES.jpg?imwidth=392",
                "peso" => 600,
                "scrab_id"=> "284801",
                "descripcion" => "Pan de horno de piedra El molino de Dia",
                "link" => "https://www.dia.es/panes-harinas-y-masas/pan-recien-horneado/p/284801"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10207,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => 800,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24605107-pan-de-pueblo-panusa-800-g/",
                "descripcion" => "Pan de pueblo PANUSA",
                "link" => "https://supermercado.eroski.es/es/productdetail/24605107-pan-de-pueblo-panusa-800-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10207,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c869df1f-06a2-4d11-8904-98717474659c/500x500.jpg",
                "peso" => 800,
                "scrab_id"=> "69518",
                "descripcion" => "Pan campesino con masa madre",
                "link" => "https://www.compraonline.alcampo.es/products/Pan-campesino-con-masa-madre-de-Fabricaci%C3%B3n-Propia-800-gr/69518"
                    ]);

$p10208 = DB::table("productos")->where("name","Pan para hamburguesa")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/e8da3a0e0baeb77bd27e655d00ffced0.jpg?fit=crop&h=500&w=500",
                "peso" => 300,
                "scrab_id"=> "13803",
                "descripcion" => "Pan maxi hamburguesa Hacendado",
                "link" => "https://tienda.mercadona.es/product/13803/pan-maxi-hamburguesa-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/289641_00_1.jpg",
                "peso" => 300,
                "scrab_id"=> "R-575702273",
                "descripcion" => "Pan de Hamburguesa Carrefour",
                "link" => "https://www.carrefour.es/supermercado/pan-de-hamburguesa-carrefour-4-ud-300-g/R-575702273/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201604/22/00120653400554____2__600x600.jpg",
                "peso" => 220,
                "scrab_id"=> "0110120653400554",
                "descripcion" => "Pan de hamburguesas classic con sésamo",
                "link" => "https://www.elcorteingles.es/supermercado/0110120653400554-el-corte-ingles-pan-de-hamburguesas-classic-con-sesamo-4-unidades-bolsa-220-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/182644/182644_ISO_0_ES.jpg?imwidth=392",
                "peso" => 300,
                "scrab_id"=> "182644",
                "descripcion" => "Pan de hamburguesa maxi El molino de Dia",
                "link" => "https://www.dia.es/panes-harinas-y-masas/pan-de-molde/p/182644"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10208,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/15700891_x.jpg",
                "peso" => 300,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15700891-pan-hamburguesa-maxiburguers-eroski-4-unid-paquete-300-g/",
                "descripcion" => "Pan hamburguesa Maxiburguers EROSKI",
                "link" => "https://supermercado.eroski.es/es/productdetail/15700891-pan-hamburguesa-maxiburguers-eroski-4-unid-paquete-300-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10208,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5b2d141a-5f66-45f4-a296-eefdf7a69c8f/500x500.jpg",
                "peso" => 220,
                "scrab_id"=> "61726",
                "descripcion" => "ALCAMPO Pan burguer con sésamo",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-pan-burguer-con-s%C3%A9samo-4-uds-220-g/61726"
                    ]);

$p10209 = DB::table("productos")->where("name","Pan de molde")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/f26045084b08d8792979df13779e97d3.jpg?fit=crop&h=500&w=500",
                        "peso" => 820,
                        "scrab_id"=> "83867",
                        "descripcion" => "Pan de molde blanco familiar Hacendado",
                        "link" => "https://tienda.mercadona.es/product/83867/pan-molde-blanco-familiar-hacendado-paquete"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/443145_00_1.jpg",
                        "peso" => 820,
                        "scrab_id"=> "R-VC4AECOMM-443145",
                        "descripcion" => "Pan de molde con corteza",
                        "link" => "https://www.carrefour.es/supermercado/pan-de-molde-con-corteza-carrefour-820-g/R-VC4AECOMM-443145/p"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202001/15/00120654802287____2__1200x1200.jpg",
                        "peso" => 820,
                        "scrab_id"=> "0110120654802287",
                        "descripcion" => "Pan de molde con corteza",
                        "link" => "https://www.elcorteingles.es/supermercado/0110120654802287-el-corte-ingles-pan-de-molde-con-corteza-original-26-rebanadas-bolsa-820-g/"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/77955/77955_ISO_0_ES.jpg?imwidth=392",
                        "peso" => 820,
                        "scrab_id"=> "77955",
                        "descripcion" => "Pan de molde formato familiar",
                        "link" => "https://www.dia.es/panes-harinas-y-masas/pan-de-molde/p/77955"
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10209,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/17946732_x.jpg",
                        "peso" => 820,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17946732-pan-de-molde-con-corteza-eroski-basic-paquete-820-g/",
                        "descripcion" => "Pan de molde con corteza",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17946732-pan-de-molde-con-corteza-eroski-basic-paquete-820-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10209,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/477f087f-cd30-4ca1-b0b5-b5b8ef767ad9/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "11739",
                        "descripcion" => "Pan de molde blanco con corteza",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-pan-de-molde-blanco-con-corteza-1000-g/11739"
                            ]);

$p10210 = DB::table("productos")->where("name","Pan para hot-dog")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b23bcee0aeaa562bdca15d7e97f8bfe1.jpg?fit=crop&h=500&w=500",
                "peso" => 330,
                "scrab_id"=> "82332",
                "descripcion" => "Pan hot dog Hacendado",
                "link" => "https://tienda.mercadona.es/product/82332/pan-hot-dog-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/192259_00_1.jpg",
                "peso" => 330,
                "scrab_id"=> "R-606509119",
                "descripcion" => "Pan de perrito",
                "link" => "https://www.carrefour.es/supermercado/pan-de-perrito-6-ud-330-g/R-606509119/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202009/10/00120653400521____3__1200x1200.jpg",
                "peso" => 330,
                "scrab_id"=> "0110120653400521",
                "descripcion" => "Panecillos para perritos",
                "link" => "https://www.elcorteingles.es/supermercado/0110120653400521-el-corte-ingles-panecillos-para-perritos-6-unidades-bolsa-330-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/40381/40381_ISO_0_ES.jpg?imwidth=392",
                "peso" => 330,
                "scrab_id"=> "40381",
                "descripcion" => "Panecillos para perritos",
                "link" => "https://www.dia.es/panes-harinas-y-masas/pan-de-molde/p/40381"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10210,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/15700917_x.jpg",
                "peso" => 330,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15700917-hot-dog-eroski-6-uds-paquete-330-g/",
                "descripcion" => "Hot dog EROSKI",
                "link" => "https://supermercado.eroski.es/es/productdetail/15700917-hot-dog-eroski-6-uds-paquete-330-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10210,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3541ba42-b3b9-4c40-a5d2-39a870db14fd/500x500.jpg",
                "peso" => 330,
                "scrab_id"=> "28518",
                "descripcion" => "Pan de perrito",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-pan-para-perrito-6-uds-330-g/28518"
                    ]);

$p10211 = DB::table("productos")->where("name","Pan rallado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/fe031df985de4909241d4503364df110.jpg?fit=crop&h=500&w=500",
                "peso" => 750,
                "scrab_id"=> "82219",
                "descripcion" => "Pan rallado Hacendado",
                "link" => "https://tienda.mercadona.es/product/82219/pan-rallado-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/924985_00_1.jpg",
                "peso" => 750,
                "scrab_id"=> "R-805763831",
                "descripcion" => "Pan rallado Carrefour",
                "link" => "https://www.carrefour.es/supermercado/pan-rallado-carrefour-750-g/R-805763831/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202011/27/00120668500422____2__1200x1200.jpg",
                "peso" => 750,
                "scrab_id"=> "0110120668500422",
                "descripcion" => "Pan rallado",
                "link" => "https://www.elcorteingles.es/supermercado/0110120668500422-el-corte-ingles-pan-rallado-bolsa-750-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/56050/56050_ISO_0_ES.jpg?imwidth=392",
                "peso" => 750,
                "scrab_id"=> "56050",
                "descripcion" => "Pan rallado",
                "link" => "https://www.dia.es/panes-harinas-y-masas/pan-rallado/p/56050"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10211,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/11798063_x.jpg",
                "peso" => 750,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11798063-pan-rallado-eroski-basic-paquete-750-g/",
                "descripcion" => "Pan rallado BASIC",
                "link" => "https://supermercado.eroski.es/es/productdetail/11798063-pan-rallado-eroski-basic-paquete-750-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10211,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/953d6169-e66d-4c0a-b8c1-360d265b324e/500x500.jpg",
                "peso" => 750,
                "scrab_id"=> "804840",
                "descripcion" => "Pan rallado",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pan-rallado-750-g/804840"
                    ]);

$p10301 = DB::table("productos")->where("name","Espirales 3 sabores")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/efecccdb297479c7a16f0555a3375159.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "6305",
                "descripcion" => "Pajaritas vegetales Hacendado",
                "link" => "https://tienda.mercadona.es/product/6305/pajaritas-vegetales-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/228697_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-521005645",
                "descripcion" => "Espirales vegetales",
                "link" => "https://www.carrefour.es/supermercado/espirales-vegetales-carrefour-500-g/R-521005645/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201909/26/00118003600485____1__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118003600485",
                "descripcion" => "Espirales con vegetales tricolor",
                "link" => "https://www.elcorteingles.es/supermercado/0110118003600485-romero-espirales-con-vegetales-tricolor-paquete-500-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/33117/33117_ISO_0_ES.jpg",
                "peso" => 500,
                "scrab_id"=> "33117",
                "descripcion" => "Espirales tricolor",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/33117"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10301,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/2685899.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2685899-espirales-con-vegetales-eroski-paquete-500-g/",
                "descripcion" => "Espirales con vegetales",
                "link" => "https://supermercado.eroski.es/es/productdetail/2685899-espirales-con-vegetales-eroski-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10301,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/12bd63dd-1a7c-483b-b698-37f3ab3659d9/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "23570",
                "descripcion" => "Pasta espiral con espinacas y tomate",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pasta-espiral-con-espinacas-y-tomate-PRODUCTO-ALCAMPO-paquete-500-g/23570"
                    ]);

$p10302 = DB::table("productos")->where("name","Fideo cabellin")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/1f7e4b3e42b5c494e228c31b5bce6999.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "13577",
                "descripcion" => "Fideo cabello de ángel Hacendado",
                "link" => "https://tienda.mercadona.es/product/13577/fideo-cabello-angel-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/229799_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-544101818",
                "descripcion" => "Fideo cabellin",
                "link" => "https://www.carrefour.es/supermercado/fideo-cabellin-carrefour-500-g/R-544101818/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202301/20/00118003900851____2__600x600.jpg",
                "peso" => 750,
                "scrab_id"=> "0110118003900851",
                "descripcion" => "Fideo cabellin",
                "link" => "https://www.elcorteingles.es/supermercado/0110118003900851-el-corte-ingles-fideo-cabellin-paquete-750-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/515/515_ISO_0_ES.jpg?imwidth=392",
                "peso" => 500,
                "scrab_id"=> "515",
                "descripcion" => "Fideo cabellín Al Diante",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/515"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10302,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/361980_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/361980-fideo-cabellin-eroski-basic-paquete-500-g/",
                "descripcion" => "Fideo cabellin",
                "link" => "https://supermercado.eroski.es/es/productdetail/361980-fideo-cabellin-eroski-basic-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10302,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/67292295-a254-4dad-a0f6-e8577c7b87bb/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "16536",
                "descripcion" => "Pasta fideo cabellín",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pasta-fideo-cabell%C3%ADn-PRODUCTO-ALCAMPO-paquete-de-500-g/16536"
                    ]);

$p10303 = DB::table("productos")->where("name","Fideo entrefino")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/34008a9bb2eaf9536bd096f37f69ffaf.jpg?fit=crop&h=300&w=300",
                "peso" => 500,
                "scrab_id"=> "6256",
                "descripcion" => "Fideo mediano Hacendado",
                "link" => "https://tienda.mercadona.es/product/6256/fideo-mediano-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/229805_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-544101820",
                "descripcion" => "Fideo entrefino",
                "link" => "https://www.carrefour.es/supermercado/fideo-entrefino-carrefour-500-g/R-544101820/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201909/26/00118003900141____1__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118003900141",
                "descripcion" => "Fideo cabello",
                "link" => "https://www.elcorteingles.es/supermercado/0110118003900141-romero-fideo-cabello-paquete-500-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/50971/50971_ISO_0_ES.jpg?imwidth=392",
                "peso" => 500,
                "scrab_id"=> "50971",
                "descripcion" => "Fideo entrefino Al Diante",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/50971"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10303,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/14686679_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14686679-fideo-de-cabello-pastas-romero-paquete-500-g/",
                "descripcion" => "Fideo de cabello PASTAS ROMERO",
                "link" => "https://supermercado.eroski.es/es/productdetail/14686679-fideo-de-cabello-pastas-romero-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10303,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d0a2a2bd-192c-433c-935f-d47d572418bb/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "44700",
                "descripcion" => "Pasta fIdeos entrefino de calidad superior",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pasta-fIdeos-entrefino-de-calidad-superior-paquete-500-g/44700"
                    ]);

$p10304 = DB::table("productos")->where("name","Fideo grueso")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/5ca101e4562a8b697277a828d28b9932.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "6261",
                "descripcion" => "Fideo grueso Hacendado",
                "link" => "https://tienda.mercadona.es/product/6261/fideo-grueso-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/290665/290665_ISO_0_ES.jpg?imwidth=392",
                "peso" => 500,
                "scrab_id"=> "290665",
                "descripcion" => "Fideo grueso Al Diante",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/290665"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10304,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/2685840_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2685840-fideo-grueso-eroski-paquete-500-g/",
                "descripcion" => "Fideo grueso EROSKI",
                "link" => "https://supermercado.eroski.es/es/productdetail/2685840-fideo-grueso-eroski-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10304,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/e1386e49-af70-4a2b-a45c-a3262389bdcc/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "62498",
                "descripcion" => "Pasta fideos gordo PRODUCTO ALCAMPO",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pasta-fideos-gordo-PRODUCTO-ALCAMPO-paquete-de-500-g/62498"
                    ]);

$p10305 = DB::table("productos")->where("name","Macarron")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/170f66fe00800bca697c8e19838bd6ae.jpg?fit=crop&h=500&w=500",
                "peso" => 1000,
                "scrab_id"=> "6250",
                "descripcion" => "Macarrón Hacendado",
                "link" => "https://tienda.mercadona.es/product/6250/macarron-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/226607_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-544501833",
                "descripcion" => "Macarrones",
                "link" => "https://www.carrefour.es/supermercado/macarrones-carrefour-1-kg/R-544501833/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202301/20/00118003503374____2__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118003503374",
                "descripcion" => "Macarrones plumas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118003503374-el-corte-ingles-macarrones-plumas-paquete-1-kg/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/50973/50973_ISO_0_ES.jpg?imwidth=392",
                "peso" => 1000,
                "scrab_id"=> "50973",
                "descripcion" => "Macarrón Al Diante",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/50973"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10305,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/349183_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/349183-macarrones-eroski-basic-paquete-1-kg/",
                "descripcion" => "Macarrones EROSKI basic",
                "link" => "https://supermercado.eroski.es/es/productdetail/349183-macarrones-eroski-basic-paquete-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10305,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b07d93a7-8089-4d5a-8b0c-304a8d6398cd/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "27254",
                "descripcion" => "Pasta macarrón PRODUCTO ECONÓMICO ALCAMPO",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Pasta-macarr%C3%B3n-PRODUCTO-ECON%C3%93MICO-ALCAMPO-paquete-1-kg/27254"
                    ]);

$p10306 = DB::table("productos")->where("name","Espaguetti")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $mercadona,
                "img_url" =>"https://prod-mercadona.imgix.net/images/3a7e46ed332908a73cfe47f424e399c7.jpg?fit=crop&h=500&w=500",
                "peso" => 1000,
                "scrab_id"=> "6245",
                "descripcion" => "Spaghetti Hacendado",
                "link" => "https://tienda.mercadona.es/product/6245/spaghetti-hacendado-paquete"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/226608_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-544501835",
                "descripcion" => "Pasta espaguetis Carrefour",
                "link" => "https://www.carrefour.es/supermercado/pasta-espaguetis-carrefour-1-kg/R-544501835/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202301/20/00118003503366____2__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118003503366",
                "descripcion" => "Espaguetis",
                "link" => "https://www.elcorteingles.es/supermercado/0110118003503366-el-corte-ingles-espaguetis-paquete-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/52208/52208_ISO_0_ES.jpg?imwidth=392",
                "peso" => 1000,
                "scrab_id"=> "52208",
                "descripcion" => "Espagueti Al Diante",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/52208",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10306,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/70565.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/70565-spaguetti-eroski-basic-paquete-1-kg/",
                "descripcion" => "Spaguetti EROSKI basic",
                "link" => "https://supermercado.eroski.es/es/productdetail/70565-spaguetti-eroski-basic-paquete-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10306,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f74c5af8-081a-4f52-add8-300d0837d499/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "28148",
                "descripcion" => "Pasta espagueti",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Pasta-espagueti-PRODUCTO-ECON%C3%93MICO-ALCAMPO-paquete-1-kg/28148",
                    ]);


$p10307 = DB::table("productos")->where("name","Tallarin")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/0cebc9f6f588b43df4467fcd3bdb6e6b.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "6246",
                "descripcion" => "Pasta linguine Hacendado",
                "link" => "https://tienda.mercadona.es/product/6246/pasta-linguine-hacendado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/229698_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-521005661",
                "descripcion" => "Tallarines",
                "link" => "https://www.carrefour.es/supermercado/tallarines-carrefour-500-g/R-544101808/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/74729/74729_ISO_0_ES.jpg?imwidth=392",
                "peso" => 500,
                "scrab_id"=> "74729",
                "descripcion" => "Tallarines",
                "link" => "https://www.dia.es/arroz-pastas-y-legumbres/pastas/p/74729"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10307,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/367409.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/367409-tallarines-eroski-paquete-500-g/",
                "descripcion" => "Tallarines",
                "link" => "https://supermercado.eroski.es/es/productdetail/367409-tallarines-eroski-paquete-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10307,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/9bc04cba-07d0-4c69-befc-21acc004ed70/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "20565",
                "descripcion" => "Pasta tallarin",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pasta-tallar%C3%ADn-PRODUCTO-ALCAMPO-paquete-de-500-g/20565",
                    ]);

$p10401 = DB::table("productos")->where("name","Harina de trigo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/9e112e25decc6165336270a4ac1e78e7.jpg?fit=crop&h=500&w=500",
                "peso" => 1000,
                "scrab_id"=> "29100",
                "descripcion" => "Harina de trigo Hacendado",
                "link" => "https://tienda.mercadona.es/product/29100/harina-trigo-hacendado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/253575_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-253575",
                "descripcion" => "Harina de trigo Classic",
                "link" => "https://www.carrefour.es/supermercado/harina-de-trigo-classic-carrefour-1-kg/R-VC4AECOMM-253575/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202105/28/00118037901024____3__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118037901024",
                "descripcion" => "Harina de trigo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118037901024-el-corte-ingles-harina-de-trigo-paquete-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/505/505_ISO_0_ES.jpg?imwidth=392",
                "peso" => 1000,
                "scrab_id"=> "505",
                "descripcion" => "Harina de Trigo El Molino",
                "link" => "https://www.dia.es/panes-harinas-y-masas/harinas-y-levaduras/p/505",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10401,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/362442.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/362442-harina-de-trigo-eroski-basic-paquete-1-kg/",
                "descripcion" => "Harina de trigo BASIC",
                "link" => "https://supermercado.eroski.es/es/productdetail/362442-harina-de-trigo-eroski-basic-paquete-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10401,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ea25a47a-bd3e-4b90-8ae8-4a594c3e286d/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "10164",
                "descripcion" => "Harina de trigo candeal",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-harina-de-trigo-candeal-1-kg/10164",
                    ]);

$p10402 = DB::table("productos")->where("name","Harina de maiz")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/32337176dea9d1ac6e0f9c2bed944d03.jpg?fit=crop&h=500&w=500",
                "peso" => 1000,
                "scrab_id"=> "29165",
                "descripcion" => "Harina de maíz blanco precocida",
                "link" => "https://tienda.mercadona.es/product/29165/harina-maiz-blanco-precocida-hacendado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/071845_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-prod1000012",
                "descripcion" => "Harina de maíz precocida Goya",
                "link" => "https://www.carrefour.es/supermercado/harina-de-maiz-precocida-goya-sin-gluten-1-kg/R-prod1000012/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/26/00118010200014____2__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118038300010",
                "descripcion" => "Harina de maíz blanca precocida PAN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118038300010-pan-harina-de-maiz-blanca-precocida-sin-gluten-paquete-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/161360/161360_ISO_0_ES.jpg?imwidth=392",
                "peso" => 1000,
                "scrab_id"=> "161360",
                "descripcion" => "Harina de maíz blanca precocida PAN",
                "link" => "https://www.dia.es/panes-harinas-y-masas/harinas-y-levaduras/p/161360",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10402,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/2570935_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2570935-harina-de-maiz-pan-paquete-1-kg/",
                "descripcion" => "Harina de maíz blanca precocida PAN",
                "link" => "https://supermercado.eroski.es/es/productdetail/2570935-harina-de-maiz-pan-paquete-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10402,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/6daef8d4-62a6-447c-a6b6-988c55d32394/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "10598",
                "descripcion" => "Harina de maíz blanca precocida PAN",
                "link" => "https://www.compraonline.alcampo.es/products/p-a-n-harina-de-ma%C3%ADz-blanco-recocida-1-kg/10598",
                    ]);

$p20101 = DB::table("productos")->where("name","Solomillo de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/8091cfafbc33e448c2158ebfa31fce50.jpg?fit=crop&h=500&w=500",
                "peso" => 300,
                "scrab_id"=> "2804",
                "descripcion" => "Solomillo de vacuno añojo para plancha",
                "link" => "https://tienda.mercadona.es/product/2804/solomillo-vacuno-anojo-plancha-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/955734_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod63772",
                "descripcion" => "Medallón de solomillo de vacuno",
                "link" => "https://www.carrefour.es/supermercado/medallon-de-solomillo-de-vacuno-500-g-aprox/R-prod63772/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202104/05/00118425000793____2__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118425000793",
                "descripcion" => "Solomillo de ternera 4 unidades",
                "link" => "https://www.elcorteingles.es/supermercado/0110118425000793-solomillo-de-ternera-4-unidades-peso-aproximado-bandeja-500-g/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20101,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/10425106_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14803498-solomillo-ternera-euskal-okela-enatur-al-corte-compra-minima-500-g/",
                "descripcion" => "Solomillo de Ternera Gallega",
                "link" => "https://supermercado.eroski.es/es/productdetail/14803498-solomillo-ternera-euskal-okela-enatur-al-corte-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20101,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/32cf2d26-7b56-487b-8389-d133e6b69350/1280x1280.png",
                "peso" => 350,
                "scrab_id"=> "80047",
                "descripcion" => "Medallones de solomillo de vaca",
                "link" => "https://www.compraonline.alcampo.es/products/Medallones-de-solomillo-de-vaca/80047",
                    ]);

$p20102 = DB::table("productos")->where("name","Chuletón de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/6a4594e1266bcdbc1895092a1788bdcd.jpg?fit=crop&h=500&w=500",
                "peso" => 550,
                "scrab_id"=> "2155",
                "descripcion" => "Chuletón de vacuno añojo",
                "link" => "https://tienda.mercadona.es/product/2155/chuleton-vacuno-anojo-barbacoa-plancha-bandeja",
                ]);
            // DB::table("supermercadoproductos")->insert([
            //     "producto_id"=> $p20102,
            //     "supermercado_id"=> $carrefour,
            //     "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/855336_00_1.jpg",
            //     "peso" => 600,
            //     "scrab_id"=> "R-VC4AECOMM-133775",
            //     "descripcion" => "Chuletón de Vacuno",
            //     "link" => "https://www.carrefour.es/supermercado/chuleton-de-vacuno-carrefour-el-mercado-600-g-aprox/R-VC4AECOMM-133775/p"
            //     ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20102,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/855336_00_1.jpg",
                    "peso" => 1000,
                    "scrab_id"=> "R-prod840189",
                    "descripcion" => "Chuletón de Vacuno",
                    "link" => "https://www.carrefour.es/supermercado/chuleton-de-anojo-calidad-y-origen-carrefour-1-kg-aprox/R-prod840189/p"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202306/20/00118425500982____9__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118425500982",
                "descripcion" => "Chuletón de añojo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118425500982-chuleton-de-anojo/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20102,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16810848_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810848-chuleta-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/",
                "descripcion" => "Chuleta deshu. Ternera E. OKELA",
                "link" => "https://supermercado.eroski.es/es/productdetail/16810848-chuleta-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20102,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/530a57b8-e34c-4476-b863-3c254ab24919/1280x1280.png",
                "peso" => 600,
                "scrab_id"=> "65372",
                "descripcion" => "Chuletón de vaca madurado durante más de 21 días",
                "link" => "https://www.compraonline.alcampo.es/products/chulet%C3%B3n-de-vaca-madurado-durante-m%C3%A1s-de-21-d%C3%ADas/69244",
                    ]);

$p20103 = DB::table("productos")->where("name","Entrecot de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/83aa458a7e3a65aa3de8b22600a7654d.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "3461",
                "descripcion" => "Entrecot de vacuno añojo fino",
                "link" => "https://tienda.mercadona.es/product/3461/entrecot-vacuno-anojo-fino-barbacoa-plancha-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/842661_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod840026",
                "descripcion" => "Entrecot de añojo Calidad y Origen Carrefour",
                "link" => "https://www.carrefour.es/supermercado/entrecot-lomo-de-anojo-calidad-y-origen-carrefour-500-g-aprox/R-prod840026/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA02/CONTENIDOS/201410/16/00118425500123____1__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118425500123",
                "descripcion" => "Entrecot de lomo bajo de añojo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118425500123-entrecot-de-lomo-bajo-de-anojo/"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/276321/276321_FRO_0_ES.jpg?imwidth=392",
                "peso" => 420,
                "scrab_id"=> "276321",
                "descripcion" => "Entrecot de lomo bajo de vacuno",
                "link" => "https://www.dia.es/carniceria/vacuno/p/276321",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20103,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/10425080_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10425080-entrecot-de-ternera-gallega-al-corte-compra-minima-500-g/",
                "descripcion" => "Entrecot de Ternera Gallega",
                "link" => "https://supermercado.eroski.es/es/productdetail/10425080-entrecot-de-ternera-gallega-al-corte-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20103,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d036f7d3-36ce-4c85-9d4b-1049b076f028/1280x1280.png",
                "peso" => 500,
                "scrab_id"=> "80063",
                "descripcion" => "Entrecot de lomo de vaca",
                "link" => "https://www.compraonline.alcampo.es/products/Entrecot-de-lomo-de-vaca-ideal-plancha-o-barbacoa/80063"
                    ]);

$p20104 = DB::table("productos")->where("name","Tacos para estofado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/d7b9aec1221d13b9bd3787fe734a5b27.jpg?fit=crop&h=500&w=500",
                "peso" => 600,
                "scrab_id"=> "2807",
                "descripcion" => "Tacos de vacuno añojo para guisar",
                "link" => "https://tienda.mercadona.es/product/2807/tacos-vacuno-anojo-guisar-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/842673_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod840073",
                "descripcion" => "Estofado de añojo ",
                "link" => "https://www.carrefour.es/supermercado/estofado-de-anojo-calidad-y-origen-carrefour-500-g-aprox/R-prod840073/p"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202104/05/00118425000819____2__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118425000819",
                "descripcion" => "Carne magra troceada/ragout para guisar de ternera",
                "link" => "https://www.elcorteingles.es/supermercado/0110118425000819-carne-magra-troceadaragout-para-guisar-de-ternera-peso-aproximado-bandeja-500-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/276318/276318_FRO_0_ES.jpg?imwidth=392",
                "peso" => 450,
                "scrab_id"=> "276318",
                "descripcion" => "Ternera en tacos añojo",
                "link" => "https://www.dia.es/carniceria/vacuno/p/276318",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20104,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16810970_x.jpg",
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810970-estofado-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/",
                "descripcion" => "Estofado de Ternera EUSKAL OKELA",
                "link" => "https://supermercado.eroski.es/es/productdetail/16810970-estofado-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20104,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8677acc7-c6cd-4401-836b-3d2d8c0dab78/1280x1280.png",
                "peso" => 450,
                "scrab_id"=> "76349",
                "descripcion" => "Estofado 2ª Vacuno",
                "link" => "https://www.compraonline.alcampo.es/products/Estofado-2%C2%AA-Vacuno-IGP-indicaci%C3%B3n-geogr%C3%A1fica-protegida-Carne-de-la-Sierra-de-Guadarrama/76349",
                    ]);

$p20105 = DB::table("productos")->where("name","Filetes de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/5791ccf2da32b83cd282480fd0dc895d.jpg?fit=crop&h=500&w=500",
                "peso" => 500,
                "scrab_id"=> "2900",
                "descripcion" => "Filetes de vacuno añojo para plancha",
                "link" => "https://tienda.mercadona.es/product/2900/filetes-vacuno-anojo-plancha-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/126665_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod1070083",
                "descripcion" => "Filetes de añojo",
                "link" => "https://www.carrefour.es/supermercado/filetes-de-anojo-calidad-y-origen-carrefour-500-g-aprox/R-prod1070083/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202103/05/00118425501204____5__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118425501204",
                "descripcion" => "Filetes de 1ª A de añojo para plancha",
                "link" => "https://www.elcorteingles.es/supermercado/0110118425501204-filetes-de-1-a-de-anojo-para-plancha-4-unidades-peso-aproximado-bandeja-500-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/181288/181288_FRO_0_ES.jpg?imwidth=392",
                "peso" => 400,
                "scrab_id"=> "181288",
                "descripcion" => "Filete 1ºa de ternera",
                "link" => "https://www.dia.es/carniceria/vacuno/p/181288",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20105,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16810913_x.jpg",
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810913-filete-de-ternera-1a-euskal-okela-eroski-natur-bandeja-aprox-600-g/",
                "descripcion" => "Filete de Ternera 1a. Euskal Okela",
                "link"=> "https://supermercado.eroski.es/es/productdetail/16810913-filete-de-ternera-1a-euskal-okela-eroski-natur-bandeja-aprox-600-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20105,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5223492f-095f-404b-ae88-fb9344b13748/1280x1280.png",
                "peso" => 500,
                "scrab_id"=> "78424",
                "descripcion" => "Filetes de ternera de 1ª A",
                "link" => "https://www.compraonline.alcampo.es/products/Filetes-de-ternera-de-1%C2%AA-A-especiales-para-empanar-o-salsa/78424",
                    ]);

$p20201 = DB::table("productos")->where("name","Chuletas de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/06ede84c79179c13d4cc8a466a072544.jpg?fit=crop&h=500&w=500",
                "peso" => 480,
                "scrab_id"=> "4901",
                "descripcion" => "Chuletas lomo de cerdo",
                "link" => "https://tienda.mercadona.es/product/4901/chuletas-lomo-cerdo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/778413_00_1.jpg",
                "peso" => 400,
                "scrab_id"=> "R-prod130307",
                "descripcion" => "Chuleta de Lomo de Cerdo",
                "link" => "https://www.carrefour.es/supermercado/chuleta-de-lomo-de-cerdo-carrrefour-400-g-aprox/R-prod130307/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA02/CONTENIDOS/201410/22/00118434100287____1__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118434100287",
                "descripcion" => "Chuleta de lomo extra de cerdo 50% Duroc",
                "link" => "https://www.elcorteingles.es/supermercado/0110118434100287-chuleta-de-lomo-extra-de-cerdo-50-duroc/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/290992/290992_FRO_0_ES.jpg?imwidth=392",
                "peso" => 600,
                "scrab_id"=> "290992",
                "descripcion" => "Chuleta de lomo de cerdo",
                "link" => "https://www.dia.es/carniceria/cerdo/p/290992",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20201,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/17771064_x.jpg",
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17771064-chuleta-de-lomo-de-cerdo-eroski-natur-duroc-4-5-und-bja-450-g/",
                "descripcion" => "Chuleta de lomo de cerdo",
                "link"=> "https://supermercado.eroski.es/es/productdetail/17771064-chuleta-de-lomo-de-cerdo-eroski-natur-duroc-4-5-und-bja-450-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20201,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a2627572-cf2a-452d-8ff1-1078c22d7b32/1280x1280.png",
                "peso" => 650,
                "scrab_id"=> "76512",
                "descripcion" => "Chuletas de centro de cerdo blanco",
                "link" => "https://www.compraonline.alcampo.es/products/Chuletas-de-centro-de-cerdo-blanco/76512",
                    ]);

$p20202 = DB::table("productos")->where("name","Pieza de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/920f61cb18299014d3c716761c0449e2.jpg?fit=crop&h=500&w=500",
                "peso" => 800,
                "scrab_id"=> "4590",
                "descripcion" => "Lomo de cerdo trozo",
                "link" => "https://tienda.mercadona.es/product/4590/lomo-cerdo-trozo-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/073066_00_2.jpg",
                "peso" => 1200,
                "scrab_id"=> "R-684403414",
                "descripcion" => "Trozo de lomo de cerdo",
                "link" => "https://www.carrefour.es/supermercado/trozo-de-lomo-de-cerdo-carrefour-12-kg-aprox/R-684403414/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202206/10/00118430509812____6__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118430509812",
                "descripcion" => "Lomo fresco de cerdo La Montañera",
                "link" => "https://www.elcorteingles.es/supermercado/0110118430509812-la-montanera-lomo-fresco-de-cerdo-formato-ahorro-peso-aproximado-pieza-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/46810/46810_ISO_0_ES.jpg?imwidth=392",
                "peso" => 850,
                "scrab_id"=> "46810",
                "descripcion" => "Cinta de lomo de cerdo en trozo",
                "link" => "https://www.dia.es/carniceria/cerdo/p/46810",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20202,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/6833388_x.jpg",
                "peso" => 1200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6833388-lomo-de-cerdo-trozo-eroski-bandeja-aprox-12-kg/",
                "descripcion" => "Lomo de cerdo trozo",
                "link"=> "https://supermercado.eroski.es/es/productdetail/6833388-lomo-de-cerdo-trozo-eroski-bandeja-aprox-12-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20202,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5c822a09-dac9-4214-ba32-bd476b62e0cc/1280x1280.png",
                "peso" => 1000,
                "scrab_id"=> "77640",
                "descripcion" => "Trozo de cinta de lomo",
                "link" => "https://www.compraonline.alcampo.es/products/Trozo-de-cinta-de-lomo-envasado-al-vacio/77640",
                    ]);

$p20203 = DB::table("productos")->where("name","Filetes cinta de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/0eb228ae936174bf1ce148b2bcb89b98.jpg?fit=crop&h=500&w=500",
                "peso" => 400,
                "scrab_id"=> "2714",
                "descripcion" => "Filetes de lomo de cerdo",
                "link" => "https://tienda.mercadona.es/product/2714/filetes-lomo-cerdo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/009725_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-009725",
                "descripcion" => "Cinta de Lomo de Cerdo",
                "link" => "https://www.carrefour.es/supermercado/cinta-de-lomo-de-cerdo-carrefour-500-g-aprox/R-VC4AECOMM-009725/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201703/15/00118434100030____3__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118434100030",
                "descripcion" => "Lomo fresco extra de cerdo 50% Duroc",
                "link" => "https://www.elcorteingles.es/supermercado/0110118434100030-lomo-fresco-extra-de-cerdo-50-duroc/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/166223/166223_FRO_0_ES.jpg?imwidth=392",
                "peso" => 300,
                "scrab_id"=> "166223",
                "descripcion" => "Filete de cinta de lomo tierno",
                "link" => "https://www.dia.es/carniceria/cerdo/p/166223",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20203,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/10473783_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10473783-filete-de-lomo-de-cerdo-al-corte-compra-minima-500-g/",
                "descripcion" => "Filete de lomo de cerdo",
                "link" => "https://supermercado.eroski.es/es/productdetail/10473783-filete-de-lomo-de-cerdo-al-corte-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20203,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/059ef2b4-c600-4692-8ee3-ce449a3982fa/1280x1280.png",
                "peso" => 800,
                "scrab_id"=> "70394",
                "descripcion" => "Filetes de cinta de lomo",
                "link" => "https://www.compraonline.alcampo.es/products/Filetes-de-cinta-de-lomo-extra/70394",
                    ]);

$p20204 = DB::table("productos")->where("name","Solomillo de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/0d2dd51b8c57a31da23418d87118dbc2.jpg?fit=crop&h=500&w=500",
                    "peso" => 500,
                    "scrab_id"=> "4570",
                    "descripcion" => "Solomillo de cerdo",
                    "link" => "https://tienda.mercadona.es/product/4570/solomillo-cerdo-paquete",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_350x_/img_pim_food/518437_00_1.jpg",
                    "peso" => 1200,
                    "scrab_id"=> "R-VC4AECOMM-518437",
                    "descripcion" => "Solomillo de cerdo",
                    "link" => "https://www.carrefour.es/supermercado/solomillo-de-cerdo-carrefour-12-kg-aprox/R-VC4AECOMM-518437/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/CONTENIDOS/201410/28/00118434100295____5__600x600.jpg",
                    "peso" => 500,
                    "scrab_id"=> "0110118434100295",
                    "descripcion" => "https://sgfm.elcorteingles.es/SGFM/dctm/CONTENIDOS/201410/28/00118434100295____5__600x600.jpg",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118434100295-solomillo-fresco-de-cerdo-cruce-raza-duroc-peso-aproximado-500-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/11077/11077_ISO_0_ES.jpg?imwidth=392",
                    "peso" => 450,
                    "scrab_id"=> "11077",
                    "descripcion" => "Solomillo de cerdo",
                    "link" => "https://www.dia.es/carniceria/cerdo/p/11077",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20204,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/2946119_x.jpg",
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2946119-solomillo-de-cerdo-al-vacio-eroski-sobre-aprox-500-g/",
                    "descripcion" => "Solomillo de cerdo al vacío EROSKI",
                    "link"=> "https://supermercado.eroski.es/es/productdetail/2946119-solomillo-de-cerdo-al-vacio-eroski-sobre-aprox-500-g/",
                ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20204,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3034f28a-decd-457d-866d-e2e4db2d16b5/1280x1280.png",
                    "peso" => 800,
                    "scrab_id"=> "79843",
                    "descripcion" => "Solomillo de cerdo envasado al vacio",
                    "link" => "https://www.compraonline.alcampo.es/products/Solomillo-de-cerdo-envasado-al-vacio/79843",
                        ]);

$p20205 = DB::table("productos")->where("name","Costillas de cerdo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/c4ecbe4abd56447ca281f52b6fc305ca.jpg?fit=crop&h=500&w=500",
                "peso" => 530,
                "scrab_id"=> "2811",
                "descripcion" => "Costillas de cerdo carnosas a tacos",
                "link" => "https://tienda.mercadona.es/product/2811/costillas-cerdo-carnosas-tacos-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/001426_00_2.jpg",
                "peso" => 700,
                "scrab_id"=> "R-VC4AECOMM-001426",
                "descripcion" => "Costilla de Cerdo Semicarnuda",
                "link" => "https://www.carrefour.es/supermercado/costilla-de-cerdo-semicarnuda-carrefour-700-g-aprox/R-VC4AECOMM-006822/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201604/28/00118434101129____2__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118434101129",
                "descripcion" => "Costillas frescas carnudas de cerdo 50% Duroc",
                "link" => "https://www.elcorteingles.es/supermercado/0110118434101129-costillas-frescas-carnudas-de-cerdo-50-duroc/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/291164/291164_FRO_0_ES.jpg?imwidth=392",
                "peso" => 450,
                "scrab_id"=> "291164",
                "descripcion" => "Costillas troceadas de cerdo",
                "link" => "https://www.dia.es/carniceria/cerdo/p/291164",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20205,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/17771502_x.jpg",
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17771502-costilla-troceada-de-cerdo-eroski-bandeja-450-g/",
                "descripcion" => "Costilla troceada de cerdo EROSKI",
                "link"=> "https://supermercado.eroski.es/es/productdetail/17771502-costilla-troceada-de-cerdo-eroski-bandeja-450-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20205,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d757f7e3-da55-4cea-8f17-fc1808d48379/1280x1280.png",
                "peso" => 500,
                "scrab_id"=> "76420",
                "descripcion" => "Costillas, en palos",
                "link" => "https://www.compraonline.alcampo.es/products/alcampo-cultivamos-lo-bueno-costillas-en-palos-de-cerdo-raza-duroc/76420",
                    ]);

$p20206 = DB::table("productos")->where("name","Filetes de jamon")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $mercadona,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/145280_00_1.jpg",
                "peso" => 400,
                "scrab_id"=> "R-prod410728",
                "descripcion" => "Filete de jamón de cerdo",
                "link" => "https://www.carrefour.es/supermercado/filete-de-jamon-de-cerdo-400-g-aprox/R-prod410728/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA02/CONTENIDOS/201410/22/00118434100261____1__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118434100261",
                "descripcion" => "Jamón de cerdo 50% Duroc",
                "link" => "https://www.elcorteingles.es/supermercado/0110118434100261-jamon-de-cerdo-50-duroc/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20206,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/10473825_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10473825-filete-de-aguja-de-cerdo-al-corte-compra-minima-500-g/",
                "descripcion" => "Filete de aguja de cerdo",
                "link" => "https://supermercado.eroski.es/es/productdetail/10473825-filete-de-aguja-de-cerdo-al-corte-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20206,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b452da0f-b908-4c72-8e86-f75e8173a142/1280x1280.png",
                "peso" => 500,
                "scrab_id"=> "76530",
                "descripcion" => "Filetes de jamón de cerdo",
                "link" => "https://www.compraonline.alcampo.es/products/Filetes-de-jam%C3%B3n-de-cerdo-ideales-para-freir/76530",
                    ]);

$p20301 = DB::table("productos")->where("name","Chuletas de cordero")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/3079bf2321fc5f198f49ddc6ef0d8217.jpg?fit=crop&h=500&w=500",
            "peso" => 800,
            "scrab_id"=> "3598",
            "descripcion" => "Chuletas de cordero mixtas",
            "link" => "https://tienda.mercadona.es/product/3598/chuletas-cordero-mixtas-bandeja",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/625984_00_1.jpg",
            "peso" => 400,
            "scrab_id"=> "R-VC4AECOMM-625984",
            "descripcion" => "Chuletas de Cordero MAMA CORDERO",
            "link" => "https://www.carrefour.es/supermercado/chuletas-de-cordero-mama-cordero-045-kg-065-kg/R-VC4AECOMM-625984/p",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $eci,
            "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA02/CONTENIDOS/201410/22/00118428100111____1__600x600.jpg",
            "peso" => 1000,
            "scrab_id"=> "0110118428100111",
            "descripcion" => "Chuletas de cordero lechal",
            "link" => "https://www.elcorteingles.es/supermercado/0110118428100111-chuletas-de-cordero-lechal/",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $dia,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20301,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/7051352_x.jpg",
            "peso" => 500,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5018221-chuletillas-de-cordero-eroski-bandeja-aprox-500-g/",
            "descripcion" => "Chuletillas de cordero",
            "link" => "https://supermercado.eroski.es/es/productdetail/5018221-chuletillas-de-cordero-eroski-bandeja-aprox-500-g/",
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20301,
            "supermercado_id"=> $alcampo,
            "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/00e51043-4664-49ad-bfc9-31bdbfb8e179/1280x1280.png",
            "peso" => 700,
            "scrab_id"=> "75357",
            "descripcion" => "Chuletas de calidad extra de palo de cordero",
            "link" => "https://www.compraonline.alcampo.es/products/Chuletas-de-calidad-extra-de-palo-de-cordero/75357",
                ]);

$p20302 = DB::table("productos")->where("name","Paletilla de cordero")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $mercadona,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            // DB::table("supermercadoproductos")->insert([
            //     "producto_id"=> $p20302,
            //     "supermercado_id"=> $carrefour,
            //     "img_url" => NULL,
            //     "peso" => 650,
            //     "scrab_id"=> "R-fprod1460343",
            //     "descripcion" => "Pierna de cordero lechal",
            //     "link" => "https://www.carrefour.es/supermercado/pierna-de-cordero-lechal-el-mercado-650-g-aprox/R-fprod1460343/p",
            //     ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/397510_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-fprod1460309",
                "descripcion" => "Pierna de cordero lechal",
                "link" => "https://www.carrefour.es/supermercado/paletilla-de-cordero-lechal-el-mercado-500-g-aprox/R-fprod1460309/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202311/13/00118486100029____10__1200x1200.jpg",
                "peso" => 400,
                "scrab_id"=> "0110118486100029",
                "descripcion" => "Paletilla de cordero lechal",
                "link" => "https://www.elcorteingles.es/supermercado/0110118486100029-paletilla-de-cordero-lechal-envasada-al-vacio-pieza-400-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20302,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/8746687_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8746687-paletilla-de-cordero-ternasco-de-aragon-enatur-bandeja-aprox-1-kg/",
                "descripcion" => "Paletilla de cordero Ternasco de Aragón",
                "link" => "https://supermercado.eroski.es/es/productdetail/8746687-paletilla-de-cordero-ternasco-de-aragon-enatur-bandeja-aprox-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20302,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/410743c2-a1b2-4363-ab0e-fd947307d1ce/1280x1280.png",
                "peso" => 1100,
                "scrab_id"=> "70556",
                "descripcion" => "Paletilla entera de cordero",
                "link" => "https://www.compraonline.alcampo.es/products/Paletilla-entera-de-cordero/70556"
                    ]);

$p20401 = DB::table("productos")->where("name","Traseros de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/eaa3c29678776870d3ec1fc7260d59cf.jpg?fit=crop&h=500&w=500",
                "peso" => 800,
                "scrab_id"=> "3727",
                "descripcion" => "Cuartos traseros de pollo",
                "link" => "https://tienda.mercadona.es/product/3727/cuartos-traseros-pollo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/961472_00_2.jpg",
                "peso" => 1500,
                "scrab_id"=> "R-827513085",
                "descripcion" => "Trasero de Pollo",
                "link" => "https://www.carrefour.es/supermercado/trasero-de-pollo-carrefour-12-kg-aprox/R-827513085/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511522____4__1200x1200.jpg",
                "peso" => 1100,
                "scrab_id"=> "0110118460511522",
                "descripcion" => "Traseros de pollo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511522-traseros-de-pollo-formato-ahorro-peso-aproximado-bandeja-11-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/261369/261369_FRO_0_ES.jpg?imwidth=392",
                "peso" => 1200,
                "scrab_id"=> "261369",
                "descripcion" => "Traseros de pollo EROSKI",
                "link" => "https://www.dia.es/carniceria/pollo/p/261369",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20401,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/9805706_x.jpg",
                "peso" => 1200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9805706-traseros-de-pollo-eroski-bandeja-al-peso-aprox-12-kg/",
                "descripcion" => "Traseros de pollo EROSKI",
                "link" => "https://supermercado.eroski.es/es/productdetail/9805706-traseros-de-pollo-eroski-bandeja-al-peso-aprox-12-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20401,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/fcc4a3a6-3de7-413c-94e0-39aefe7df82c/1280x1280.webp",
                "peso" => 1200,
                "scrab_id"=> "81646",
                "descripcion" => "Cuarto trasero de pollo",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-cuarto-trasero-de-pollo-auchan-2-uds-bandeja/23754",
                    ]);

$p20402 = DB::table("productos")->where("name","Muslo y contramuslo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/85570dbc38c395944f63aee3d4067320.jpg?fit=crop&h=500&w=500",
                "peso" => 900,
                "scrab_id"=> "2777",
                "descripcion" => "Contramuslos de pollo sin piel",
                "link" => "https://tienda.mercadona.es/product/2777/contramuslos-pollo-sin-piel-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511449____4__1200x1200.jpg",
                "peso" => 750,
                "scrab_id"=> "0110118460511449",
                "descripcion" => "Contramuslos de pollo sin piel",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511449-contramuslos-de-pollo-sin-piel-peso-aproximado-bandeja-750-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20402,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/20971073_x.jpg",
                "peso" => 1100,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20971073-contramuslos-de-pollo-con-piel-eroski-bandeja-peso-aprox-11-kg/",
                "descripcion" => "Contramuslos de pollo sin piel",
                "link" => "https://supermercado.eroski.es/es/productdetail/20971073-contramuslos-de-pollo-con-piel-eroski-bandeja-peso-aprox-11-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20402,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8ea40321-4acd-4602-875a-487cdacb5011/1280x1280.webp",
                "peso" => 600,
                "scrab_id"=> "23752",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-contramuslos-de-pollo-sin-piel-4-uds/23752",
                "descripcion" => "Contramuslos de pollo",
                    ]);

$p20403 = DB::table("productos")->where("name","Muslitos de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/7a7bd515f3c3466a5a13d8ea102dda3f.jpg?fit=crop&h=500&w=500",
                "peso" => 920,
                "scrab_id"=> "2778",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://tienda.mercadona.es/product/2778/jamoncitos-pollo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/962349_00_2.jpg",
                "peso" => 1200,
                "scrab_id"=> "R-830700192",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://www.carrefour.es/supermercado/jamoncitos-de-pollo-carrefour-1-kg-aprox/R-830700192/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511415____4__600x600.jpg",
                "peso" => 750,
                "scrab_id"=> "0110118460511415",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511415-jamoncitos-de-pollo-peso-aproximado-bandeja-750-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/4211/4211_FRO_0_ES.jpg?imwidth=392",
                "peso" => 800,
                "scrab_id"=> "4211",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://www.dia.es/carniceria/pollo/p/4211",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20403,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/20971040_x.jpg",
                "peso" => 950,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20971040-jamoncitos-de-pollo-eroski-6-9-uds-bandeja-peso-aprox-950-g/",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://supermercado.eroski.es/es/productdetail/20971040-jamoncitos-de-pollo-eroski-6-9-uds-bandeja-peso-aprox-950-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20403,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/6efacebf-7773-4e81-887c-278549b459c3/1280x1280.webp",
                "peso" => 900,
                "scrab_id"=> "23807",
                "descripcion" => "Jamoncitos de pollo",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-jamoncitos-de-pollo-6-uds/23807",
                    ]);

$p20404 = DB::table("productos")->where("name","Pechuga fileteada de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/a35cc1a72acc4fd738740a243cba0e86.jpg?fit=crop&h=500&w=500",
                "peso" => 650,
                "scrab_id"=> "2787",
                "descripcion" => "Filetes pechuga de pollo",
                "link" => "https://tienda.mercadona.es/product/2787/filetes-pechuga-pollo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/887244_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-791562919",
                "descripcion" => "Pechuga de pollo certificado en filetes",
                "link" => "https://www.carrefour.es/supermercado/pechuga-de-pollo-certificado-en-filetes-carrefour-500-g-aprox/R-791562919/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511373____4__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118460511373",
                "descripcion" => "Filetes de pechuga de pollo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511373-filetes-de-pechuga-de-pollo-peso-aproximado-bandeja-500-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/21977/21977_FRO_0_ES.jpg?imwidth=392",
                "peso" => 450,
                "scrab_id"=> "21977",
                "descripcion" => "Filetes de pechuga de pollo",
                "link" => "https://www.dia.es/carniceria/pollo/p/21977",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20404,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/9202094_x.jpg",
                "peso" => 520,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9202094-pechuga-fileteada-extrafina-pollo-eroski-bandeja-al-peso-aprox-520-g/",
                "descripcion" => "Pechuga fileteada extrafina de pollo",
                "link" => "https://supermercado.eroski.es/es/productdetail/9202094-pechuga-fileteada-extrafina-pollo-eroski-bandeja-al-peso-aprox-520-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20404,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/7eda46ed-eb3d-40a0-b4e3-02761cfda64b/1280x1280.webp",
                "peso" => 500,
                "scrab_id"=> "24024",
                "descripcion" => "Pechuga de pollo filete",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-pechuga-de-pollo-filete/24024",
                    ]);

$p20405 = DB::table("productos")->where("name","Alitas de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/65de612a8e3f07a87cab79a28c02f9d7.jpg?fit=crop&h=500&w=500",
                "peso" => 600,
                "scrab_id"=> "2785",
                "descripcion" => "Alitas partidas de pollo",
                "link" => "https://tienda.mercadona.es/product/2785/alas-partidas-pollo-bandeja"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/711596_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-525964728",
                "descripcion" => "Alitas partidas de pollo",
                "link" => "https://www.carrefour.es/supermercado/alas-partidas-de-pollo-carrefour-el-mercado-500-g-aprox/R-525964728/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511480____4__1200x1200.jpg",
                "peso" => 600,
                "scrab_id"=> "0110118460511480",
                "descripcion" => "Alitas partidas de pollo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511480-alas-partidas-de-pollo-peso-aproximado-bandeja-600-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/261367/261367_FRO_0_ES.jpg?imwidth=392",
                "peso" => 600,
                "scrab_id"=> "261367",
                "descripcion" => "Alitas partidas de pollo",
                "link" => "https://www.dia.es/carniceria/pollo/p/261367",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20405,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/22307342_x.jpg",
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/22307342-alas-de-pollo-partidas-eroski-bandeja-aprox-600-g/",
                "descripcion" => "Alas de pollo partidas",
                "link" => "https://supermercado.eroski.es/es/productdetail/22307342-alas-de-pollo-partidas-eroski-bandeja-aprox-600-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20405,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/9712cb02-74ed-466c-b3ef-028e802592c1/1280x1280.webp",
                "peso" => 700,
                "scrab_id"=> "23716",
                "descripcion" => "Alita blanqueta partida de pollo",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-alita-blanqueta-partida-de-pollo/23716",
                    ]);

$p20406 = DB::table("productos")->where("name","Pechuga entera de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/819dd8a92eab64ef1ab3dce580b9e6c8.jpg?fit=crop&h=500&w=500",
                "peso" => 1200,
                "scrab_id"=> "3682",
                "descripcion" => "Pechugas enteras de pollo",
                "link" => "https://tienda.mercadona.es/product/3682/pechugas-enteras-pollo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/961474_00_2.jpg",
                "peso" => 1200,
                "scrab_id"=> "R-827513087",
                "descripcion" => "Pechuga de pollo",
                "link" => "https://www.carrefour.es/supermercado/pechuga-de-pollo-carrefour-12-kg-aprox/R-827513087/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202309/14/00118460511365____4__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118460511365",
                "descripcion" => "Pechuga de pollo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511365-pechuga-de-pollo-formato-ahorro-peso-aproximado-bandeja-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/261371/261371_FRO_0_ES.jpg?imwidth=392",
                "peso" => 1000,
                "scrab_id"=> "261371",
                "descripcion" => "Pechuga de pollo entera",
                "link" => "https://www.dia.es/carniceria/pollo/p/261371",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20406,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/9805201_x.jpg",
                "peso" => 1500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9805201-pechuga-enteras-de-pollo-eroski-4-7-uds-bandeja-aprox-15-kg/",
                "descripcion" => "Pechuga enteras de pollo",
                "link" => "https://supermercado.eroski.es/es/productdetail/9805201-pechuga-enteras-de-pollo-eroski-4-7-uds-bandeja-aprox-15-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20406,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8e113598-6350-495a-b042-9f6355ad0737/1280x1280.webp",
                "peso" => 800,
                "scrab_id"=> "23852",
                "descripcion" => "Pechuga de pollo Auchan",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-pechuga-de-pollo-auchan-3-uds/23852",
                    ]);

$p20407 = DB::table("productos")->where("name","Pollo entero limpio")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/c2c349ccbe84eacc6c9ac3d09c9e2255.jpg?fit=crop&h=500&w=500",
                "peso" => 1900,
                "scrab_id"=> "2781",
                "descripcion" => "Pollo entero",
                "link" => "https://tienda.mercadona.es/product/2781/pollo-entero-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/887242_00_2.jpg",
                "peso" => 2000,
                "scrab_id"=> "R-791562917",
                "descripcion" => "Pollo certificado limpio",
                "link" => "https://www.carrefour.es/supermercado/pollo-certificado-limpio-carrefour-2-kg/R-791562917/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202302/28/00118460511332____2__1200x1200.jpg",
                "peso" => 1700,
                "scrab_id"=> "0110118460511332",
                "descripcion" => "Pollo entero limpio",
                "link" => "https://www.elcorteingles.es/supermercado/0110118460511332-pollo-entero-limpio-para-asar-peso-aproximado-bandeja-17-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/6423/6423_FRO_0_ES.jpg?imwidth=392",
                "peso" => 1900,
                "scrab_id"=> "6423",
                "descripcion" => "Pollo entero limpio",
                "link" => "https://www.dia.es/carniceria/pollo/p/6423",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20407,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/9204066_x.jpg",
                "peso" => 2000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9204066-pollo-limpio-eroski-pieza-al-peso-aprox-2-kg/",
                "descripcion" => "Pollo limpio",
                "link" => "https://supermercado.eroski.es/es/productdetail/9204066-pollo-limpio-eroski-pieza-al-peso-aprox-2-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20407,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3d011ddb-ec01-44c6-9283-0e36d144b15c/1280x1280.png",
                "peso" => 2000,
                "scrab_id"=> "43298",
                "descripcion" => "Pollo certificado limpio y entero",
                "link" => "https://www.compraonline.alcampo.es/products/alcampo-cultivamos-lo-bueno-pollo-certificado-limpio-y-entero-bandeja/43298",
                    ]);

$p20408 = DB::table("productos")->where("name","Chuletas de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/737999975e5eec5bff675dc6eba81c99.jpg?fit=crop&h=500&w=500",
                "peso" => 760,
                "scrab_id"=> "4523",
                "descripcion" => "Chuletas de pavo contramuslo",
                "link" => "https://tienda.mercadona.es/product/4523/chuletas-pavo-contramuslo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/039652_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod920185",
                "descripcion" => "Chuletas de pavo",
                "link" => "https://www.carrefour.es/supermercado/chuleta-de-pavo-carrefour-500-g-aprox/R-prod920185/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/261352/261352_FRO_0_ES.jpg?imwidth=392",
                "peso" => 550,
                "scrab_id"=> "261352",
                "descripcion" => "Chuleta de contramuslo de pavo",
                "link" => "https://www.dia.es/carniceria/pavo/p/261352",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20408,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/14894604_x.jpg",
                "peso" => 340,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14894604-chuleta-de-contramuslos-de-pavo-eroski-bandeja-al-peso-aprox-340-g/",
                "descripcion" => "Chuleta de contramuslos de pavo",
                "link" => "https://supermercado.eroski.es/es/productdetail/14894604-chuleta-de-contramuslos-de-pavo-eroski-bandeja-al-peso-aprox-340-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20408,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/12242896-f03c-40cb-9b63-948668919a70/1280x1280.png",
                "peso" => 600,
                "scrab_id"=> "60523",
                "descripcion" => "ALDELIS chuletas frescas de pavo",
                "link" => "https://www.compraonline.alcampo.es/products/aldel%C3%ADs-bandeja-de-chuletas-frescas-de-pavo/60523",
                    ]);

$p20409 = DB::table("productos")->where("name","Pechuga fileteada de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/cb9ab1cef933c95b65edaaa2a91a0fb6.jpg?fit=crop&h=500&w=500",
                "peso" => 600,
                "scrab_id"=> "2794",
                "descripcion" => "Filetes pechuga de pavo",
                "link" => "https://tienda.mercadona.es/product/2794/filetes-pechuga-pavo-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/039636_00_2.jpg",
                "peso" => 600,
                "scrab_id"=> "R-prod920182",
                "descripcion" => "Pechuga de pavo fileteada",
                "link" => "https://www.carrefour.es/supermercado/pechuga-de-pavo-fileteada-carrefour-600-g-aprox/R-prod920182/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202112/20/00118461002315____6__1200x1200.jpg",
                "peso" => 600,
                "scrab_id"=> "0110118461002315",
                "descripcion" => "Filetes de pechuga de pavo frescos",
                "link" => "https://www.elcorteingles.es/supermercado/0110118461002315-el-corte-ingles-filetes-de-pechuga-de-pavo-frescos-peso-aproximado-bandeja-600-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/261349/261349_FRO_0_ES.jpg?imwidth=392",
                "peso" => 575,
                "scrab_id"=> "261349",
                "descripcion" => "Filetes de pechuga de pavo",
                "link" => "https://www.dia.es/carniceria/pavo/p/261349",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20409,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/5848916_x.jpg",
                "peso" => 550,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5848916-filete-de-pechuga-de-pavo-eroski-bandeja-al-peso-aprox-550-g/",
                "descripcion" => "Filete de pechuga de pavo",
                "link" =>"https://supermercado.eroski.es/es/productdetail/5848916-filete-de-pechuga-de-pavo-eroski-bandeja-al-peso-aprox-550-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20409,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/4a073037-4e27-4309-b33a-e92ff20becc2/1280x1280.png",
                "peso" => 600,
                "scrab_id"=> "77324",
                "descripcion" => "COREN filetes de pechuga de pavo",
                "link" => "https://www.compraonline.alcampo.es/products/coren-bandeja-de-filetes-de-pechuga-de-pavo/77324",

                    ]);


$p20501 = DB::table("productos")->where("name","Chopped de pavo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $mercadona,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710860_00_1.jpg",
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710860",
            "descripcion" => "Chopped de Pavo en lonchas",
            "link" => "https://www.carrefour.es/supermercado/chopped-de-pavo-en-lonchas-carrefour-el-mercado-sin-gluten-250-g/R-VC4AECOMM-710860/p",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $eci,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/273953/273953_ISO_0_ES.jpg?imwidth=392",
            "peso" => 200,
            "scrab_id"=> "273953",
            "descripcion" => "Chopped de pavo cocido",
            "link" => "https://www.dia.es/charcuteria-y-quesos/jamon-cocido-lacon-fiambres-y-mortadela/p/273953",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20501,
            "supermercado_id"=> $eroski,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20501,
            "supermercado_id"=> $alcampo,
            "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c34721f5-5467-463a-836d-e3c892de4734/1280x1280.png",
            "peso" => 200,
            "scrab_id"=> "32860",
            "descripcion" => "Chopped de pavo sin gluten y sin lactosa",
            "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Chopped-de-pavo-sin-gluten-y-sin-lactosa-cortado-en-finas-lonchas-PRODUCTO-ALCAMPO-200-g/32860",
                ]);

$p20502 = DB::table("productos")->where("name","Chopped pork")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/97fd3cb8153fef3ad8d700e16ab3a8b2.jpg?fit=crop&h=500&w=500",
            "peso" => 250,
            "scrab_id"=> "59333",
            "descripcion" => "Chopped cerdo Hacendado",
            "link" => "https://tienda.mercadona.es/product/59333/chopped-cerdo-hacendado-lonchas-paquete",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710772_00_1.jpg",
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710772",
            "descripcion" => "Chopped en lonchas Carrefour",
            "link" => "https://www.carrefour.es/supermercado/chopped-en-lonchas-carrefour-el-mercado-sin-gluten-250-g/R-VC4AECOMM-710772/p",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $eci,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/273959/273959_ISO_0_ES.jpg?imwidth=392",
            "peso" => 250,
            "scrab_id"=> "273959",
            "descripcion" => "Chopped pork Nuestra Alacena",
            "link" => "https://www.dia.es/charcuteria-y-quesos/jamon-cocido-lacon-fiambres-y-mortadela/p/273959",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20502,
            "supermercado_id"=> $eroski,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20502,
            "supermercado_id"=> $alcampo,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
                ]);

// $p20503 = DB::table("productos")->where("name","Chopped de ternera")->value("id");
//         DB::table("supermercadoproductos")->insert([
//             "producto_id"=> $p20503,
//             "supermercado_id"=> $mercadona,
//             "img_url" => NULL,
//             "peso" => NULL,
//             "scrab_id"=> NULL,
//             "descripcion" => NULL,
//             "link" => NULL,
//             ]);
//         DB::table("supermercadoproductos")->insert([
//             "producto_id"=> $p20503,
//             "supermercado_id"=> $carrefour,
//             "img_url" => "",
//             "peso" => 105,
//             "scrab_id"=> "R-VC4AECOMM-695381",
//             ]);
//         DB::table("supermercadoproductos")->insert([
//             "producto_id"=> $p20503,
//             "supermercado_id"=> $eci,
//             "peso" => 95,
//             "scrab_id"=> "0110118381300229",
//             ]);
//         DB::table("supermercadoproductos")->insert([
//             "producto_id"=> $p20503,
//             "supermercado_id"=> $dia,
//             "peso" => NULL,
//             "scrab_id"=> NULL,
//             ]);
//         DB::table("supermercadoproductos")->insert([
//             "producto_id" => $p20503,
//             "supermercado_id"=> $eroski,
//             "peso" => NULL,
//             "scrab_id"=> NULL
//                 ]);
//         DB::table("supermercadoproductos")->insert([
//             "producto_id" => $p20503,
//             "supermercado_id"=> $alcampo,
//             "peso" => 95,
//             "scrab_id"=> "65420"
//                 ]);


$p20504 = DB::table("productos")->where("name","Mortadela de cerdo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $mercadona,
            "img_url" => "https://prod-mercadona.imgix.net/images/3769a7bff54fb0fcc4e0d59830baee5e.jpg?fit=crop&h=500&w=500",
            "peso" => 250,
            "scrab_id"=> "59334",
            "descripcion" => "Mortadela Hacendado lonchas",
            "link" => "https://tienda.mercadona.es/product/59334/mortadela-hacendado-lonchas-paquete",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $carrefour,
            "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710701_00_1.jpg",
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710701",
            "descripcion" => "Mortadela en lonchas Carrefour",
            "link" => "https://www.carrefour.es/supermercado/mortadela-en-lonchas-carrefour-el-mercado-sin-gluten-250-g/R-VC4AECOMM-710701/p",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $eci,
            "img_url" => NULL,
            "peso" => NULL,
            "scrab_id"=> NULL,
            "descripcion" => NULL,
            "link" => NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $dia,
            "img_url" => "https://www.dia.es/product_images/273960/273960_ISO_0_ES.jpg?imwidth=392",
            "peso" => 250,
            "scrab_id"=> "273960",
            "descripcion" => "Mortadela Nuestra Alacena",
            "link" => "https://www.dia.es/charcuteria-y-quesos/jamon-cocido-lacon-fiambres-y-mortadela/p/273960",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20504,
            "supermercado_id"=> $eroski,
            "img_url" => "https://supermercado.eroski.es/images/12628566_x.jpg",
            "peso" => 250,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12628566-mortadela-eroski-basic-sobre-250-g/",
            "descripcion" => "Mortadela EROSKI basic",
            "link" => "https://supermercado.eroski.es/es/productdetail/12628566-mortadela-eroski-basic-sobre-250-g/",
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20504,
            "supermercado_id"=> $alcampo,
            "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/bcacdca0-86c7-47d1-b8df-ea9f4462bc02/1280x1280.png",
            "peso" => 150,
            "scrab_id"=> "54709",
            "descripcion" => "Mortadela sin gluten ni lactosa, finas lonchas",
            "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Mortadela-sin-gluten-y-sin-lactosa-cortada-en-finas-lonchas-PRODUCTO-ALCAMPO-150-g/54709",
                ]);

$p20505 = DB::table("productos")->where("name","Mortadela de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/ef4f43d6e2c402865a8e15505b5a0fb9.jpg?fit=crop&h=500&w=500",
                "peso" => 150,
                "scrab_id"=> "59336",
                "descripcion" => "Mortadela de pavo Hacendado finas lonchas",
                "link"=> "https://tienda.mercadona.es/product/59336/mortadela-pavo-hacendado-finas-lonchas-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710777_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-710777",
                "descripcion" => "Mortadela de pavo en lonchas sin gluten",
                "link" => "https://www.carrefour.es/supermercado/mortadela-de-pavo-en-lonchas-carrefour-sin-gluten-250-g/R-VC4AECOMM-710777/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/273952/273952_ISO_0_ES.jpg?imwidth=392",
                "peso" => 200,
                "scrab_id"=> "273952",
                "descripcion" => "Mortadela de pavo Nuestra Alacena",
                "link" => "https://www.dia.es/charcuteria-y-quesos/jamon-cocido-lacon-fiambres-y-mortadela/p/273952",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20505,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20505,
                "supermercado_id"=> $alcampo,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);

$p20506 = DB::table("productos")->where("name","Chorizo 'Pamplona'")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/9a820f336a97015944493412ad7a50f0.jpg?fit=crop&h=500&w=500",
                "peso" => 225,
                "scrab_id"=> "59166",
                "descripcion" => "Chorizo Pamplona Extra",
                "link" => "https://tienda.mercadona.es/product/59166/chorizo-pamplona-extra-hacendado-lonchas-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/084413_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-084413",
                "descripcion" => "Chorizo de Pamplona en lonchas",
                "link" => "https://www.carrefour.es/supermercado/chorizo-de-pamplona-en-lonchas-carrefour-el-mercado-2x1125-g/R-VC4AECOMM-084413/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/04/00118386700621____6__1200x1200.jpg",
                "peso" => 225,
                "scrab_id"=> "0110118386700621",
                "descripcion" => "Chorizo de Pamplona extra en lonchas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118386700621-el-corte-ingles-chorizo-de-pamplona-extra-en-lonchas-sin-gluten-pack-2-x-1125-g-envase-225-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/273982/273982_ISO_0_ES.jpg?imwidth=392",
                "peso" => 225,
                "scrab_id"=> "273982",
                "descripcion" => "Chorizo de Pamplona extra",
                "link" => "https://www.dia.es/charcuteria-y-quesos/lomo-chorizo-fuet-salchichon/p/273982",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20506,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/24573677_x.jpg",
                "peso" => 224,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24573677-chorizo-pamplona-extra-eroski-basic-pack-4x5625-g/",
                "descripcion" => "Chorizo Pamplona extra",
                "link" => "https://supermercado.eroski.es/es/productdetail/24573677-chorizo-pamplona-extra-eroski-basic-pack-4x5625-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20506,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/4f881bc0-6bdd-4900-a131-b212c1a8b76a/1280x1280.png",
                "peso" => 200,
                "scrab_id"=> "81775",
                "descripcion" => "Chorizo de Pamplona extra",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Chorizo-de-Pamplona-extra-elaborado-sin-gluten-y-cortado-en-lonchas-PRODUCTO-ECON%C3%93MICO-ALCAMPO-200-g/81775",
                    ]);

$p20507 = DB::table("productos")->where("name","Salami extra")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/4d195f441ba02aef196c0b1914a97e78.jpg?fit=crop&h=500&w=500",
                "peso" => 240,
                "scrab_id"=> "59090",
                "descripcion" => "Salami extra Hacendado",
                "link" => "https://tienda.mercadona.es/product/59090/salami-extra-hacendado-lonchas-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/248782_00_1.jpg",
                "peso" => 240,
                "scrab_id"=> "R-VC4AECOMM-248782",
                "descripcion" => "Salama extra El Mercado",
                "link" => "https://www.carrefour.es/supermercado/salami-extra-carrefour-el-mercado-pack-de-2-unidades-de-120-g-g/R-VC4AECOMM-248782/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/04/00118388300727____2__600x600.jpg",
                "peso" => 225,
                "scrab_id"=> "0110118388300727",
                "img_url" => "Salama extra en lonchas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118388300727-el-corte-ingles-salami-extra-en-lonchas-sin-gluten-pack-2-x-1125-g-envase-225-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/274141/274141_ISO_0_ES.jpg?imwidth=392",
                "peso" => 200,
                "scrab_id"=> "274141",
                "descripcion" => "Salami extra Nuestra Alacena",
                "link" => "https://www.dia.es/charcuteria-y-quesos/lomo-chorizo-fuet-salchichon/p/274141",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20507,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/18581199_x.jpg",
                "peso" => 125,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18581199-salami-extra-eroski-sobre-125-g/",
                "descripcion" => "Salami extra",
                "link" => "https://supermercado.eroski.es/es/productdetail/18581199-salami-extra-eroski-sobre-125-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20507,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/67e2bacd-9b14-4c97-9745-74a493bb5406/1280x1280.png",
                "peso" => 200,
                "scrab_id"=> "81773",
                "descripcion" => "Salami extra sin gluten",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Salami-extra-sin-gluten-cortado-en-lonchas-PRODUCTO-ALCAMPO-200-g/81773",
                    ]);

$p20508 = DB::table("productos")->where("name","Salchichón extra")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/70c14f77b7a716d260af85ee2c09176f.jpg?fit=crop&h=500&w=500",
                    "peso" => 180,
                    "scrab_id"=> "59130",
                    "descripcion" => "Salchichon extra Hacendado lonchas",
                    "link" => "https://tienda.mercadona.es/product/59130/salchichon-extra-hacendado-lonchas-pack-4",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/248781_00_1.jpg",
                    "peso" => 240,
                    "scrab_id"=> "R-VC4AECOMM-248781",
                    "descripcion" => "Salchichon extra El Mercado",
                    "link" => "https://www.carrefour.es/supermercado/salchichon-extra-carrefour-el-mercado-pack-de-2-unidades-de-120-g/R-VC4AECOMM-248781/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202109/08/00118388300529____10__1200x1200.jpg",
                    "peso" => 150,
                    "scrab_id"=> "0110118388300529",
                    "descripcion" => "Salchichon extra en lonchas sin gluten",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118388300529-el-corte-ingles-selection-salchichon-extra-en-lonchas-sin-gluten-envase-150-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/274140/274140_ISO_0_ES.jpg?imwidth=392",
                    "peso" => 200,
                    "scrab_id"=> "274140",
                    "descripcion" => "Salchichon extra Nuestra Alacena",
                    "link" => "https://www.dia.es/charcuteria-y-quesos/lomo-chorizo-fuet-salchichon/p/274140",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20508,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/24573685_x.jpg",
                    "peso" => 180,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24573685-salchichon-extra-eroski-basic-pack-4x45-g/",
                    "descripcion" => "Salchichon extra Basic",
                    "link" => "https://supermercado.eroski.es/es/productdetail/24573685-salchichon-extra-eroski-basic-pack-4x45-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20508,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/92b96302-9481-4c67-a4ab-7e6b8ee88c89/1280x1280.png",
                    "peso" => 200,
                    "scrab_id"=> "54214",
                    "descripcion" => "Salchichon extra",
                    "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Salchich%C3%B3n-extra-elaborado-sin-gluten-y-cortado-en-finas-lonchas-PRODUCTO-ALCAMPO-200-g/54214",
                        ]);

$p20509 = DB::table("productos")->where("name","Lomo embuchado")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/d34fa6180809a1efce045d48d116df0c.jpg?fit=crop&h=500&w=500",
                    "peso" => 125,
                    "scrab_id"=> "59075",
                    "descripcion" => "Lomo embuchado Hacendado lonchas",
                    "link" => "https://tienda.mercadona.es/product/59075/lomo-embuchado-hacendado-lonchas-pack-4",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/709767_00_1.jpg",
                    "peso" => 125,
                    "scrab_id"=> "R-VC4AECOMM-709767",
                    "descripcion" => "Lomo embuchado lonchas",
                    "link" => "https://www.carrefour.es/supermercado/lomo-embuchado-en-lonchas-carrefour-sin-gluten-pack-de-4-unidades-de-3125-g/R-VC4AECOMM-709767/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/04/00118387200324____2__600x600.jpg",
                    "peso" => 225,
                    "scrab_id"=> "0110118387200324",
                    "descripcion" => "Lomo embuchado en lonchas",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118387200324-el-corte-ingles-lomo-embuchado-en-lonchas-sin-gluten-sin-lactosa-pack-2-x-1125-g-envase-225-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/274063/274063_ISO_0_ES.jpg?imwidth=392",
                    "peso" => 140,
                    "scrab_id"=> "274063",
                    "descripcion" => "Lomo embuchado Nuestra Alacena",
                    "link" => "https://www.dia.es/charcuteria-y-quesos/lomo-chorizo-fuet-salchichon/p/274063",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20509,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/25258989_x.jpg",
                    "peso" => 125,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25258989-lomo-embuchado-eroski-pack-4x3125-g/",
                    "descripcion" => "Lomo embuchado",
                    "link" => "https://supermercado.eroski.es/es/productdetail/25258989-lomo-embuchado-eroski-pack-4x3125-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20509,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5afe74f5-d61e-4b4f-97dc-032d107772d3/1280x1280.png",
                    "peso" => 120,
                    "scrab_id"=> "81165",
                    "descripcion" => "Lomo embuchado",
                    "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Lomo-embuchado-sin-gluten-y-cortado-en-lonchas-PRODUCTO-ALCAMPO-2-x-60-g/81165",
                        ]);

$p20510 = DB::table("productos")->where("name","Bacon")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/351f6c6a659e6e3247f9d76320448b89.jpg?fit=crop&h=500&w=500",
                    "peso" => 210,
                    "scrab_id"=> "59169",
                    "descripcion" => "Bacon ahumado Monells lonchas",
                    "link" => "https://tienda.mercadona.es/product/59169/bacon-ahumado-monells-lonchas-paquete",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710687_00_1.jpg",
                    "peso" => 200,
                    "scrab_id"=> "R-VC4AECOMM-710687",
                    "descripcion" => "Bacon en lonchas El Mercado",
                    "link" => "https://www.carrefour.es/supermercado/bacon-en-lonchas-carrefour-el-mercado-sin-gluten-200-g/R-VC4AECOMM-710687/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202402/06/00118384500031____7__600x600.jpg",
                    "peso" => 150,
                    "scrab_id"=> "0110118384500031",
                    "descripcion" => "Bacon cocido y ahumado en lonchas",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118384500031-el-corte-ingles-selection-bacon-cocido-y-ahumado-en-lonchas-sin-gluten-envase-150-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/273749/273749_ISO_0_ES.jpg?imwidth=392",
                    "peso" => 200,
                    "scrab_id"=> "273749",
                    "descripcion" => "Bacon cocido en lonchas",
                    "link" => "https://www.dia.es/charcuteria-y-quesos/jamon-cocido-lacon-fiambres-y-mortadela/p/273749",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20510,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/16460800_x.jpg",
                    "peso" => 150,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16460800-bacon-ahumado-con-humo-natural-eroski-maestro-sobre-150-g/",
                    "descripcion" => "Bacon ahumado con humo natural",
                    "link" => "https://supermercado.eroski.es/es/productdetail/16460800-bacon-ahumado-con-humo-natural-eroski-maestro-sobre-150-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20510,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/108fe543-0be3-44c5-ba1b-9201a47b06f6/1280x1280.png",
                    "peso" => 200,
                    "scrab_id"=> "54130",
                    "descripcion" => "Bacon cocido cortado en lonchas",
                    "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Bacon-cocido-cortado-en-lonchas-elaborado-sin-gluten-y-sin-lactosa-PRODUCTO-ALCAMPO-200-g/54130",
                        ]);

$p20601 = DB::table("productos")->where("name","Tacos carne adobada 'Pinchos'")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/d33bbb089073d2c958677c558595b1da.jpg?fit=crop&h=500&w=500",
                    "peso" => 500,
                    "scrab_id"=> "3455",
                    "link" => "https://tienda.mercadona.es/product/3455/pincho-amarillo-cerdo-con-perejil-bandeja",
                    "descripcion" => "Pincho amarillo de cerdo con perejil",
                    ]);
                // DB::table("supermercadoproductos")->insert([
                //     "producto_id"=> $p20601,
                //     "supermercado_id"=> $carrefour,
                //     "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/058444_00_2.jpg",
                //     "peso" => 340,
                //     "scrab_id"=> "R-VC4AECOMM-058444",
                //     "descripcion" => "Pincho moruno de cerdo amarillo",
                //     "link" => "https://www.carrefour.es/supermercado/pincho-moruno-de-cerdo-amarillo-carrefour-el-mercado-340-g/R-VC4AECOMM-058444/p",
                //     ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/058426_00_2.jpg",
                    "peso" => 340,
                    "scrab_id"=> "R-VC4AECOMM-058426",
                    "descripcion" => "Pincho moruno de cerdo amarillo",
                    "link" => "https://www.carrefour.es/supermercado/pincho-moruno-de-cerdo-adobado-carrefour-el-mercado-340-g/R-VC4AECOMM-058426/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201803/27/00118433500149____2__600x600.jpg",
                    "peso" => 300,
                    "scrab_id"=> "0110118433500149",
                    "descripcion" => "Pincho moruno andaluz de cerdo",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118433500149-pelayito-pincho-moruno-andaluz-de-cerdo-sin-gluten-4-unidades-peso-aproximado-bandeja-300-g/"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $dia,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20601,
                    "supermercado_id"=> $eroski,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20601,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b3ef7fd7-8ac5-4300-b140-6e24c7136142/1280x1280.png",
                    "peso" => 300,
                    "scrab_id"=> "78057",
                    "descripcion" => "Pinchos de jamon de cerdo con adobo andaluz",
                    "link" => "https://www.compraonline.alcampo.es/products/bandeja-con-pinchos-de-jam%C3%B3n-de-cerdo-con-adobo-andaluz-caysan/787100",
                        ]);

$p20602 = DB::table("productos")->where("name","Longaniza de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/c5d1f9e4e5b4b3b5b18e40e3be710ca9.jpg?fit=crop&h=500&w=500",
                    "peso" => 560,
                    "scrab_id"=> "6043",
                    "descripcion" => "Longaniza fresca sin tripa",
                    "link" => "https://tienda.mercadona.es/product/6043/longaniza-fresca-sin-tripa-bandeja",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/058970_00_2.jpg",
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-058970",
                    "descripcion" => "Longaniza blanca El Mercado",
                    "link" => "https://www.carrefour.es/supermercado/longaniza-blanca-carrefour-el-mercado-500-g-aprox/R-VC4AECOMM-058970/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202005/29/00118450500881____4__1200x1200.jpg",
                    "peso" => 350,
                    "scrab_id"=> "0110118450500881",
                    "descripcion" => "Longaniza de cerdo blanca fresca",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118450500881-gurmesa-longaniza-de-cerdo-fresca-blanca-sin-gluten-peso-aproximado-bandeja-350-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/112150/112150_FRO_0_ES.jpg?imwidth=392",
                    "peso" => 325,
                    "scrab_id"=> "112150",
                    "descripcion" => "Longaniza sin tripa",
                    "link" => "https://www.dia.es/carniceria/cerdo/p/112150",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20602,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/19718816_x.jpg",
                    "peso" => 375,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19718816-longaniza-fresca-de-cerdo-eroski-bandeja-375-g/",
                    "descripcion" => "Longaniza fresca de cerdo",
                    "link" => "https://supermercado.eroski.es/es/productdetail/19718816-longaniza-fresca-de-cerdo-eroski-bandeja-375-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20602,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/278bfa0f-b693-49f4-a6c0-2ec59ccee011/1280x1280.png",
                    "peso" => 640,
                    "scrab_id"=> "32806",
                    "descripcion" => "Longanizas blancas frescas",
                    "link" => "https://www.compraonline.alcampo.es/products/bandeja-de-longanizas-blancas-frescas-serrano-640-g/32806",
                        ]);

$p20603 = DB::table("productos")->where("name","Carne picada de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/144333b668ae5a0acc09d435401d73c9.jpg?fit=crop&h=500&w=500",
                    "peso" => 560,
                    "scrab_id"=> "2867",
                    "descripcion" => "Preparado carne de cerdo picada",
                    "link" => "https://tienda.mercadona.es/product/2867/preparado-carne-picada-cerdo-bandeja",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_350x_/img_pim_food/050334_00_1.jpg",
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-050334",
                    "descripcion" => "Pareparado de carne picada de cerdo",
                    "link" => "https://www.carrefour.es/supermercado/preparado-de-carne-picada-de-cerdo-carrefour-el-mercado-500-g/R-VC4AECOMM-050334/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $eci,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/261238/261238_FRO_0_ES.jpg?imwidth=392",
                    "peso" => 500,
                    "scrab_id"=> "261238",
                    "descripcion" => "Preparado de carne picada de cerdo",
                    "link" => "https://www.dia.es/carniceria/hamburguesas-y-carne-picada/p/261238"
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20603,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/2438117_x.jpg",
                    "peso" => 400,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2438117-picada-de-cerdo-eroski-bandeja-400-g/",
                    "descripcion" => "Picada de cerdo",
                    "link" => "https://supermercado.eroski.es/es/productdetail/2438117-picada-de-cerdo-eroski-bandeja-400-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20603,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b946a042-1e22-4660-a391-261e06647018/1280x1280.webp",
                    "peso" => 500,
                    "scrab_id"=> "542619",
                    "descripcion" => "Preparado de carne picada de cerdo ROLER",
                    "link" => "https://www.compraonline.alcampo.es/products/Bandeja-de-preparado-de-carne-picada-burger-meat-de-cerdo-elaborada-sin-gluten-ROLER-La-carniceria-500-g/542619",
                        ]);

$p20604 = DB::table("productos")->where("name","Carne picada de ternera")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/123e323202f41ba380757a55d4c0508b.jpg?fit=crop&h=500&w=500",
                    "peso" => 500,
                    "scrab_id"=> "4575",
                    "descripcion" => "Preparado de carne picada vacuno",
                    "link" => "https://tienda.mercadona.es/product/4575/preparado-carne-picada-vacuno-bandeja",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/050315_00_1.jpg",
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-050315",
                    "descripcion" => "Preparado de carne picada de vacuno",
                    "link" => "https://www.carrefour.es/supermercado/preparado-de-carne-picada-de-vacuno-carrefour-500-g/R-VC4AECOMM-050315/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201604/07/00118480200130____1__600x600.jpg",
                    "peso" => 400,
                    "scrab_id"=> "0110118480200130",
                    "descripcion" => "Preparado de carne picada de añojo",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118480200130-incova-preparado-de-carne-picada-de-anojo-bandeja-400-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/261239/261239_FRO_0_ES.jpg?imwidth=392",
                    "peso" => 500,
                    "scrab_id"=> "261239",
                    "descripcion" => "Preparado de carne picada de vacuno",
                    "link" => "https://www.dia.es/carniceria/hamburguesas-y-carne-picada/p/261239",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20604,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/2438109_x.jpg",
                    "peso" => 400,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2438109-picada-de-vacuno-eroski-bandeja-400-g/",
                    "descripcion" => "Picada de vacuno",
                    "link" => "https://supermercado.eroski.es/es/productdetail/2438109-picada-de-vacuno-eroski-bandeja-400-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20604,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/99c36a83-4425-43eb-8dcc-2c4ded506340/1280x1280.png",
                    "peso" => 400,
                    "scrab_id"=> "89128",
                    "descripcion" => "Preparado de carne picada de vacuno ROLER",
                    "link" => "https://www.compraonline.alcampo.es/products/Bandeja-de-preparado-de-carne-picada-de-vacuno-elaborada-sin-gluten-ni-lactosa-ROLER-400-g/89128",
                        ]);


// $p30101 = DB::table("productos")->where("name","Bacaladilla")->value("id");
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id"=> $p30101,
//                 "supermercado_id"=> $mercadona,
//                 "img_url" => NULL,
//                 "peso" => NULL,
//                 "scrab_id"=> NULL,
//                 "descripcion" => NULL,
//                 "link" => NULL,
//                 ]);
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id"=> $p30101,
//                 "supermercado_id"=> $carrefour,
//                 "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/058128_00_1.jpg",
//                 "peso" => 600,
//                 "scrab_id"=> "R-628108250",
//                 "descripcion" => "Bacaladilla",
//                 "link" => "https://www.carrefour.es/supermercado/bacaladilla-600-g-aprox/R-628108250/p",
//                 ]);
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id"=> $p30101,
//                 "supermercado_id"=> $eci,
//                 "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118256000037____2__1200x1200.jpg",
//                 "peso" => 1000,
//                 "scrab_id"=> "0110118256000037",
//                 "descripcion" => "Bacaladitos",
//                 "link" => "https://www.elcorteingles.es/supermercado/0110118256000037-bacaladitos-enteros/",
//                 ]);
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id"=> $p30101,
//                 "supermercado_id"=> $dia,
//                 "img_url" => NULL,
//                 "peso" => NULL,
//                 "scrab_id"=> NULL,
//                 "descripcion" => NULL,
//                 "link" => NULL,
//                 ]);
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id" => $p30101,
//                 "supermercado_id"=> $eroski,
//                 "img_url" => NULL,
//                 "peso" => NULL,
//                 "scrab_id"=> NULL,
//                 "descripcion" => NULL,
//                 "link" => NULL,
//                     ]);
//             DB::table("supermercadoproductos")->insert([
//                 "producto_id" => $p30101,
//                 "supermercado_id"=> $alcampo,
//                 "img_url" => "",
//                 "peso" => 600,
//                 "scrab_id"=> "73126"
//                     ]);

$p30102 = DB::table("productos")->where("name","Bacalao")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/7fe85bfd4b3c74ef53e335e439b06b4e.jpg?fit=crop&h=500&w=500",
                "peso" => 2280,
                "scrab_id"=> "81204.1",
                "descripcion" => "Bacalao en rodajas",
                "link" => "https://tienda.mercadona.es/product/81204.1/bacalao-rodajas-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/089919_00_aca02c5_1.jpg",
                "peso" => 3000,
                "scrab_id"=> "R-693806541",
                "descripcion" => "Bacalao Skrei Circulo de Calidad",
                "link" => "https://www.carrefour.es/supermercado/bacalao-skrei-3-kg-aprox/R-693806541/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118247400205____5__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118247400205",
                "descripcion" => "Bacalao noruego de cultivo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118247400205-bacalao-noruego-de-cultivo-peso-aproximado-pieza-1-3-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30102,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/10882900_x.jpg",
                "peso" => 5000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10882900-bacalao-skrei-4-6-kg-enatur-msc-granel-5-kg/",
                "descripcion" => "Bacalao Skrei",
                "link" => "https://supermercado.eroski.es/es/productdetail/10882900-bacalao-skrei-4-6-kg-enatur-msc-granel-5-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30102,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/bb7a4d62-0d95-4311-a45d-e0fc053ae08d/1280x1280.png",
                "peso" => 2500,
                "scrab_id"=> "73111",
                "descripcion" => "Bacalao mostrador",
                "link" => "https://www.compraonline.alcampo.es/products/Bacalao-mostrador-Entero-limpio/73111-ENTERO-LIMPIO",
                    ]);

$p30103 = DB::table("productos")->where("name","Boquerón")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/1d2cb161f810c273ec84e45691b07e6d.jpg?fit=crop&h=500&w=500",
                    "peso" => 200,
                    "scrab_id"=> "81661.1",
                    "descripcion" => "Boquerón sin limpiar",
                    "link" => "https://tienda.mercadona.es/product/81661.1/boqueron-sin-limpiar-granel",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $carrefour,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118246300042____2__1200x1200.jpg",
                    "peso" => 1000,
                    "scrab_id"=> "0110118246300042",
                    "descripcion" => "Boquerones",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118246300042-boquerones/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $dia,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30103,
                    "supermercado_id"=> $eroski,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30103,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/717de008-ae81-46b9-995a-d165007ec5ab/1280x1280.webp",
                    "peso" => 300,
                    "scrab_id"=> "73019",
                    "descripcion" => "Boqueron calibre 60-100",
                    "link" => "https://www.compraonline.alcampo.es/products/Boquer%C3%B3n-calibre-60-100/73019",
                        ]);

$p30104 = DB::table("productos")->where("name","Rape")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/02f9a4b8e419f4a3ff91152524328689.jpg?fit=crop&h=500&w=500",
                "peso" => 1460,
                "scrab_id"=> "81220.2",
                "descripcion" => "Rape a rodajas sin cabeza",
                "link" => "https://tienda.mercadona.es/product/81220.2/rape-rodajas-sin-cabeza-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_350x_/img_pim_food/234989_00_1.jpg",
                "peso" => 2500,
                "scrab_id"=> "R-530807348",
                "descripcion" => "Rape blanco",
                "link" => "https://www.carrefour.es/supermercado/rape-blanco-25-kg-aprox/R-530807348/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118255800031____2__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118255800031",
                "descripcion" => "Rape blanco entero",
                "link" => "https://www.elcorteingles.es/supermercado/0110118255800031-rape-blanco-entero-peso-aproximado-pieza-1-2-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30104,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/14631592_x.jpg",
                "peso" => 1600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14631592-rape-negro-del-pais-vasco-pieza-al-peso-aprox-16-kg/",
                "descripcion" => "Rape entero y limpio",
                "link" => "https://supermercado.eroski.es/es/productdetail/14631592-rape-negro-del-pais-vasco-pieza-al-peso-aprox-16-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30104,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/82fb6507-322f-4592-b3c3-5b6481decd82/1280x1280.webp",
                "peso" => 1500,
                "scrab_id"=> "73112",
                "descripcion" => "Rape entero mostrador",
                "link" => "https://www.compraonline.alcampo.es/products/Rape-entero-mostrador-Entero/73112-ENTERO",
                    ]);

$p30105 = DB::table("productos")->where("name","Gallo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $mercadona,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/056201_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-628108246",
                "descripcion" => "Gallo",
                "link" => "https://www.carrefour.es/supermercado/gallo-1-kg-aprox/R-628108246/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/19/00118255400022____2__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118255400022",
                "descripcion" => "Gallo de ración",
                "link" => "https://www.elcorteingles.es/supermercado/0110118255400022-gallo-de-racion-peso-aproximado-pieza-100-200-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30105,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30105,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/6f9f849b-7c49-4d73-8b51-3821ee3b5a15/500x500.jpg",
                "peso" => 400,
                "scrab_id"=> "72986",
                "descripcion" => "Gallo entero limpio",
                "link" => "https://www.compraonline.alcampo.es/products/Gallo-mostrador-Entero-limpio/72986-ENTERO-LIMPIO",
                    ]);

$p30106 = DB::table("productos")->where("name","Lenguado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $mercadona,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $carrefour,
                "img_url"=> "https://static.carrefour.es/hd_510x_/img_pim_food/729800_00_1.jpg",
                "peso" => 140,
                "scrab_id"=> "R-530807372",
                "descripcion" => "Lenguado",
                "link" => "https://www.carrefour.es/supermercado/lenguado-140-g-aprox/R-530807372/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/14/00118255500128____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118255500128",
                "descripcion" => "Lenguado de ración pequeño",
                "link" => "https://www.elcorteingles.es/supermercado/0110118255500128-lenguado-de-racion-pequeno-peso-aproximado-pieza-100-150-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30106,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30106,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f7785f06-8e15-4ca6-80f3-121a2f1bca73/500x500.jpg",
                "peso" => 200,
                "scrab_id"=> "72961",
                "descripcion" => "Lenguado entero limpio",
                "link" => "https://www.compraonline.alcampo.es/products/lenguado-entero-limpio/72961-ENTERO-LIMPIO",
                    ]);

$p30107 = DB::table("productos")->where("name","Lubina")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/7b996b05f032204332216f5e6a72b129.jpg?fit=crop&h=500&w=500",
                "peso" => 450,
                "scrab_id"=> "81241.1",
                "descripcion" => "Lubina limpia con cabeza",
                "link" => "https://tienda.mercadona.es/product/81241.1/lubina-limpia-con-cabeza-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/301585_00_1.jpg",
                "peso" => 600,
                "scrab_id"=> "R-790212148",
                "descripcion" => "Lubina",
                "link" => "https://www.carrefour.es/supermercado/lubina-600-g-aprox/R-790212148/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118247300041____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118247300041",
                "descripcion" => "Lubina nacional",
                "link" => "https://www.elcorteingles.es/supermercado/0110118247300041-lubina-nacional-peso-pieza-400-600-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30107,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/9717398_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9717398-lubina-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                "descripcion" => "Lubina de crianza",
                "link" => "https://supermercado.eroski.es/es/productdetail/9717398-lubina-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30107,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/17c432e6-c429-4cf8-8b92-7705d0ce84b6/500x500.jpg",
                "peso" => 600,
                "scrab_id"=> "72965",
                "descripcion" => "Lubina entera",
                "link" => "https://www.compraonline.alcampo.es/products/Lubina-entera/72965",
                    ]);


$p30108 = DB::table("productos")->where("name","Merluza")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/f9915fd0e276f93caa4eb284fbbcbc34.jpg?fit=crop&h=500&w=500",
                "peso" => 770,
                "scrab_id"=> "82610.6",
                "descripcion" => "Merluza media pieza sin aletas y sin escamas",
                "link" => "https://tienda.mercadona.es/product/82610.6/merluza-media-pieza-sin-aletas-sin-escamas-12-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/033403_00_1.jpg",
                "peso" => 3000,
                "scrab_id"=> "R-628108209",
                "descripcion" => "Merluza",
                "link" => "https://www.carrefour.es/supermercado/merluza-3-kg-aprox/R-628108209/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202002/06/00118246800066____4__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118246800066",
                "descripcion" => "Merluza, media o entera",
                "link" => "https://www.elcorteingles.es/supermercado/0110118246800066-merluza-por-medias-o-enteras-peso-aproximado-pieza-3-4-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30108,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/13923156.jpg",
                "peso" => 1500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13923156-merluza-pieza-al-peso-aprox-15-kg/",
                "descripcion" => "Merluza entera",
                "link" => "https://supermercado.eroski.es/es/productdetail/13923156-merluza-pieza-al-peso-aprox-15-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30108,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/6810d610-ab1e-44c9-bb27-637b4b1144c3/500x500.jpg",
                "peso" => 3000,
                "scrab_id"=> "72904",
                "descripcion" => "Merluza entera",
                "link" => "https://www.compraonline.alcampo.es/products/Merluza-pincho-mostrador-Entera/72904-ENTERA",
                    ]);

$p30109 = DB::table("productos")->where("name","Pescadilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $mercadona,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/235048_00_1.jpg",
                "peso" => 800,
                "scrab_id"=> "R-531505553",
                "descripcion" => "Pescadilla fina",
                "link" => "https://www.carrefour.es/supermercado/pescadilla-fina-800-g-aprox/R-531505553/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118246800090____2__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118246800090",
                "descripcion" => "Pescadilla",
                "link" => "https://www.elcorteingles.es/supermercado/0110118246800090-pescadilla-peso-pieza-1-2-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30109,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30109,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c7157824-4a07-4180-8a35-f0be8cb15acd/500x500.jpg",
                "peso" => 600,
                "scrab_id"=> "72928",
                "descripcion" => "Pescadilla entera limpia",
                "link" => "https://www.compraonline.alcampo.es/products/Pescadilla-fina-mostrador-Entera-limpia/72928-ENTERA-LIMPIA",
                    ]);

$p30110 = DB::table("productos")->where("name","Salmón")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/2a83560771de82f2644054222802f106.jpg?fit=crop&h=500&w=500",
                "peso" => 1610,
                "scrab_id"=> "81649.6",
                "descripcion" => "Salmon sin aletas sin escamas",
                "link" => "https://tienda.mercadona.es/product/81649.6/salmon-media-pieza-sin-aletas-sin-escamas-12-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/145070_00_1.jpg",
                "peso" => 3000,
                "scrab_id"=> "R-531731258",
                "descripcion" => "Salmón entero",
                "link" => "https://www.carrefour.es/supermercado/salmon-3-kg-aprox/R-531731258/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118247400049____4__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118247400049",
                "descripcion" => "Salmón noruego por medios o entero",
                "link" => "https://www.elcorteingles.es/supermercado/0110118247400049-salmon-noruego-por-medios-o-entero-peso-aproximado-pieza-2-3-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/162012/162012_ISO_0_ES.jpg",
                "peso" => 365,
                "scrab_id"=> "162012",
                "descripcion" => "Filete de salmón",
                "link" => "https://www.dia.es/pescados-mariscos-y-ahumados/pescados/p/162012",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30110,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/225771_x.jpg",
                "peso" => 2500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/225771-salmon-entero-y-limpio-de-crianza-al-peso-compra-minima-25-kg/",
                "descripcion" => "Salmón entero limpio de crianza",
                "link" => "https://supermercado.eroski.es/es/productdetail/225771-salmon-entero-y-limpio-de-crianza-al-peso-compra-minima-25-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30110,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/872ebc1b-ea46-4fca-a8d2-45ad7e1bf8b5/500x500.jpg",
                "peso" => 1300,
                "scrab_id"=> "73902",
                "descripcion" => "Salmón entero limpio",
                "link" => "https://www.compraonline.alcampo.es/products/Salm%C3%B3n-entero-Entero-limpio/73902-ENTERO-LIMPIO",
                    ]);

$p30111 = DB::table("productos")->where("name","Sardinas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/2b65dea09c00f7ea0a265455ce20ff1a.jpg?fit=crop&h=300&w=300",
                "peso" => 200,
                "scrab_id"=> "81100.2",
                "descripcion" => "Sardina limpia entera sin tripa y sin cabeza",
                "link" => "https://tienda.mercadona.es/product/81100.2/sardina-limpia-sin-cabeza-sin-tripa-granel",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/033684_00_2.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-540001614",
                "descripcion" => "Sardinas",
                "link" => "https://www.carrefour.es/supermercado/sardinas-1-kg-aprox/R-540001614/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118251000149____2__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118251000149",
                "descripcion" => "Filetes de sardinas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118251000149-filete-de-sardinas/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30111,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/225334_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/225334-sardina-parrocha-al-peso-compra-minima-500-g/",
                "descripcion" => "Sardina parrocha",
                "link" => "https://supermercado.eroski.es/es/productdetail/225334-sardina-parrocha-al-peso-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30111,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/70f1f0d2-48b5-4f0c-9594-78d59d672173/500x500.jpg",
                "peso" => 400,
                "scrab_id"=> "73025",
                "descripcion" => "Sardina parrocha - entera limpia",
                "link" => "https://www.compraonline.alcampo.es/products/Sardina-parrocha-Entera-limpia/73025-ENTERA-LIMPIA",
            ]);

$p30112 = DB::table("productos")->where("name","Trucha")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/661d69880016e9ebeb58a4f23465e397.jpg?fit=crop&h=500&w=500",
                    "peso" => 460,
                    "scrab_id"=> "81200.1",
                    "descripcion" => "Trucha abierta en libro con cabeza",
                    "link" => "https://tienda.mercadona.es/product/81200.1/trucha-abierta-libro-con-cabeza-pieza",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/349382_00_1.jpg",
                    "peso" => 600,
                    "scrab_id"=> "R-fprod1370189",
                    "descripcion" => "Trucha asalmonada",
                    "link" => "https://www.carrefour.es/supermercado/trucha-asalmonada-circulo-de-calidad-600-g-aprox/R-fprod1370189/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/19/00118247400056____2__1200x1200.jpg",
                    "peso" => 1000,
                    "scrab_id"=> "0110118247400056",
                    "descripcion" => "Trucha asalmonada entera",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118247400056-trucha-asalmonada-entera-peso-aproximado-pieza-300-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $dia,
                    "img_url" => NULL,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    "descripcion" => NULL,
                    "link" => NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30112,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/9717067.jpg",
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9717067-trucha-asalmonada-eviscerada-pieza-aprox-600-g/",
                    "descripcion" => "Trucha asalmonada eviscerada",
                    "link" => "https://supermercado.eroski.es/es/productdetail/9717067-trucha-asalmonada-eviscerada-pieza-aprox-600-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30112,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/35aa1184-1a85-4d48-882b-5ab011c9310e/500x500.jpg",
                    "peso" => 600,
                    "scrab_id"=> "71903",
                    "descripcion" => "Trucha asalmonada entera limpia",
                    "link" => "https://www.compraonline.alcampo.es/products/Trucha-asalmonada-mostrador-Entera-limpia/71903-ENTERA-LIMPIA",
                        ]);

$p30113 = DB::table("productos")->where("name","Dorada")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $mercadona,
                    "img_url" => "https://prod-mercadona.imgix.net/images/b00be480049e6df6699dfcc258e77d84.jpg?fit=crop&h=500&w=500",
                    "peso" => 630,
                    "scrab_id"=> "81234.2",
                    "descripcion" => "Dorada abierta a la espalda con espinas y cabeza",
                    "link" => "https://tienda.mercadona.es/product/81234.2/dorada-abierta-espalda-con-espinas-con-cabeza-pieza",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $carrefour,
                    "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/033389_00_22d80518_1.jpg",
                    "peso" => 600,
                    "scrab_id"=> "R-628108203",
                    "descripcion" => "Dorada de ración",
                    "link" => "https://www.carrefour.es/supermercado/dorada-de-racion-carrefour-600-g-aprox/R-628108203/p",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $eci,
                    "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/27/00118247300017____6__1200x1200.jpg",
                    "peso" => 1000,
                    "scrab_id"=> "0110118247300017",
                    "descripcion" => "Dorada nacional",
                    "link" => "https://www.elcorteingles.es/supermercado/0110118247300017-dorada-nacional-peso-pieza-400-600-g/",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $dia,
                    "img_url" => "https://www.dia.es/product_images/298039/298039_FRO_0_ES.jpg?imwidth=392",
                    "peso" => 240,
                    "scrab_id"=> "298039",
                    "descripcion" => "Filete de dorada",
                    "link" => "https://www.dia.es/pescados-mariscos-y-ahumados/pescados/p/298039",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30113,
                    "supermercado_id"=> $eroski,
                    "img_url" => "https://supermercado.eroski.es/images/9717463_x.jpg",
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9717463-dorada-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                    "descripcion" => "Dorada de crianza",
                    "link" => "https://supermercado.eroski.es/es/productdetail/9717463-dorada-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30113,
                    "supermercado_id"=> $alcampo,
                    "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/80d3f227-b89b-4f03-9e55-0415b17387ed/500x500.jpg",
                    "peso" => 600,
                    "scrab_id"=> "73514",
                    "descripcion" => "Dorada limpia",
                    "link" => "https://www.compraonline.alcampo.es/products/Dorada-mostrador-Entera-limpia/73514-ENTERA-LIMPIA",
                        ]);

$p30201 = DB::table("productos")->where("name","Atún en rodajas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/9e38f74bd5c28c2d69b8738830c9633e.jpg?fit=crop&h=500&w=500",
                "peso" => 250,
                "scrab_id"=> "24357",
                "descripcion" => "Rodajas de atún de aleta amarilla Hacendado congelado",
                "link" => "https://tienda.mercadona.es/product/24357/rodajas-atun-aleta-amarilla-hacendado-congelado-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/457034_00_1.jpg",
                "peso" => 420,
                "scrab_id"=> "R-VC4AECOMM-230611",
                "descripcion" => "Filetes de atún de aleta amarilla congelado",
                "link" => "https://www.carrefour.es/supermercado/filetes-de-atun-de-aleta-amarilla-congelado-extra-carrefour-225-g/R-VC4AECOMM-457034/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202111/10/00118910501073____3__1200x1200.jpg",
                "peso" => 225,
                "scrab_id"=> "0110118910501073",
                "descripcion" => "Filetes de atún solomillos sin piel CAMPOS",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910501073-campos-filetes-de-atun-solomillos-sin-piel-estuche-225-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/288633/288633_ISO_0_ES.jpg?imwidth=392",
                "peso" => 250,
                "scrab_id"=> "288633",
                "descripcion" => "Filetes de atún MSC",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/288633",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30201,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16463358_x.jpg",
                "peso" => 225,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16463358-filete-de-atun-campos-caja-225-g/",
                "descripcion" => "Filetes de atún MSC",
                "link" => "https://supermercado.eroski.es/es/productdetail/16463358-filete-de-atun-campos-caja-225-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30201,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3f93db86-3914-4f3f-96cb-d37da1219c6b/500x500.jpg",
                "peso" => 240,
                "scrab_id"=> "893702",
                "descripcion" => "Lomo limpio de atún MSC ALIGATOR",
                "link" => "https://www.compraonline.alcampo.es/products/ALIGATOR-Lomo-limpio-de-at%C3%BAn-MSC-pesca-sostenible-certificada-sin-piel-240-g/893702",
                    ]);

$p30202 = DB::table("productos")->where("name","Lomos de bacalao")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/aa68741e624d6f99903465294f3de2aa.jpg?fit=crop&h=500&w=500",
                "peso" => 390,
                "scrab_id"=> "62050",
                "descripcion" => "Lomo de bacalao MareDeus ultracongelado en su punto de sal",
                "link" => "https://tienda.mercadona.es/product/62050/lomo-bacalao-maredeus-ultracongelado-punto-sal-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/451223_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-451223",
                "descripcion" => "Lomos de bacalao congelado",
                "link" => "https://www.carrefour.es/supermercado/lomos-de-bacalao-congelado-500-g-aprox/R-VC4AECOMM-451223/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201711/21/00118910501529____7__600x600.jpg",
                "peso" => 400,
                "scrab_id"=> "0110118910501529",
                "descripcion" => "Filetes de bacalao al punto de sal",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910501529-el-corte-ingles-filetes-de-bacalao-al-punto-de-sal-bandeja-400-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/4542/4542_ISO_0_ES.jpg?imwidth=392",
                "peso" => 400,
                "scrab_id"=> "4542",
                "descripcion" => "Filetes de bacalao MSC",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/4542",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30202,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/7223613_x.jpg",
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/7223613-lomos-de-bacalao-eroski-bolsa-450-g/",
                "descripcion" => "Lomo de bacalao",
                "link" => "https://supermercado.eroski.es/es/productdetail/7223613-lomos-de-bacalao-eroski-bolsa-450-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30202,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3c988b97-090c-4231-818c-dc3f874b375f/500x500.jpg",
                "peso" => 400,
                "scrab_id"=> "33322",
                "descripcion" => "Filetes de bacalao ultracongelados y con piel",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Filetes-de-bacalao-ultracongelados-y-con-piel-PRODUCTO-ALCAMPO-360-g/33322",
                    ]);

$p30203 = DB::table("productos")->where("name","Merluza fileteada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/d180fb0f44cea8aa97e879d2a7c2dbf9.jpg?fit=crop&h=300&w=300",
                "peso" => 600,
                "scrab_id"=> "62228",
                "descripcion" => "Filetes de merluza del cabo sin piel",
                "link" => "https://tienda.mercadona.es/product/62228/filetes-merluza-cabo-sin-piel-hacendado-ultracongelados-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/954297_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-823818281",
                "descripcion" => "Filete de merluza Argentina congelada",
                "link" => "https://www.carrefour.es/supermercado/filete-de-merluza-argentina-congelada-carrefour-1-kg/R-823818281/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202311/28/00118937000661____4__600x600.jpg",
                "peso" => 580,
                "scrab_id"=> "0110118937000661",
                "descripcion" => "Filetes de merluza del Cabo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118937000661-el-corte-ingles-filetes-de-merluza-del-cabo-sin-piel-bolsa-580-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/17384/17384_ISO_0_ES.jpg?imwidth=392",
                "peso" => 400,
                "scrab_id"=> "17384",
                "descripcion" => "Filete de merluza argentino",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/17384",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30203,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/13116058_x.jpg",
                "peso" => 900,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13116058-filete-de-merluza-sin-piel-eroski-basic-bolsa-900-g/",
                "descripcion" => "Filete de merluza argentina sin piel",
                "link" => "https://supermercado.eroski.es/es/productdetail/13116058-filete-de-merluza-sin-piel-eroski-basic-bolsa-900-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30203,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c15c48b1-8ab9-4c62-baa2-0a98bcc77111/500x500.jpg",
                "peso" => 400,
                "scrab_id"=> "69014",
                "descripcion" => "Filetes de merluza argentina sin piel",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Filetes-de-merluza-argentina-ultracongelados-y-sin-piel-AUCHAN-Econ%C3%B3mico-400-g/69014",
                    ]);

$p30204 = DB::table("productos")->where("name","Cola de rape")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b1aa735d4d0049105e6c05cc7e8d3564.jpg",
                "peso" => 500,
                "scrab_id"=> "24340",
                "descripcion" => "Cola de rape del cabo",
                "link" => "https://tienda.mercadona.es/product/24340/cola-rape-cabo-hacendado-ultracongelada-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/334477_00_1.jpg",
                "peso" => 800,
                "scrab_id"=> "R-fprod1320155",
                "descripcion" => "Cola de rape chino ",
                "link" => "https://www.carrefour.es/supermercado/cola-de-rape-chino-congelado-800-g/R-fprod1320155/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202106/08/00118910502022____2__1200x1200.jpg",
                "peso" => 480,
                "scrab_id"=> "0110118910502022",
                "descripcion" => "Cola de rape crudo DELFIN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910502022-delfin-cola-de-rape-crudo-pieza-400-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30204,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/19072776_x.jpg",
                "peso" => 800,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19072776-cola-de-rape-compesca-bolsa-800-g/",
                "descripcion" => "Colas de rape COMPESCA",
                "link" => "https://supermercado.eroski.es/es/productdetail/19072776-cola-de-rape-compesca-bolsa-800-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30204,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/7b302422-3d0e-4e9b-ae8e-ddd5948015af/500x500.jpg",
                "peso" => 800,
                "scrab_id"=> "67560",
                "descripcion" => "Cola de rape grande ALIGATOR",
                "link" => "https://www.compraonline.alcampo.es/products/ALIGATOR-Cola-de-rape-grande-ALIGATOR-800-gr/67560",
                    ]);

$p30205 = DB::table("productos")->where("name","Pez espada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/372dbbd7e21cd444dd8ef2b9051d7d44.jpg?fit=crop&h=500&w=500",
                "peso" => 200,
                "scrab_id"=> "24345",
                "descripcion" => "Rodaja de emperador",
                "link" => "https://tienda.mercadona.es/product/24345/rodaja-emperador-hacendado-ultracongelado-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/696042_00_1.jpg",
                "peso" => 300,
                "scrab_id"=> "R-VC4AECOMM-696042",
                "descripcion" => "Rodaja de pez espada",
                "link" => "https://www.carrefour.es/supermercado/rodaja-de-pez-espada-congelada-300-g-aprox/R-VC4AECOMM-696042/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202011/19/00118910500968____8__600x600.jpg",
                "peso" => 240,
                "scrab_id"=> "0110118910500968",
                "descripcion" => "Pez espada DELFIN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910500968-delfin-pez-espada-2-piezas-bolsa-225-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/175857/175857_ISO_0_ES.jpg?imwidth=392",
                "peso" => 475,
                "scrab_id"=> "175857",
                "descripcion" => "Rodajas de emperador",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/175857",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30205,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30205,
                "supermercado_id"=> $alcampo,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);

$p30206 = DB::table("productos")->where("name","Lomos de salmón")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/82acc6b4864bf7d956da33cbabc25ddc.jpg?fit=crop&h=500&w=500",
                "peso" => 250,
                "scrab_id"=> "24511",
                "descripcion" => "Lomos de salmón sin piel y sin espinas",
                "link" => "https://tienda.mercadona.es/product/24511/lomos-salmon-sin-piel-sin-espinas-hacendado-congelado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/951180_00_1.jpg",
                "peso" => 300,
                "scrab_id"=> "R-820613818",
                "descripcion" => "Lomo de salmón",
                "link" => "https://www.carrefour.es/supermercado/lomo-de-salmon-carrefour-3x100-g/R-820613818/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202202/28/00118910502071____2__1200x1200.jpg",
                "peso" => 250,
                "scrab_id"=> "0110118910502071",
                "descripcion" => "Lomos de salmon PESCANOVA",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910502071-pescanova-lomos-de-salmon-envase-250-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/274390/274390_ISO_0_ES.jpg?imwidth=392",
                "peso" => 250,
                "scrab_id"=> "274390",
                "descripcion" => "Lomos de salmon",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/274390",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30206,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/25500901_x.jpg",
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25500901-lomos-de-salmon-noruego-sin-piel-altamar-bandeja-250-g/",
                "descripcion" => "Lomos de salmón noruego sin piel ALTAMAR",
                "link" => "https://supermercado.eroski.es/es/productdetail/25500901-lomos-de-salmon-noruego-sin-piel-altamar-bandeja-250-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30206,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8c4f871f-fe89-4ef0-b580-fbf705145f98/500x500.jpg",
                "peso" => 400,
                "scrab_id"=> "226027",
                "descripcion" => "Filete de salmón salvaje DIMAR",
                "link" => "https://www.compraonline.alcampo.es/products/dimar-filete-congelado-de-salm%C3%B3n-salvaje-dimar-400-g/226027",
                    ]);

$p30207 = DB::table("productos")->where("name","Filete de lenguado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/395afcd1e845e7ea21b4689f53f22241.jpg?fit=crop&h=500&w=500",
                "peso" => 600,
                "scrab_id"=> "62029",
                "descripcion" => "Lenguado negro entero",
                "link" => "https://tienda.mercadona.es/product/62029/lenguado-negro-entero-hacendado-ultracongelado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202103/05/00118910501669____3__600x600.jpg",
                "peso" => 180,
                "scrab_id"=> "0110118910501669",
                "descripcion" => "Filete de lenguado DELFIN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118910501669-delfin-filete-de-lenguado-estuche-180-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30207,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30207,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/abc7e002-3e2e-4778-8490-d729df487162/500x500.jpg",
                "peso" => 800,
                "scrab_id"=> "533907",
                "descripcion" => "Lenguado del cabo",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Lenguado-del-cabo-ultracongelado-AUCHAN-600-g/533907",
                    ]);

$p30208 = DB::table("productos")->where("name","Gambas peladas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/f3db1e076702d2ec8c9dbedd0f56f044.jpg?fit=crop&h=500&w=500",
                "peso" => 360,
                "scrab_id"=> "24181",
                "descripcion" => "Gamba pelada cruda tamaño mediano",
                "link" => "https://tienda.mercadona.es/product/24181/gamba-pelada-cruda-tamano-mediano-hacendado-ultracongelada-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/124457_00_1.jpg",
                "peso" => 400,
                "scrab_id"=> "R-prod72159",
                "descripcion" => "Gambas salvajes peladas crudas",
                "link" => "https://www.carrefour.es/supermercado/gambas-salvajes-peladas-crudas-carrefour-400-g/R-prod72159/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202312/18/00118939400778____9__600x600.jpg",
                "peso" => 400,
                "scrab_id"=> "0110118939400778",
                "descripcion" => "Gambas peladas 50-55 piezas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118939400778-el-corte-ingles-gamba-pelada-50-55-piezas-bolsa-400-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/269059/269059_ISO_0_ES.jpg?imwidth=392",
                "peso" => 350,
                "scrab_id"=> "269059",
                "descripcion" => "Gambas peladas medianas 70/90 piezas",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/269059",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30208,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/17816141_x.jpg",
                "peso" => 320,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17816141-gamba-pelada-mediana-eroski-basic-bolsa-320-g/",
                "descripcion" => "Gamba pelada mediana",
                "link" => "https://supermercado.eroski.es/es/productdetail/17816141-gamba-pelada-mediana-eroski-basic-bolsa-320-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30208,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/1fa56227-9c51-4b2d-9f6a-4c224c84f34e/500x500.jpg",
                "peso" => 700,
                "scrab_id"=> "68673",
                "descripcion" => "Gambas peladas 220/440",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Gambas-crudas-peladas-220-440-y-ultracongeladas-PRODUCTO-ECON%C3%93MICO-ALCAMPO-700-g/68673",
                    ]);

$p30209 = DB::table("productos")->where("name","Mejillón sin concha")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/66640d7da31e16fffb74264af5bd7c02.jpg?fit=crop&h=300&w=300",
                "peso" => 275,
                "scrab_id"=> "62396",
                "descripcion" => "Carne de mejillon de Chile cocido",
                "link" => "https://tienda.mercadona.es/product/62396/carne-mejillon-chile-cocido-hacendado-ultracongelado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/278930_00_1.jpg",
                "peso" => 400,
                "scrab_id"=> "R-522714764",
                "descripcion" => "Carne de mejillon cocido 80/120",
                "link" => "https://www.carrefour.es/supermercado/carne-de-mejillon-cocido-80-120-classic-carrefour-400-g/R-522714764/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/26/00118911001263____9__1200x1200.jpg",
                "peso" => 180,
                "scrab_id"=> "0110118911001263",
                "descripcion" => "Carne de mejillon natural DELFIN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118911001263-delfin-carne-de-mejillon-natural-envase-180-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/233107/233107_ISO_0_ES.jpg?imwidth=392",
                "peso" => 250,
                "scrab_id"=> "233107",
                "descripcion" => "Carne de mejillon cocido",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/233107",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30209,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/12170734_x.jpg",
                "peso" => 360,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12170734-carne-de-mejillon-leiro-bandeja-360-g/",
                "descripcion" => "Carne de mejillon LEIRO",
                "link" => "https://supermercado.eroski.es/es/productdetail/12170734-carne-de-mejillon-leiro-bandeja-360-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30209,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ab25d429-e2cb-4915-995d-615102588953/500x500.jpg",
                "peso" => 250,
                "scrab_id"=> "67910",
                "descripcion" => "Carne de mejillon de Chile cocida DELFIN",
                "link" => "https://www.compraonline.alcampo.es/products/DELF%C3%8DN-Carne-de-mejill%C3%B3n-de-Chile-cocida-y-ultracongelada-DELF%C3%8DN-250-g/67910",
                    ]);

$p30210 = DB::table("productos")->where("name","Langostino crudo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/34a0e5f922f46847df0cea3a6c0dbb34.jpg",
                "peso" => 600,
                "scrab_id"=> "24712",
                "descripcion" => "Langostino crudo",
                "link" => "https://tienda.mercadona.es/product/24712/langostino-crudo-ultracongelado-caja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/799826_00_1.jpg",
                "peso" => 800,
                "scrab_id"=> "R-521031182",
                "descripcion" => "Langostino crudo",
                "link" => "https://www.carrefour.es/supermercado/langostino-crudo-carrefour-800-g/R-521031182/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202312/19/00118938900596____15__600x600.jpg",
                "peso" => 800,
                "scrab_id"=> "0110118938902030",
                "descripcion" => "Langostino crudo 43-48 piezas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118938900596-el-corte-ingles-langostino-crudo-43-48-piezas-estuche-1000-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/47405/47405_ISO_0_ES.jpg",
                "peso" => 800,
                "scrab_id"=> "47405",
                "descripcion" => "Langostino crudo grande 32/48 piezas",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/47405",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30210,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16550501_x.jpg",
                "peso" => 700,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16550501-langostino-crudo-3542-eroski-basic-caja-700-g/",
                "descripcion" => "Langostino crudo 35/42",
                "link" => "https://supermercado.eroski.es/es/productdetail/16550501-langostino-crudo-3542-eroski-basic-caja-700-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30210,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/29032f43-a25e-49fb-bbf5-17144728b5fe/500x500.jpg",
                "peso" => 700,
                "scrab_id"=> "67732",
                "descripcion" => "Langostinos medianos 35/45 crudos",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Langostinos-medianos-35-45-crudos-y-ultracongelados-PRODUCTO-ALCAMPO-700-g-P-N/67732",
                    ]);

$p30211 = DB::table("productos")->where("name","Anillas de pota")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/74bb5e68f4415013d30547d41fcdc7c7.jpg",
                "peso" => 360,
                "scrab_id"=> "24249",
                "descripcion" => "Anillas de pota",
                "link" => "https://tienda.mercadona.es/product/24249/anillas-pota-hacendado-congeladas-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/819258_00_1.jpg",
                "peso" => 450,
                "scrab_id"=> "R-649302141",
                "descripcion" => "Anilla de pota argentina",
                "link" => "https://www.carrefour.es/supermercado/anillas-de-pota-argentina-carrefour-450-g/R-649302141/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202006/10/00118911002279____11__1200x1200.jpg",
                "peso" => 300,
                "scrab_id"=> "0110118911002279",
                "descripcion" => "Anillas de pota DELFIN",
                "link" => "https://www.elcorteingles.es/supermercado/0110118911002279-delfin-anillas-de-pota-bolsa-300-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/286538/286538_ISO_0_ES.jpg",
                "peso" => 350,
                "scrab_id"=> "286538",
                "descripcion" => "Anillas de pota argentina con agua añadida",
                "link" => "https://www.dia.es/congelados/pescado-y-marisco/p/286538",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30211,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/11011277_x.jpg",
                "peso" => 425,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11011277-anillas-de-pota-eroski-bolsa-425-g/",
                "descripcion" => "Anillas de pota argentina",
                "link" => "https://supermercado.eroski.es/es/productdetail/11011277-anillas-de-pota-eroski-bolsa-425-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30211,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/0a86af68-f1a8-4fec-940f-e1d1241f1689/500x500.jpg",
                "peso" => 300,
                "scrab_id"=> "60753",
                "descripcion" => "Anillas de poton del Pacífico cruda DELFIN",
                "link" => "https://www.compraonline.alcampo.es/products/DELF%C3%8DN-Anilla-de-pot%C3%B3n-del-pac%C3%ADfico-cruda-y-ultracongelada-DELF%C3%8DN-300-g/60753",
                    ]);

$p30301 = DB::table("productos")->where("name","Almeja / Chirla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/d18ab239e4562ecceb295b9c7dfd0b5a.jpg",
                "peso" => 500,
                "scrab_id"=> "81443",
                "descripcion" => "Chirla",
                "link" => "https://tienda.mercadona.es/product/81443/chirla-malla",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201912/19/00118253000105____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118253000105",
                "descripcion" => "Chirlas",
                "link" => "https://www.elcorteingles.es/supermercado/0110118253000105-chirlas/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30301,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/20166674_x.jpg",
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20166674-chirla-bolsa-500-g/",
                "descripcion" => "Chirla",
                "link" => "https://supermercado.eroski.es/es/productdetail/20166674-chirla-bolsa-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30301,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a7c53048-8943-4e3b-966c-dc919e6128d3/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "73974",
                "descripcion" => "Chirla",
                "link" => "https://www.compraonline.alcampo.es/products/Chirla-malla-500-g/73974",
                    ]);

$p30302 = DB::table("productos")->where("name","Pulpo cocido")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/794a3a064c63198441c9d549ca3e568d.jpg",
                "peso" => 250,
                "scrab_id"=> "87770",
                "descripcion" => "Patas de pulpo cocidas",
                "link" => "https://tienda.mercadona.es/product/87770/patas-pulpo-cocido-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/534228_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-534228",
                "descripcion" => "Pata de pulpo cocida",
                "link" => "https://www.carrefour.es/supermercado/pata-de-pulpo-cocido-carrefour-el-mercado-250-g/R-VC4AECOMM-534228/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202109/08/00118284700012____6__1200x1200.jpg",
                "peso" => 600,
                "scrab_id"=> "0110118284700012",
                "descripcion" => "Pulpo cocido COCIMAR",
                "link" => "https://www.elcorteingles.es/supermercado/0110118284700012-cocimar-pulpo-cocido-peso-aproximado-pieza-500-700-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/269304/269304_ISO_0_ES.jpg",
                "peso" => 250,
                "scrab_id"=> "269304",
                "descripcion" => "Pata de pulpo cocido",
                "link" => "https://www.dia.es/pescados-mariscos-y-ahumados/mariscos/p/269304",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30302,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/8492761_x.jpg",
                "peso" => 200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8492761-patas-de-pulpo-cocido-eroski-bandeja-200-g/",
                "descripcion" => "Patas de pulpo cocido",
                "link"=> "https://supermercado.eroski.es/es/productdetail/8492761-patas-de-pulpo-cocido-eroski-bandeja-200-g/",

                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30302,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ce18c17d-6a0c-402a-ad4b-d94bef54e9f1/500x500.jpg",
                "peso" => 250,
                "scrab_id"=> "644921",
                "descripcion" => "Patas de pulpo cocidas",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Patas-de-pulpo-cocidas-PRODUCTO-ALCAMPO-250-g/644921",
                    ]);

$p30303 = DB::table("productos")->where("name","Calamar entero")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/fb936f4d2ca93ce6b9d97ffc9533e2e9.jpg",
                "peso" => 300,
                "scrab_id"=> "87191",
                "descripcion" => "Calamar pequeño limpio patagónico",
                "link" => "https://tienda.mercadona.es/product/87191/calamar-pequeno-limpio-patagonico-bandeja",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/073735_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-073735",
                "descripcion" => "Calamar patagónico",
                "link" => "https://www.carrefour.es/supermercado/calamar-patagonico-1-kg-aprox/R-VC4AECOMM-073735/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118257700247____2__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118257700247",
                "descripcion" => "Calamar elaborado",
                "link" => "https://www.elcorteingles.es/supermercado/0110118257700247-calamar-elaborado-peso-aproximado-pieza-500-700-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30303,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/25809609_x.jpg",
                "peso" => 300,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25809609-calamar-patagonico-freskibo-bandeja-300-g/",
                "descripcion" => "Calamar patagónico FRESKIBO",
                "link"=> "https://supermercado.eroski.es/es/productdetail/25809609-calamar-patagonico-freskibo-bandeja-300-g/",

                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30303,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/11795de9-ab75-488e-97e3-7b7821e72a99/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "72863",
                "descripcion" => "Calamar",
                "link" => "https://www.compraonline.alcampo.es/products/calamar/72863",
                    ]);

$p30304 = DB::table("productos")->where("name","Mejillones")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/d0c718ceb8046667b4fd6a4aad7b8ba7.jpg",
                "peso" => 1000,
                "scrab_id"=> "81467",
                "descripcion" => "Mejillón",
                "link" => "https://tienda.mercadona.es/product/81467/mejillon-malla"
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $carrefour,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                // "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/960710_00_1.jpg",
                // "peso" => 1000,
                // "scrab_id"=> "R-826601274",
                // "descripcion" => "Mejillón vivo fresco AGUINAMAR",
                // "link" => "https://www.carrefour.es/supermercado/mejillon-vivo-fresco-gourmet-ecologico-aguinamar-1-kg/R-826601274/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202308/28/00118253200101____5__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118253200101",
                "descripcion" => "Mejillón gallego extra",
                "link" => "https://www.elcorteingles.es/supermercado/0110118253200101-mejillon-gallego-extra-bolsa-1-kg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $dia,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30304,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/13748652_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13748652-mejillon-especial-30-40-bolsa-1-kg/",
                "descripcion" => "Mejillón especial",
                "link" => "https://supermercado.eroski.es/es/productdetail/13748652-mejillon-especial-30-40-bolsa-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30304,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/9cd233aa-1ae7-454a-8f71-9767c14c112f/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "73625",
                "descripcion" => "Mejillones",
                "link" => "https://www.compraonline.alcampo.es/products/Mejillones-malla-1-kg/73625",

                    ]);

$p30305 = DB::table("productos")->where("name","Langostinos cocidos")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/33fd232f1fa40e8a7ba37dbb8891a877.jpg",
                "peso" => 600,
                "scrab_id"=> "87271",
                "descripcion"=> "Langostino cocido",
                "link" => "https://tienda.mercadona.es/product/87271/langostino-cocido-bandeja",

                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/391617_00_2.jpg",
                "peso" => 500,
                "scrab_id"=> "R-530102403",
                "descripcion" => "Langostino cocido 30/40",
                "link" => "https://www.carrefour.es/supermercado/langostino-cocido-30-40-ud-500-g-aprox/R-530102403/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/12/00118254400478____1__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118254400049",
                "descripcion" => "Langostino cocido ASC 30/40",
                "link" => "https://www.elcorteingles.es/supermercado/0110118254400478-langostino-cocido-asc-30-40-pzaskg/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/117788/117788_FRO_0_ES.jpg",
                "peso" => 400,
                "scrab_id"=> "117788",
                "descripcion" => "Langostino cocido",
                "link" => "https://www.dia.es/pescados-mariscos-y-ahumados/mariscos/p/117788",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30305,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16478299_x.jpg",
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16478299-langostino-cocido-calibre-3040-eroski-bandeja-450-g/",
                "descripcion" => "Langostino cocido calibre 30/40",
                "link" => "https://supermercado.eroski.es/es/productdetail/16478299-langostino-cocido-calibre-3040-eroski-bandeja-450-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30305,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/cb2aff72-8f04-40b0-9023-4b004d7fc0fc/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "74490",
                "descripcion" => "Langostino cocido calibre 30/40",
                "link" => "https://www.compraonline.alcampo.es/products/Langostino-cocidos-calibre-30-40/74490",
                    ]);

$p30401 = DB::table("productos")->where("name","Atún en aceite girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/a11fb0855fc30224e3a36be5c697cf87.jpg",
                "peso" => 360,
                "scrab_id"=> "18055",
                "descripcion"=> "Atún claro aceite girasol",
                "link" => "https://tienda.mercadona.es/product/18055/atun-claro-aceite-girasol-hacendado-pack-6",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/827717_00_1.jpg",
                "peso" => 312,
                "scrab_id"=> "R-prod460682",
                "descripcion"=> "Atún en aceite de girasol",
                "link" => "",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202310/23/00118013200847____3__1200x1200.jpg",
                "peso" => 336,
                "scrab_id"=> "0110118013200847",
                "descripcion"=> "Atún claro en aceite de girasol",
                "link" => "https://www.elcorteingles.es/supermercado/0110118013200847-el-corte-ingles-atun-claro-en-aceite-de-girasol-pack-6-lata-80-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/262430/262430_ISO_0_ES.jpg",
                "peso" => 312,
                "scrab_id"=> "262430",
                "descripcion"=> "Atún en aceite de girasol",
                "link" => "https://www.dia.es/conservas-caldos-y-cremas/atun-bonito-y-caballa/p/262430",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30401,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30401,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ff496aa7-4b5b-48ce-8d9a-7a0d5f6415b9/500x500.jpg",
                "peso" => 312,
                "scrab_id"=> "26028",
                "descripcion"=> "Atún claro en aceite de girasol",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-at%C3%BAn-claro-en-aceite-de-girasol-lata-de-52-g-pack-de-6-uds/26028",
                    ]);

$p30402 = DB::table("productos")->where("name","Mejillones en escabeche")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b505b72886e1b681463d7f1d8a7b6dd4.jpg",
                "peso" => 212,
                "scrab_id"=> "18615",
                "descripcion" => "Mejillones en escabeche pequeños",
                "link" => "https://tienda.mercadona.es/product/18615/mejillones-escabeche-hacendado-pequenos-pack-2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/370329_00_1.jpg",
                "peso" => 129,
                "scrab_id"=> "R-618405050",
                "descripcion" => "Mejillones en escabeche 16/20",
                "link" => "https://www.carrefour.es/supermercado/mejillones-en-escabeche-16-20-classic-carrefour-sin-gluten-pack-de-3-unidades-de-43-g/R-618405050/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202402/16/00118015101456____6__1200x1200.jpg",
                "peso" => 129,
                "scrab_id"=> "0110118015101456",
                "descripcion" => "Mejillones de Chile en escabeche",
                "link" => "https://www.elcorteingles.es/supermercado/0110118015101456-el-corte-ingles-mejillones-de-chile-en-escabeche-sin-gluten-13-18-piezas-pack-3-lata-43-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/50597/50597_ISO_0_ES.jpg",
                "peso" => 129,
                "scrab_id"=> "50597",
                "descripcion" => "Mejillones en escabeche",
                "link" => "https://www.dia.es/conservas-caldos-y-cremas/mejillones/p/50597",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30402,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/14882971_x.jpg",
                "peso" => 129,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14882971-mejillon-en-escabeche-eroski-pack-3x80-g/",
                "descripcion" => "Mejillones en escabeche",
                "link" => "https://supermercado.eroski.es/es/productdetail/14882971-mejillon-en-escabeche-eroski-pack-3x80-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30402,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/504b1aea-55e9-45d5-addb-dd088fe4e4db/500x500.jpg",
                "peso" => 129,
                "scrab_id"=> "22597",
                "descripcion" => "Mejillones escabeche",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-mejillones-escabeche-lata-de-43-g-pack-de-3-uds/22597",
                    ]);

$p30403 = DB::table("productos")->where("name","Anchoas en aceite oliva")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/8171455f30ce725f844a35ee92b06850.jpg",
                "peso" => 29,
                "scrab_id"=> "18400",
                "descripcion" => "Filetes de anchoa en aceite de oliva",
                "link" => "https://tienda.mercadona.es/product/18400/filetes-anchoa-aceite-oliva-hacendado-lata",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/231483_00_1.jpg",
                "peso" => 30,
                "scrab_id"=> "R-521029304",
                "descripcion" => "Filetes de anchoa en aceite de oliva",
                "link" => "https://www.carrefour.es/supermercado/filetes-de-anchoa-en-aceite-de-oliva-carrefour-30-g/R-521029304/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202108/26/00118010801308____4__1200x1200.jpg",
                "peso" => 29,
                "scrab_id"=> "0110118010801308",
                "descripcion" => "Filetes de anchoa en aceite de oliva",
                "link" => "https://www.elcorteingles.es/supermercado/0110118010801308-el-corte-ingles-filetes-de-anchoa-en-aceite-de-oliva-lata-29-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/293675/293675_ISO_0_ES.jpg",
                "peso" => 29,
                "scrab_id"=> "293675",
                "descripcion" => "Filetes de anchoa en aceite de oliva",
                "link" => "https://www.dia.es/pescados-mariscos-y-ahumados/ahumados-salazones-y-preparados/p/293675",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30403,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/8934903_x.jpg",
                "peso" => 23,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8934903-anchoa-en-aceite-de-oliva-eroski-lata-23-g/",
                "descripcion" => "Anchoa en aceite de oliva",
                "link" => "https://supermercado.eroski.es/es/productdetail/8934903-anchoa-en-aceite-de-oliva-eroski-lata-23-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30403,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/94487bf1-2e11-4d5a-9977-5f5057edd8b5/500x500.jpg",
                "peso" => 29,
                "scrab_id"=> "510755",
                "descripcion" => "Filetes de anchoa Pesca Sostenible con aceite de oliva arbequina",
                "link" => "https://www.compraonline.alcampo.es/products/alcampo-gourmet-filetes-de-anchoa-en-aceite-de-oliva-virgen-arbequina-msc-pesca-sostenible-certificada-alcampo-gourmet-lata-p-e-29-g/510755",
                    ]);

$p30404 = DB::table("productos")->where("name","Sardinillas en aceite girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b067d6e61fc697bd05c30e6ffd6982b3.jpg",
                "peso" =>  130,
                "scrab_id"=> "18213",
                "descripcion" => "Sardinillas en aceite girasol",
                "link" => "https://tienda.mercadona.es/product/18213/sardinillas-aceite-girasol-hacendado-6-12-ud-pack-2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/839318_00_1.jpg",
                "peso" => 130,
                "scrab_id"=> "R-prod590535",
                "descripcion" => "Sardinillas en aceite girasol",
                "link" => "https://www.carrefour.es/supermercado/sardinillas-en-aceite-de-girasol-classic-carrefour-pack-de-2-unidades-de-65-g/R-prod590535/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/129042/129042_ISO_0_ES.jpg",
                "peso" => 130,
                "scrab_id"=> "129042",
                "descripcion" => "Sardinillas en aceite de girasol",
                "link" => "https://www.dia.es/conservas-caldos-y-cremas/sardinas-y-sardinillas/p/129042",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30404,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/5864855_x.jpg",
                "peso" => 84,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5864855-sardina-en-aceite-de-girasol-eroski-basic-lata-115-g/",
                "descripcion" => "Sardina en aceite de girasol",
                "link" => "https://supermercado.eroski.es/es/productdetail/5864855-sardina-en-aceite-de-girasol-eroski-basic-lata-115-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30404,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a527a75d-1a3a-4735-9893-953fab543632/500x500.jpg",
                "peso" => 65,
                "scrab_id"=> "59661",
                "descripcion" => "Sardinillas en aceite de girasol",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-sardinillas-en-aceite-de-girasol-lata-65-g/59661",
                    ]);

$p30405 = DB::table("productos")->where("name","Bonito del norte en Aceite Oliva")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/fb673ab27bfe30ff000710135f01e472.jpg",
                "peso" =>  146,
                "scrab_id"=> "18116",
                "descripcion" => "Bonito del norte en aceite de Oliva",
                "link" => "https://tienda.mercadona.es/product/18116/bonito-norte-aceite-oliva-hacendado-pack-2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/842848_00_1.jpg",
                "peso" => 156,
                "scrab_id"=> "R-prod630003",
                "descripcion" => "Bonito del norte en aceite de oliva",
                "link" => "https://www.carrefour.es/supermercado/bonito-del-norte-en-aceite-de-oliva-carrefour-pack-de-3-latas-de-52-g/R-prod630003/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202310/23/00118012701381____6__1200x1200.jpg",
                "peso" => 73,
                "scrab_id"=> "0110118012701381",
                "descripcion" => "Bonito del norte en aceite de oliva",
                "link" => "https://www.elcorteingles.es/supermercado/0110118012701381-el-corte-ingles-bonito-del-norte-en-aceite-de-oliva-lata-73-g-neto-escurrido/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/29395/29395_ISO_0_ES.jpg",
                "peso" => 73,
                "scrab_id"=> "29395",
                "descripcion" => "Bonito del norte en aceite de oliva",
                "link" => "https://www.dia.es/conservas-caldos-y-cremas/atun-bonito-y-caballa/p/29395",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30405,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/280271_x.jpg",
                "peso" => 73,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/280271-bonito-en-aceite-de-oliva-eroski-lata-111-g/",
                "descripcion" => "Bonito en aceite de oliva",
                "link" => "https://supermercado.eroski.es/es/productdetail/280271-bonito-en-aceite-de-oliva-eroski-lata-111-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30405,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8588f232-a0e6-4800-9694-7563c35706a5/500x500.jpg",
                "peso" => 73,
                "scrab_id"=> "23149",
                "descripcion" => "Bonito del norte en aceite de oliva",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Bonito-del-norte-en-aceite-de-oliva-lata-73-g/23149",
                    ]);

$p40101 = DB::table("productos")->where("name","Leche entera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/3631d0a515de4e1ac9237295370bf394.jpg",
                "peso" =>  1000,
                "scrab_id"=> "10380",
                "descripcion" => "Leche entera brik",
                "link" => "https://tienda.mercadona.es/product/10380/leche-entera-hacendado-brick",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/231395_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-521006992",
                "descripcion" => "Leche entera brik",
                "link" => "https://www.carrefour.es/supermercado/leche-entera-carrefour-brik-1-l/R-521006992/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/08/00120912100268____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110120616500219",
                "descripcion" => "Leche entera de Galicia brik",
                "link" => "https://www.elcorteingles.es/supermercado/0110120616500219-el-corte-ingles-leche-entera-de-galicia-brik-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/608/608_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "608",
                "descripcion" => "Leche entera brik",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/leche/p/608",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40101,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/18672295_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672295-leche-entera-del-pais-vasco-eroski-brik-1-litro/",
                "descripcion" => "Leche entera del Pais Vasco brik",
                "link" => "https://supermercado.eroski.es/es/productdetail/18672295-leche-entera-del-pais-vasco-eroski-brik-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40101,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/86488366-f6ae-4c0c-8528-db49cc1de625/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "53540",
                "descripcion" => "Leche entera de vaca brik",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Leche-entera-de-vaca-1-l/53540",
                    ]);

$p40102 = DB::table("productos")->where("name","Leche semidesnatada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/075eed0c2fdca44051b78b3ff2366a01.jpg",
                "peso" =>  1000,
                "scrab_id"=> "10382",
                "descripcion" => "Leche semidesnatada brik",
                "link" => "https://tienda.mercadona.es/product/10382/leche-semidesnatada-hacendado-brick",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/231394_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-521007071",
                "descripcion" => "Leche semidesnatada brik",
                "link" => "https://www.carrefour.es/supermercado/leche-semidesnatada-carrefour-brik-1-l/R-521007071/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/26/00120912200233____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110120616600191",
                "descripcion" => "Leche semidesnata de Galicia brik",
                "link" => "https://www.elcorteingles.es/supermercado/0110120616600191-el-corte-ingles-leche-semidesnatada-de-galicia-brik-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/504/504_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "504",
                "descripcion" => "Leche semidesnatada brik",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/leche/p/504",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40102,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/18672311_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672311-leche-semidesnatada-del-pais-vasco-eroski-brik-1-litro/",
                "descripcion" => "Leche semidesnatada del Pais Vasco brik",
                "link" => "https://supermercado.eroski.es/es/productdetail/18672311-leche-semidesnatada-del-pais-vasco-eroski-brik-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40102,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/0bd59017-7e74-452e-913f-cd5b8fff6f6f/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "53549",
                "descripcion" => "Leche semidesnatada de vaca brik",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Leche-semidesnatada-de-vaca-1-l/53549",
                    ]);

$p40103 = DB::table("productos")->where("name","Leche desnatada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/d1df90671044f2bfe464b666ef0cb142.jpg",
                "peso" =>  1000,
                "scrab_id"=> "10384",
                "descripcion" => "Leche desnatada brik",
                "link" => "https://tienda.mercadona.es/product/10384/leche-desnatada-hacendado-brick",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/231393_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-705740",
                "descripcion" => "Leche desnatada brik",
                "link" => "https://www.carrefour.es/supermercado/leche-desnatada-carrefour-brik-1-l/R-521007093/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/26/00120912300207____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110120616700173",
                "descripcion" => "Leche desnatada de Galicia brik",
                "link" => "https://www.elcorteingles.es/supermercado/0110120616700173-el-corte-ingles-leche-desnatada-de-galicia-brik-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/607/607_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "607",
                "descripcion" => "Leche desnatada brik",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/leche/p/607",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40103,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/18672337_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672337-leche-desnatada-del-pais-vasco-eroski-brik-1-litro/",
                "descripcion" => "Leche desnatada del Pais Vasco brik",
                "link" => "https://supermercado.eroski.es/es/productdetail/18672337-leche-desnatada-del-pais-vasco-eroski-brik-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40103,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/77088330-413e-451e-98c4-a287254ab873/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "53542",
                "descripcion" => "Leche desnatada de vaca brik",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Leche-desnatada-de-vaca-1-l/53542",
                    ]);

$p40201 = DB::table("productos")->where("name","Arroz con leche")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/77fb12bb953c198252ec03a8c0631b68.jpg",
                "peso" =>  520,
                "scrab_id"=> "68354",
                "descripcion" => "Arroz con leche pack 4",
                "link" => "https://tienda.mercadona.es/product/68354/arroz-con-leche-hacendado-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/440130_00_1.jpg",
                "peso" => 460,
                "scrab_id"=> "R-VC4AECOMM-440130",
                "descripcion" => "Arroz con leche pack 4",
                "link" => "https://www.carrefour.es/supermercado/arroz-con-leche-carrefour-pack-de-4-unidades-de-115-g/R-VC4AECOMM-440130/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202108/16/00118823700515____4__1200x1200.jpg",
                "peso" => 520,
                "scrab_id"=> "0110118823700515",
                "descripcion" => "Arroz con leche pack 4",
                "link" => "https://www.elcorteingles.es/supermercado/0110118823700515-el-corte-ingles-arroz-con-leche-sin-gluten-pack-4-unidades-130-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/85630/85630_ISO_0_ES.jpg",
                "peso" =>  520,
                "scrab_id"=> "85630",
                "descripcion" => "Arroz con leche con canela pack 4",
                "link" => "https://www.dia.es/yogures-y-postres/arroz-con-leche-y-postre-tradicional/p/85630",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40201,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/23606841_x.jpg",
                "peso" => 520,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23606841-arroz-con-leche-eroski-pack-4x130-g/",
                "descripcion" => "Arroz con leche pack 4",
                "link" => "https://supermercado.eroski.es/es/productdetail/23606841-arroz-con-leche-eroski-pack-4x130-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40201,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/07fa96b1-9c0d-46ed-8632-716a80d65c23/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "90478",
                "descripcion" => "Arroz con leche pack 4",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Arroz-con-leche-4-x-125-g/90478",
                    ]);

$p40202 = DB::table("productos")->where("name","Flan de huevo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/9cc6b2406ab6256514d2069bfe34e0f2.jpg",
                "peso" =>  400,
                "scrab_id"=> "68149",
                "descripcion" => "Flan de huevo pack 4",
                "link" => "https://tienda.mercadona.es/product/68149/flan-huevo-hacendado-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/233299_00_1.jpg",
                "peso" => 400,
                "scrab_id"=> "R-521029829",
                "descripcion" => "Flan de huevo al baño Maria pack 4",
                "link" => "https://www.carrefour.es/supermercado/flan-de-huevo-al-bano-maria-carrefour-classic-sin-gluten-pack-de-4-unidades-de-100-g/R-521029829/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201610/05/00118820801076____1__600x600.jpg",
                "peso" => 400,
                "scrab_id"=> "0110118820801076",
                "descripcion" => "Flan de huevo pack 4",
                "link" => "https://www.elcorteingles.es/supermercado/0110118820801076-el-corte-ingles-flan-de-huevo-pack-4-unidades-100-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/3387/3387_ISO_0_ES.jpg?imwidth=392",
                "peso" =>  400,
                "scrab_id"=> "3387",
                "descripcion" => "Flan de huevo con caramelo pack 4",
                "link" => "https://www.dia.es/yogures-y-postres/natillas-y-flan/p/3387",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40202,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/20118360_x.jpg",
                "peso" => 480,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20118360-flan-de-huevo-eroski-pack-4x100-g/",
                "descripcion" => "Flan de huevo pack 4",
                "link" => "https://supermercado.eroski.es/es/productdetail/20118360-flan-de-huevo-eroski-pack-4x100-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40202,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/319c3369-aabc-4fef-ba3a-0d91b1c6d623/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "52919",
                "descripcion" => "Flan de huevo al baño María elaborado con huevos frescos pack 4",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Flan-de-huevo-al-ba%C3%B1o-maria-elaborado-con-huevos-frescos-4-x-100-g/52919",
                    ]);

$p40203 = DB::table("productos")->where("name","Flan de vainilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/a12e4b298aeaaed778b1effd7c8b844e.jpg",
                "peso" =>  600,
                "scrab_id"=> "68106",
                "descripcion" => "Flan sabor Vainilla con caramelo pack 6",
                "link" => "https://tienda.mercadona.es/product/68106/flan-vainilla-con-caramelo-hacendado-pack-6",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/350960_00_1.jpg",
                "peso" => 600,
                "scrab_id"=> "R-VC4AECOMM-350960",
                "descripcion" => "Flan sabor Vainilla con caramelo pack 6",
                "link" => "https://www.carrefour.es/supermercado/flan-sabor-vainilla-con-caramelo-carrefour-sin-gluten-pack-de-6-unidades-de-100-g/R-VC4AECOMM-350960/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201702/13/00118820801084____1__600x600.jpg",
                "peso" => 400,
                "scrab_id"=> "0110118820801084",
                "descripcion" => "Flan sabor Vainilla pack 4",
                "link" => "https://www.elcorteingles.es/supermercado/0110118820801084-el-corte-ingles-flan-de-vainilla-sin-gluten-pack-4-unidades-100-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/105814/105814_ISO_0_ES.jpg",
                "peso" =>  600,
                "scrab_id"=> "105814",
                "descripcion" => "Flan sabor Vainilla pack 6",
                "link" => "https://www.dia.es/yogures-y-postres/natillas-y-flan/p/105814",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40203,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/13228671_x.jpg",
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13228671-flan-de-vainilla-eroski-basic-pack-6x100-g/",
                "descripcion" => "Flan sabor Vainilla pack 6",
                "link" => "https://supermercado.eroski.es/es/productdetail/13228671-flan-de-vainilla-eroski-basic-pack-6x100-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40203,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/43a54afd-e10b-4392-ac9d-d15cc8306a0a/500x500.jpg",
                "peso" => 600,
                "scrab_id"=> "90995",
                "descripcion" => "Flan sabor Vainilla pack 6",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Flan-con-sabor-a-vainilla-PRODUCTO-ECON%C3%93MICO-ALCAMPO-6-x-100-g/90995",
                    ]);

$p40204 = DB::table("productos")->where("name","Natillas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b189eabedf2ba4d7e0c901306f465e92.jpg",
                "peso" =>  500,
                "scrab_id"=> "68137",
                "descripcion" => "Natillas de vainilla pack 4",
                "link" => "https://tienda.mercadona.es/product/68137/natillas-sabor-vainilla-hacendado-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/971662_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-835176181",
                "descripcion" => "Natillas de vainilla pack 4",
                "link" => "https://www.carrefour.es/supermercado/natillas-de-vainilla-carrefour-classic-pack-de-4-unidades-de-125-g/R-835176181/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201608/17/00118820701953____1__600x600.jpg",
                "peso" => 500,
                "scrab_id"=> "0110118820701953",
                "descripcion" => "Natillas de vainilla pack 4",
                "link" => "https://www.elcorteingles.es/supermercado/0110118820701953-el-corte-ingles-natillas-de-vainilla-pack-4-unidades-125-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/129000/129000_ISO_0_ES.jpg",
                "peso" =>  750,
                "scrab_id"=> "129000",
                "descripcion" => "Natillas de vainilla pack 6",
                "link" => "https://www.dia.es/yogures-y-postres/natillas-y-flan/p/129000",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40204,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/17416157_x.jpg",
                "peso" => 480,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17416157-natillas-de-vainilla-eroski-pack-4x120-g/",
                "descripcion" => "Natillas de vainilla pack 4",
                "link" => "https://supermercado.eroski.es/es/productdetail/17416157-natillas-de-vainilla-eroski-pack-4x120-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40204,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/2d6713a9-9cf2-4e0c-9ab7-46305b223d53/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "52081",
                "descripcion" => "Natillas de vainilla pack 4",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-natillas-con-sabor-a-vainilla-4-x-125-g/52081",
                    ]);

$p40205 = DB::table("productos")->where("name","Yogur bebible fresa y plátano")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/a4a866cae37a8bd6b92746f8a36c8be3.jpg",
                "peso" =>  1000,
                "scrab_id"=> "20613",
                "descripcion" => "Bebida láctea fresa y plátano 1L",
                "link" => "https://tienda.mercadona.es/product/20613/bebida-lactea-fresa-platano-hacendado-botella",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/256890_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-prod300427",
                "descripcion" => "Yogur liquido fresa y plátano 1L",
                "link" => "https://www.carrefour.es/supermercado/yogur-liquido-fresa-y-platano-carrefour-classicsin-gluten-1-kg/R-prod300427/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202209/19/00118820503169____3__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118820503169",
                "descripcion" => "Yogur liquido fresa y plátano 1L",
                "link" => "https://www.elcorteingles.es/supermercado/0110118820503169-el-corte-ingles-yogur-liquido-con-fresa-y-platano-sin-gluten-botella-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/254923/254923_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "254923",
                "descripcion" => "Yogur liquido fresa y plátano 1L",
                "link" => "https://www.dia.es/yogures-y-postres/yogures-de-sabores-y-frutas/p/254923",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40205,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/21812524_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21812524-yogur-liquido-de-fresa-platano-eroski-botella-1-litro/",
                "descripcion" => "Yogur liquido fresa y plátano 1L",
                "link" => "https://supermercado.eroski.es/es/productdetail/21812524-yogur-liquido-de-fresa-platano-eroski-botella-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40205,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/82701405-6861-4948-ad24-d94d3999f13e/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "50449",
                "descripcion" => "Yogur liquido fresa y plátano 1L",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-yogur-l%C3%ADquido-semidesnatado-para-beber-con-pulpa-de-fresa-y-pl%C3%A1tano-1-l/50449",
                    ]);

$p40206 = DB::table("productos")->where("name","Yogur natural")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/2808dcefb83f2873d66fcd3d3bb45cc3.jpg",
                "peso" =>  750,
                "scrab_id"=> "22313",
                "descripcion" => "Yogur natural pack",
                "link" => "https://tienda.mercadona.es/product/22313/yogur-natural-hacendado-pack-6",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/737854_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-737854",
                "descripcion" => "Yogur natural pack",
                "link" => "https://www.carrefour.es/supermercado/yogur-natural-carrefour-classic-pack-de-4-unidades-de-125-g/R-VC4AECOMM-737854/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201905/07/00118820101873____6__600x600.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118820101303",
                "descripcion" => "Yogur natural pack",
                "link" => "https://www.elcorteingles.es/supermercado/0110118820101873-el-corte-ingles-yogur-natural-pack-8-unidades-125-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/272536/272536_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "272536",
                "descripcion" => "Yogur natural pack",
                "link" => "https://www.dia.es/yogures-y-postres/yogures-naturales/p/272536",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40206,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/24593691_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24593691-yogur-natural-pais-vasco-eroski-pack-4x125-g/",
                "descripcion" => "Yogur natural Pais Vasco pack",
                "link" => "https://supermercado.eroski.es/es/productdetail/24593691-yogur-natural-pais-vasco-eroski-pack-4x125-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40206,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/307defb7-3e13-49a5-a700-4882536ad05a/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "51414",
                "descripcion" => "Yogur natural pack",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-yogur-natural-4-x-125-g/51414",
                    ]);

$p40207 = DB::table("productos")->where("name","Yogur sabores")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/a3ee0c2ad42204899ded9d3ab163fb78.jpg",
                "peso" =>  500,
                "scrab_id"=> "20040",
                "descripcion" => "Yogur con sabor a fresa pack",
                "link" => "https://tienda.mercadona.es/product/20040/yogur-sabor-fresa-hacendado-pack-4",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/372922_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-372922",
                "descripcion" => "Yogur con sabor a fresa pack",
                "link" => "https://www.carrefour.es/supermercado/yogur-sabor-fresa-carrefour-classic-pack-de-4-unidades-de-125-g/R-VC4AECOMM-372922/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/5114/5114_ISO_0_ES.jpg",
                "peso" =>  500,
                "scrab_id"=> "5114",
                "descripcion" => "Yogur con sabor a fresa pack",
                "link" => "https://www.dia.es/yogures-y-postres/yogures-de-sabores-y-frutas/p/5114",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40207,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/24593725_x.jpg",
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24593725-yogur-sabor-fresa-pais-vasco-eroski-pack-4x125-g/",
                "descripcion" => "Yogur con sabor a fresa Pais Vasco pack",
                "link" => "https://supermercado.eroski.es/es/productdetail/24593725-yogur-sabor-fresa-pais-vasco-eroski-pack-4x125-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40207,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c7211394-2ff8-47e4-96cb-e9ad1f076732/500x500.jpg",
                "peso" => 500,
                "scrab_id"=> "51420",
                "descripcion" => "Yogur con sabor a fresa pack",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-yogur-con-sabor-a-fresa-4-x-125-g/51420",
                    ]);

$p40208 = DB::table("productos")->where("name","Nata montada (spray)")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/dcc2d5837e97562c1301d8fc9da8e89b.jpg",
                "peso" =>  250,
                "scrab_id"=> "86818",
                "descripcion" => "Nata montada CHANTILLY",
                "link" => "https://tienda.mercadona.es/product/86818/nata-montada-azucarada-chantilly-spray",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/881965_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-787879747",
                "descripcion" => "Nata montada azucarada ligera",
                "link" => "https://www.carrefour.es/supermercado/nata-montada-azucarada-ligera-carrefour-spray-250-g/R-787879747/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202306/20/00120911900296____7__1200x1200.jpg",
                "peso" => 250,
                "scrab_id"=> "0110120616300230",
                "descripcion" => "Nata montada ligera ASTURIANA",
                "link" => "https://www.elcorteingles.es/supermercado/0110120616300230-asturiana-nata-montada-ligera-spray-250-ml/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/63568/63568_ISO_0_ES.jpg",
                "peso" =>  250,
                "scrab_id"=> "63568",
                "descripcion" => "Nata en spray",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/nata/p/63568",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40208,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/18023218_x.jpg",
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18023218-nata-eroski-spray-250-g/",
                "descripcion" => "Nata spray",
                "link" => "https://supermercado.eroski.es/es/productdetail/18023218-nata-eroski-spray-250-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40208,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b9112756-33cc-4c86-8690-6e205ad89f83/500x500.jpg",
                "peso" => 250,
                "scrab_id"=> "50471",
                "descripcion" => "Nata montada ligera ASTURIANA",
                "link" => "https://www.compraonline.alcampo.es/products/central-lechera-asturiana-nata-montada-ligera-en-spray-central-lechera-asturiana-250-g/50471",
                    ]);

$p40301 = DB::table("productos")->where("name","Queso fresco")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/5428d9c279f6d99873d565f029c916d2.jpg",
                "peso" =>  250,
                "scrab_id"=> "51191",
                "descripcion" => "Queso fresco de vaca",
                "link" => "https://tienda.mercadona.es/product/51191/queso-fresco-vaca-hacendado-tarrina",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/673663_00_2.jpg",
                "peso" => 250,
                "scrab_id"=> "R-618303487",
                "descripcion" => "Queso fresco tradicional",
                "link" => "https://www.carrefour.es/supermercado/queso-fresco-tradicional-carrefour-250-g/R-618303487/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201609/22/00118382100867____1__600x600.jpg",
                "peso" => 250,
                "scrab_id"=> "0110118382100867",
                "descripcion" => "Queso fresco tipo Burgos",
                "link" => "https://www.elcorteingles.es/supermercado/0110118382100867-el-corte-ingles-queso-fresco-natural-pack-4-x-6250-g-envase-250-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/115196/115196_ISO_0_ES.jpg",
                "peso" =>  250,
                "scrab_id"=> "115196",
                "descripcion" => "Queso fresco vaca",
                "link" => "https://www.dia.es/charcuteria-y-quesos/queso-fresco/p/115196",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40301,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/6704118_x.jpg",
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6704118-queso-fresco-de-burgos-eroski-tarrina-250-g/",
                "descripcion" => "Queso fresco de Burgos",
                "link" => "https://supermercado.eroski.es/es/productdetail/6704118-queso-fresco-de-burgos-eroski-tarrina-250-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40301,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/fa115c8b-b1bd-45a3-b000-6fa91b0302bb/500x500.jpg",
                "peso" => 250,
                "scrab_id"=> "51026",
                "descripcion" => "Queso blanco pausterizado",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Queso-fresco-PRODUCTO-ALCAMPO-4-uds-62-5-g/51026",
                    ]);

$p40302 = DB::table("productos")->where("name","Queso curado de oveja")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/ddf8f72498165132206de1b7561e59b9.jpg",
                "peso" =>  380,
                "scrab_id"=> "50970",
                "descripcion" => "Queso viejo de oveja",
                "link" => "https://tienda.mercadona.es/product/50970/queso-viejo-oveja-hacendado-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/104885_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-104885",
                "descripcion" => "Queso de oveja curado",
                "link" => "https://www.carrefour.es/supermercado/queso-de-oveja-curado-classic-carrefour-cuna-250-g/R-VC4AECOMM-104885/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202107/02/00118389400419____3__1200x1200.jpg",
                "peso" => 300,
                "scrab_id"=> "0110118389400419",
                "descripcion" => "Queso curado de oveja",
                "link" => "https://www.elcorteingles.es/supermercado/0110118389400419-el-corte-ingles-queso-curado-de-oveja-elaborado-con-leche-cruda-cuna-300-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/290782/290782_ISO_0_ES.jpg",
                "peso" =>  250,
                "scrab_id"=> "290782",
                "descripcion" => "Queso de oveja curado",
                "link" => "https://www.dia.es/charcuteria-y-quesos/queso-curado-semicurado-y-tierno/p/290782",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40302,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/16457632_x.jpg",
                "peso" => 330,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16457632-queso-curado-de-oveja-eroski-cuna-330-g/",
                "descripcion" => "Queso curado de oveja",
                "link" => "https://supermercado.eroski.es/es/productdetail/16457632-queso-curado-de-oveja-eroski-cuna-330-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40302,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/9274c9c3-7245-47ba-bc8b-73fcf5fd13bc/500x500.jpg",
                "peso" => 300,
                "scrab_id"=> "97673",
                "descripcion" => "Queso de oveja curado",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Queso-de-oveja-curado-PRODUCTO-ALCAMPO-300-g/97673",
                    ]);

$p40303 = DB::table("productos")->where("name","Queso semicurado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/5db97a425d333927affc0b18e1ef014b.jpg",
                "peso" =>  420,
                "scrab_id"=> "50943",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://tienda.mercadona.es/product/50943/queso-semicurado-mezcla-hacendado-pieza",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/675133_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-675133",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://www.carrefour.es/supermercado/queso-de-mezcla-semicurado-carrefour-classic-cuna-de-500-g-aprox/R-VC4AECOMM-675133/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202111/04/00118389600257____9__1200x1200.jpg",
                "peso" => 250,
                "scrab_id"=> "0110118389600257",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://www.elcorteingles.es/supermercado/0110118389600257-el-corte-ingles-selection-queso-semicurado-mezcla-madurado-graso-elaborado-con-leche-pasteurizada-cuna-250-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/263378/263378_ISO_0_ES.jpg",
                "peso" =>  300,
                "scrab_id"=> "263378",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://www.dia.es/charcuteria-y-quesos/queso-curado-semicurado-y-tierno/p/263378",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40303,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/12765947_x.jpg",
                "peso" => 375,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12765947-queso-semicurado-eroski-basic-cuna-375-g/",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://supermercado.eroski.es/es/productdetail/12765947-queso-semicurado-eroski-basic-cuna-375-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40303,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/0b386481-f167-408a-b10b-5254cb8550ca/500x500.jpg",
                "peso" => 300,
                "scrab_id"=> "97812",
                "descripcion" => "Queso de mezcla semicurado",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ECON%C3%93MICO-ALCAMPO-Queso-mezcla-semicurado-PRODUCTO-ECON%C3%93MICO-ALCAMPO-300-g/97812",
                    ]);

$p40304 = DB::table("productos")->where("name","Queso Mozarella rayado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/78c2ab6019d6ae5ef8934ee4a10cef80.jpg",
                "peso" =>  200,
                "scrab_id"=> "51110",
                "descripcion" => "Queso Mozzarella rallado PIZZA-ROMA",
                "link" => "https://tienda.mercadona.es/product/51110/queso-rallado-mozzarella-pizza-roma-vaca-hacendado-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/710785_00_1.jpg",
                "peso" => 200,
                "scrab_id"=> "R-521030768",
                "descripcion" => "Queso Mozzarella rallado",
                "link" => "https://www.carrefour.es/supermercado/queso-rallado-mozzarella-carrefour-200-g/R-521030768/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201701/20/00118395400411____1__600x600.jpg",
                "peso" => 200,
                "scrab_id"=> "0110118395400411",
                "descripcion" => "Queso Mozzarella rallado",
                "link" => "https://www.elcorteingles.es/supermercado/0110118395400411-el-corte-ingles-queso-mozzarella-rallada-de-vaca-elaborado-con-leche-pasteurizada-bolsa-200-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/13096/13096_ISO_0_ES.jpg",
                "peso" =>  200,
                "scrab_id"=> "13096",
                "descripcion" => "Queso Mozzarella rallado",
                "link" => "https://www.dia.es/charcuteria-y-quesos/queso-curado-semicurado-y-tierno/p/13096",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40304,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/24928525_x.jpg",
                "peso" => 200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24928525-queso-rallado-mozzarella-para-pizza-eroski-bolsa-200-g/",
                "descripcion" => "Queso Mozzarella rallado",
                "link" => "https://supermercado.eroski.es/es/productdetail/24928525-queso-rallado-mozzarella-para-pizza-eroski-bolsa-200-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40304,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5c3af3fc-beab-4449-8abe-c8ae690a444b/500x500.jpg",
                "peso" => 200,
                "scrab_id"=> "51626",
                "descripcion" => "Queso Mozzarella rallado",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-queso-mozzarella-rallado-especial-pizzas-producto-alcampo-200-g/51626",
                    ]);

$p40401 = DB::table("productos")->where("name","Huevos M")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/29f98aef604438a19c846bb57cad283c.jpg",
                "peso" =>  12,
                "scrab_id"=> "31505",
                "descripcion" => "Huevos medianos de gallina",
                "link" => "https://tienda.mercadona.es/product/31505/huevos-medianos-m-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/307935_00_1.jpg",
                "peso" => 12,
                "scrab_id"=> "R-VC4AECOMM-307935",
                "descripcion" => "Huevos medianos de gallina",
                "link" => "https://www.carrefour.es/supermercado/huevos-de-gallinas-criadas-en-suelo-carrefour-el-mercado-12-ud/R-VC4AECOMM-307935/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/11/00118840000139____6__1200x1200.jpg",
                "peso" => 12,
                "scrab_id"=> "0110118840000139",
                "descripcion" => "Huevos medianos de gallina criadas en suelo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118840000139-el-corte-ingles-huevos-de-gallinas-criadas-en-suelo-categoria-a-clase-m-estuche-12-unidades/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/14636/14636_ISO_0_ES.jpg",
                "peso" =>  12,
                "scrab_id"=> "14636",
                "descripcion" => "Huevos medianos de gallina",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/huevos/p/14636",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40401,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/19482116_x.jpg",
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19482116-huevo-fresco-m-suelo-eroski-carton-1-docena/",
                "descripcion" => "Huevos medianos de gallina suelo",
                "link" => "https://supermercado.eroski.es/es/productdetail/19482116-huevo-fresco-m-suelo-eroski-carton-1-docena/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40401,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/1130dad7-dd04-493b-b01a-945dece820e7/500x500.jpg",
                "peso" => 12,
                "scrab_id"=> "804418",
                "descripcion" => "Huevos medianos de gallina criadas en suelo",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Huevos-frescos-de-gallinas-criadas-en-suelo-clase-M-y-cat-A-12-uds/804418",
                    ]);

$p40402 = DB::table("productos")->where("name","Huevos L")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/7e482af6b2e6f6ec0845e24bbfdace89.jpg",
                "peso" =>  12,
                "scrab_id"=> "31504",
                "descripcion" => "Huevos grandes L de gallina",
                "link" => "https://tienda.mercadona.es/product/31504/huevos-grandes-l-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/307927_00_1.jpg",
                "peso" => 12,
                "scrab_id"=> "R-VC4AECOMM-307927",
                "descripcion" => "Huevos grandes L de gallina",
                "link" => "https://www.carrefour.es/supermercado/huevos-frescos-carrefour-el-mercado-12-ud/R-VC4AECOMM-307927/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/11/00118840000154____4__1200x1200.jpg",
                "peso" => 12,
                "scrab_id"=> "0110118840000154",
                "descripcion" => "Huevos grandes L de gallinas criadas en el suelo",
                "link" => "https://www.elcorteingles.es/supermercado/0110118840000154-el-corte-ingles-huevos-de-gallinas-criadas-en-suelo-categoria-a-clase-l-estuche-12-unidades/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/14635/14635_FRO_0_ES.jpg",
                "peso" =>  12,
                "scrab_id"=> "14635",
                "descripcion" => "Huevos grandes L de gallina",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/huevos/p/14635",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40402,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/3435047_x.jpg",
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/3435047-huevo-fresco-l-eroski-carton-12-uds/",
                "descripcion" => "Huevos grandes L de gallina",
                "link" => "https://supermercado.eroski.es/es/productdetail/3435047-huevo-fresco-l-eroski-carton-12-uds/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40402,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5d7cdf80-1e9a-4abf-92d7-4823ed4db110/500x500.jpg",
                "peso" => 12,
                "scrab_id"=> "804318",
                "descripcion" => "Huevos grandes L de gallinas criadas en el suelo",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Huevos-frescos-de-gallinas-criadas-en-suelo-clase-L-y-cat-A-12-uds/804318",
                    ]);

$p40403 = DB::table("productos")->where("name","Huevos XL")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/c71842c876cf78ea5d8b95246564edc6.jpg",
                "peso" =>  12,
                "scrab_id"=> "31592",
                "descripcion" => "Huevos extra grandes L-XL de gallina",
                "link" => "https://tienda.mercadona.es/product/31592/huevos-super-grandes-xl-paquete",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/307925_00_1.jpg",
                "peso" => 12,
                "scrab_id"=> "R-VC4AECOMM-307925",
                "descripcion" => "Huevos extra grandes L-XL de gallina",
                "link" => "https://www.carrefour.es/supermercado/huevos-frescos-carrefour-el-mercado-12-ud/R-VC4AECOMM-307925/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202109/08/00118840000147____2__1200x1200.jpg",
                "peso" => 10,
                "scrab_id"=> "0110118840000147",
                "descripcion" => "Huevos extra grandes L-XL de gallina",
                "link" => "https://www.elcorteingles.es/supermercado/0110118840000147-el-corte-ingles-huevos-de-gallinas-criadas-en-suelo-categoria-a-clase-l-xl-estuche-10-unidades/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/216464/216464_ISO_0_ES.jpg",
                "peso" =>  6,
                "scrab_id"=> "216464",
                "descripcion" => "Huevos extra grandes L-XL de gallinas criadas en suelo",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/huevos/p/216464",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40403,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/25540287_x.jpg",
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25540287-huevo-fresco-xl-eroski-carton-12-uds/",
                "descripcion" => "Huevos extra grandes L-XL de gallina",
                "link" => "https://supermercado.eroski.es/es/productdetail/25540287-huevo-fresco-xl-eroski-carton-12-uds/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40403,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f430285a-a118-49d2-986d-dfd63ad231e8/500x500.jpg",
                "peso" => 12,
                "scrab_id"=> "765110",
                "descripcion" => "Huevos extra grandes L-XL de gallina criadas en suelo",
                "link" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f430285a-a118-49d2-986d-dfd63ad231e8/500x500.jpg",
                    ]);

$p50101 = DB::table("productos")->where("name","Girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/38334513c2db1608117eb6c2759439f2.jpg",
                "peso" =>  1000,
                "scrab_id"=> "4040",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://tienda.mercadona.es/product/4040/aceite-girasol-refinado-02o-hacendado-botella",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/277385_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-521009768",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://www.carrefour.es/supermercado/aceite-de-girasol-carrefour-classic-1-l/R-521009768/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202012/22/00120904100185____7__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118046000099",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://www.elcorteingles.es/supermercado/0110118046000099-el-corte-ingles-aceite-refinado-de-girasol-botella-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/101/101_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "101",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://www.dia.es/aceites-salsas-y-especias/aceites/p/101",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50101,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/377150_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/377150-aceite-de-girasol-eroski-botella-1-litro/",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://supermercado.eroski.es/es/productdetail/377150-aceite-de-girasol-eroski-botella-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50101,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/dc30d530-6128-4b3e-b6ce-4bb5d6433a4c/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "19818",
                "descripcion" => "Aceite refinado de girasol",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceite-de-girasol-botella-de-1-l/19818",
                    ]);

$p50102 = DB::table("productos")->where("name","Oliva intenso")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/b57ae00beedb23ec86686fa3651fd448.jpg",
                "peso" =>  1000,
                "scrab_id"=> "4640",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://tienda.mercadona.es/product/4640/aceite-oliva-1o-hacendado-botella",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/128222_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-526600670",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://www.carrefour.es/supermercado/aceite-de-oliva-intenso-1-carrefour-1-l/R-526600670/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202401/08/00120903000196____13__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118044900084",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://www.elcorteingles.es/supermercado/0110118044900084-el-corte-ingles-aceite-de-oliva-intenso-1-contiene-aceites-refinados-y-virgenes-botella-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/105/105_ISO_0_ES.jpg?imwidth=392",
                "peso" =>  1000,
                "scrab_id"=> "105",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://www.dia.es/aceites-salsas-y-especias/aceites/p/105",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50102,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/377044_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/377044-aceite-de-oliva-1-eroski-botella-1-litro/",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://supermercado.eroski.es/es/productdetail/377044-aceite-de-oliva-1-eroski-botella-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50102,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/675ab46f-ec99-4ddd-971e-24da9c328d80/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "19830",
                "descripcion" => "Aceite de oliva intenso con aceite refinado",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceite-de-oliva-intenso-botella-de-1-l/19830",
                    ]);

$p50103 = DB::table("productos")->where("name","Oliva virgen")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/7a14986c6a536dcd485b8bb8b8e24e33.jpg",
                "peso" =>  1000,
                "scrab_id"=> "4749",
                "descripcion" => "Aceite de oliva virgen",
                "link" => "https://tienda.mercadona.es/product/4749/aceite-oliva-virgen-hacendado-botella",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/808633_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-639802050",
                "descripcion" => "Aceite de oliva virgen",
                "link" => "https://www.carrefour.es/supermercado/aceite-de-oliva-virgen-carrefour-1-l/R-639802050/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202207/18/00120903700183____1__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118045600048",
                "descripcion" => "Aceite de oliva virgen",
                "link" => "https://www.elcorteingles.es/supermercado/0110118045600048-el-corte-ingles-aceite-de-oliva-virgen-botella-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/216284/216284_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "216284",
                "descripcion" => "Aceite de oliva virgen",
                "link" => "https://www.dia.es/aceites-salsas-y-especias/aceites/p/216284",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50103,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/21028121_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21028121-aceite-de-oliva-virgen-guillen-botella-1-litro/",
                "descripcion" => "Aceite de oliva virgen GUILLEM",
                "link" => "https://supermercado.eroski.es/es/productdetail/21028121-aceite-de-oliva-virgen-guillen-botella-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50103,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/039ba09c-495f-4dd6-bf22-520e52e1e36d/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "220473",
                "descripcion" => "Aceite de oliva virgen",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceite-de-oliva-virgen-de-origen-espa%C3%B1ol-botella-1-l/220473",
                    ]);

$p50104 = DB::table("productos")->where("name","Oliva Virgen Extra")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/e19dbbdcfbd3e756081491ab7b676ffd.jpg",
                "peso" =>  1000,
                "scrab_id"=> "4740",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://tienda.mercadona.es/product/4740/aceite-oliva-virgen-extra-hacendado-botella",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/471213_00_1.jpg",
                "peso" => 1000,
                "scrab_id"=> "R-520660335",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://www.carrefour.es/supermercado/aceite-de-oliva-virgen-extra-carrefour-1-l/R-520660335/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202003/12/00120903900312____20__1200x1200.jpg",
                "peso" => 1000,
                "scrab_id"=> "0110118045800101",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://www.elcorteingles.es/supermercado/0110118045800101-el-corte-ingles-aceite-de-oliva-virgen-extra-botella-1-l/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/112529/112529_ISO_0_ES.jpg",
                "peso" =>  1000,
                "scrab_id"=> "112529",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://www.dia.es/aceites-salsas-y-especias/aceites/p/112529",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50104,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/371658_x.jpg",
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/371658-aceite-de-oliva-virgen-extra-eroski-botella-1-litro/",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://supermercado.eroski.es/es/productdetail/371658-aceite-de-oliva-virgen-extra-eroski-botella-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50104,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d0ea45bc-365b-4288-92d8-a3bca6447a0e/500x500.jpg",
                "peso" => 1000,
                "scrab_id"=> "29834",
                "descripcion" => "Aceite de oliva virgen extra",
                "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceite-de-oliva-virgen-extra-botella-1-l/29834",
                    ]);

$p50201 = DB::table("productos")->where("name","Mantequilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/48232d267bc61b1c1f2d4c7a192fa37f.jpg",
                "peso" =>  250,
                "scrab_id"=> "20716",
                "descripcion" => "Mantequilla sin sal añadida",
                "link" => "https://tienda.mercadona.es/product/20716/mantequilla-sin-sal-anadida-hacendado-pastilla",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/337329_00_1.jpg",
                "peso" => 250,
                "scrab_id"=> "R-fprod1350157",
                "descripcion" => "Mantequilla sin sal añadida",
                "link" => "https://www.carrefour.es/supermercado/mantequilla-pastilla-sin-sal-carrefour-250-g/R-fprod1350157/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $eci,
                "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202006/29/00118815101979____1__1200x1200.jpg",
                "peso" => 250,
                "scrab_id"=> "0110118815101979",
                "descripcion" => "Mantequilla sin sal añadida",
                "link" => "https://www.elcorteingles.es/supermercado/0110118815101979-el-corte-ingles-mantequilla-pastilla-250-g/",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/268201/268201_ISO_0_ES.jpg",
                "peso" =>  250,
                "scrab_id"=> "268201",
                "descripcion" => "Mantequilla sin sal añadida",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/mantequilla-y-margarina/p/268201",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50201,
                "supermercado_id"=> $eroski,
                "img_url" => "https://supermercado.eroski.es/images/15636475_x.jpg",
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15636475-mantequilla-eroski-pastilla-250-g/",
                "descripcion" => "Mantequilla sin sal añadida",
                "link" => "https://supermercado.eroski.es/es/productdetail/15636475-mantequilla-eroski-pastilla-250-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50201,
                "supermercado_id"=> $alcampo,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);

$p50202 = DB::table("productos")->where("name","Margarina")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $mercadona,
                "img_url" => "https://prod-mercadona.imgix.net/images/96365401c2c245884ba496888b95d046.jpg",
                "peso" =>  500,
                "scrab_id"=> "20846",
                "descripcion" => "Margarina",
                "link" => "https://tienda.mercadona.es/product/20846/margarina-hacendado-tarrina",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $carrefour,
                "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/298516_00_1.jpg",
                "peso" => 500,
                "scrab_id"=> "R-prod830327",
                "descripcion" => "Margarina",
                "link" => "https://www.carrefour.es/supermercado/margarina-carrefour-500-g/R-prod830327/p",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $eci,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $dia,
                "img_url" => "https://www.dia.es/product_images/55575/55575_ISO_0_ES.jpg",
                "peso" =>  500,
                "scrab_id"=> "55575",
                "descripcion" => "Margarina",
                "link" => "https://www.dia.es/leche-huevos-y-mantequilla/mantequilla-y-margarina/p/55575",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50202,
                "supermercado_id"=> $eroski,
                "img_url" => NULL,
                "peso" => NULL,
                "scrab_id"=> NULL,
                "descripcion" => NULL,
                "link" => NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50202,
                "supermercado_id"=> $alcampo,
                "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/1538ae62-3ef5-4bef-a386-d5da283423fa/500x500.jpg",
                "peso" => 225,
                "scrab_id"=> "718111",
                "descripcion" => "Margarina",
                "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-tarrina-de-margarina-vegetal-3-4-con-sal-500-g/50026",
                    ]);

$p60101 = DB::table("productos")->where("name","Limones")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $mercadona,
                        "img_url"=> "https://prod-mercadona.imgix.net/images/1172aaa39919acb2929d30dda6942352.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "3236",
                        "descripcion" => "Limones",
                        "link" => "https://tienda.mercadona.es/product/3236/limones-malla",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $carrefour,
                        "img_url"=> "https://static.carrefour.es/hd_510x_/img_pim_food/198883_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-536500245",
                        "descripcion" => "Limones SIMPLY",
                        "link" => "https://www.carrefour.es/supermercado/limon-simply-1-kg/R-536500245/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $eci,
                        "img_url"=> "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202304/24/00118156703144____9__1200x1200.jpg",
                        "peso" => 750,
                        "scrab_id"=> "0110118156703144",
                        "descripcion" => "Limones",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118156703144-el-corte-ingles-limones-malla-750-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $dia,
                        "img_url"=> "https://www.dia.es/product_images/11463/11463_ISO_0_ES.jpg",
                        "peso" =>  750,
                        "scrab_id"=> "11463",
                        "descripcion" => "Limones",
                        "link" => "https://www.dia.es/frutas/limones-y-pomelos/p/11463",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60101,
                        "supermercado_id"=> $eroski,
                        "img_url"=> "https://supermercado.eroski.es/images/10935534_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10935534-limon-malla-1-kg/",
                        "descripcion" => "Limones",
                        "link" => "https://supermercado.eroski.es/es/productdetail/10935534-limon-malla-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60101,
                        "supermercado_id"=> $alcampo,
                        "img_url"=> "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/7f5116a0-067b-4f25-9f1c-8033b7c9d073/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "57781",
                        "descripcion" => "Limones",
                        "link" => "https://www.compraonline.alcampo.es/products/alcampo-cultivamos-lo-bueno-lim%C3%B3n-malla-de-1-kg/57781",
                            ]);

$p60102 = DB::table("productos")->where("name","Naranjas (zumo)")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/45e9468a6928470c2fef4b286fab0ccd.jpg",
                        "peso" =>  3000,
                        "scrab_id"=> "3277",
                        "descripcion" => "Naranajas para zumo",
                        "link" => "https://tienda.mercadona.es/product/3277/naranjas-malla",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/165922_00_1.jpg",
                        "peso" => 4000,
                        "scrab_id"=> "R-VC4AECOMM-165922",
                        "descripcion" => "Naranajas para zumo SIMPLY",
                        "link" => "https://www.carrefour.es/supermercado/naranjas-de-zumo-simpl-4-kg/R-VC4AECOMM-165922/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202304/24/00118156700439____6__1200x1200.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "0110118156700439",
                        "descripcion" => "Naranajas para zumo",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118156700439-el-corte-ingles-naranja-de-zumo-malla-3-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/13627/13627_ISO_0_ES.jpg",
                        "peso" =>  4000,
                        "scrab_id"=> "13627",
                        "descripcion" => "Naranajas para zumo",
                        "link" => "https://www.dia.es/frutas/naranjas-y-mandarinas/p/13627",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60102,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/23760622_x.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23760622-naranja-malla-3-kg/",
                        "descripcion" => "Naranajas para zumo",
                        "link" => "https://supermercado.eroski.es/es/productdetail/23760622-naranja-malla-3-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60102,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/45bc319d-2898-4a03-b9cc-72e3813b3c59/500x500.jpg",
                        "peso" => 1500,
                        "scrab_id"=> "54650",
                        "descripcion" => "Naranajas para zumo",
                        "link" => "https://www.compraonline.alcampo.es/products/Naranjas-de-zumo-malla-1-5-kg/54650",
                            ]);

$p60103 = DB::table("productos")->where("name","Mandarinas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/95edb6c60f13f4f6c82648ebb2aaeaff.jpg",
                        "peso" =>  1500,
                        "scrab_id"=> "30501",
                        "descripcion" => "Mandarinas",
                        "link" => "https://tienda.mercadona.es/product/30501/mandarinas-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/691281_00_1.jpg",
                        "peso" => 1500,
                        "scrab_id"=> "R-575401793",
                        "descripcion" => "Mandarinas",
                        "link" => "https://www.carrefour.es/supermercado/mandarina-malla-15-kg/R-575401793/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202304/24/00118156702344____8__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118156702344",
                        "descripcion" => "Mandarinas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118156702344-el-corte-ingles-mandarina-bolsa-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/11464/11464_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "11464",
                        "descripcion" => "Mandarinas",
                        "link" => "https://www.dia.es/frutas/naranjas-y-mandarinas/p/11464",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60103,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/6155_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6155-mandarina-malla-1-kg/",
                        "descripcion" => "Mandarinas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/6155-mandarina-malla-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60103,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a2ee66eb-e63c-4f08-b3cd-448196386032/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "57509",
                        "descripcion" => "Mandarinas",
                        "link" => "https://www.compraonline.alcampo.es/products/Mandarinas-malla-1-kg/57509",
                            ]);

$p60201 = DB::table("productos")->where("name","Bananas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/69edef3541bbf3f4b7173c9d617a5698.jpg",
                        "peso" =>  170,
                        "scrab_id"=> "3824",
                        "descripcion" => "Bananas",
                        "link" => "https://tienda.mercadona.es/product/3824/banana-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/035834_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-529921745",
                        "descripcion" => "Bananas",
                        "link" => "https://www.carrefour.es/supermercado/banana-a-granel-1-kg-aprox/R-529921745/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201909/26/00118109700015____1__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118109700015",
                        "descripcion" => "Bananas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109700015-banana-al-peso-peso-aproximado-de-la-unidad-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/42070/42070_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "42070",
                        "descripcion" => "Bananas",
                        "link" => "https://www.dia.es/frutas/platanos/p/42070",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60201,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/14382832_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14382832-banana-al-peso-compra-minima-1-kg/",
                        "descripcion" => "Bananas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/14382832-banana-al-peso-compra-minima-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60201,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d31e072b-3526-4f0d-b09d-cbc4c47a218a/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "59772",
                        "descripcion" => "Bananas",
                        "link" => "https://www.compraonline.alcampo.es/products/Banana-a-granel/59772",
                            ]);

$p60202 = DB::table("productos")->where("name","Plátano canario")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/e4a37940916985bf5ca166e266580c37.jpg",
                        "peso" =>  160,
                        "scrab_id"=> "3819",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://tienda.mercadona.es/product/3819/platano-canarias-igp-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/779025_00_2.jpg",
                        "peso" => 1200,
                        "scrab_id"=> "R-VC4AECOMM-779025",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://www.carrefour.es/supermercado/platano-carrefour-12-kg-aprox/R-VC4AECOMM-779025/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202301/24/00118109600041____5__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118109600041",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109600041-platano-igp-de-canarias-al-peso-peso-aproximado-de-la-unidad-135-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/11468/11468_ISO_0_ES.jpg",
                        "peso" =>  1200,
                        "scrab_id"=> "11468",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://www.dia.es/frutas/platanos/p/11468",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60202,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/12069175_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12069175-platano-de-canarias-igp-al-peso-compra-minima-1-kg/",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://supermercado.eroski.es/es/productdetail/12069175-platano-de-canarias-igp-al-peso-compra-minima-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60202,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/fc81e6c8-e2d1-473b-9a12-617dda92dd4f/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "55452",
                        "descripcion" => "Plátano de Canarias",
                        "link" => "https://www.compraonline.alcampo.es/products/pl%C3%A1tano-canario-extra-bolsa/55452",
                            ]);

$p60301 = DB::table("productos")->where("name","Golden")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/0badb0be855ae3b5d11d4750b92c765b.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "3028",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://tienda.mercadona.es/product/3028/manzana-golden-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/235331_00_2.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-235331",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://www.carrefour.es/supermercado/manzana-golden-carrefour-1-kg-aprox/R-VC4AECOMM-235331/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201812/17/00118105800025____2__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118105800025",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118105800025-manzana-golden-al-peso-peso-aproximado-de-la-unidad-200-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/171233/171233_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "171233",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://www.dia.es/frutas/manzanas/p/171233",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60301,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/11155_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11155-manzana-golden-al-peso-compra-minima-1-kg/",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://supermercado.eroski.es/es/productdetail/11155-manzana-golden-al-peso-compra-minima-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60301,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ff1cfa98-70e8-48fc-8b2b-a94752cf3b32/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "74694",
                        "descripcion" => "Manzana Golden",
                        "link" => "https://www.compraonline.alcampo.es/products/Manzanas-golden-a-granel/74694",
                            ]);

$p60302 = DB::table("productos")->where("name","Roja")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/966d3b08efd621e942126a54e6b81ed4.jpg?fit=crop&h=300&w=300",
                        "peso" =>  280,
                        "scrab_id"=> "8177",
                        "descripcion" => "Manzana roja",
                        "link" => "https://tienda.mercadona.es/product/8177/manzana-roja-dulce-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/261966_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-550003481",
                        "descripcion" => "Manzana roja",
                        "link" => "https://www.carrefour.es/supermercado/manzana-royal-gala-circulo-de-calidad-1-kg-aprox/R-550003481/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118101900126____2__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118101900126",
                        "descripcion" => "Manzana roja",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118101900126-manzana-starking-igp-de-girona-al-peso-peso-aproximado-de-la-unidad-250-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/11466/11466_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "11466",
                        "descripcion" => "Manzana roja",
                        "link" => "https://www.dia.es/frutas/manzanas/p/11466",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60302,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/11452_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11452-manzana-roja-al-peso-compra-minima-1-kg/",
                        "descripcion" => "Manzana roja",
                        "link" => "https://supermercado.eroski.es/es/productdetail/11452-manzana-roja-al-peso-compra-minima-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60302,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b13b58e3-084c-4b20-a4c1-bbbbf9608095/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "56763",
                        "descripcion" => "Manzana roja",
                        "link" => "https://www.compraonline.alcampo.es/products/Manzanas-rojas-1-kg/56763",
                            ]);

$p60401 = DB::table("productos")->where("name","Conferencia")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/ee3e71e5011511764af6ba3edc41f4d2.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "3119",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://tienda.mercadona.es/product/3119/pera-conferencia-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/394510_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-600709236",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://www.carrefour.es/supermercado/pera-conferencia-carrefour-1-kg-aprox/R-600709236/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/27/00118106100037____8__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118106100037",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118106100037-pera-conferencia-al-peso-peso-aproximado-de-la-unidad-250-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/64505/64505_ISO_1_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "64505",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://www.dia.es/frutas/peras/p/64505",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60401,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/17533_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17533-pera-conferencia-cubeta-1-kg/",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17533-pera-conferencia-cubeta-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60401,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b9b84317-7ac3-4569-9898-7f3cf19582cd/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "75965",
                        "descripcion" => "Pera Conferencia",
                        "link" => "https://www.compraonline.alcampo.es/products/Pera-conferencia-a-granel/75965",
                            ]);

$p60402 = DB::table("productos")->where("name","Ercolina")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/8da98219dea475bc1170fe49a9afcbdf.jpg",
                        "peso" =>  80,
                        "scrab_id"=> "3170",
                        "descripcion" => "Pera blanquilla / Ercolini",
                        "link" => "https://tienda.mercadona.es/product/3170/pera-ercolina-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_350x_/img_pim_food/293622_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-581701543",
                        "descripcion" => "Pera blanquilla / Ercolini",
                        "link" => "https://www.carrefour.es/supermercado/pera-blanquilla-carrefour-1-kg-aprox/R-581701543/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/27/00118106100045____3__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118106100045",
                        "descripcion" => "Pera blanquilla / Ercolini",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118106100045-pera-blanquilla-al-peso-peso-aproximado-de-la-unidad-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/278651/278651_ISO_1_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "278651",
                        "descripcion" => "Pera blanquilla / Ercolini",
                        "link" => "https://www.dia.es/frutas/peras/p/278651",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60402,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/16576_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16576-pera-ercolini-al-peso-compra-minima-1-kg/",
                        "descripcion" => "Pera blanquilla / Ercolina",
                        "link" => "https://supermercado.eroski.es/es/productdetail/16576-pera-ercolini-al-peso-compra-minima-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60402,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/51ce89f6-407e-4af2-91ad-45c9f318837d/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "75952",
                        "descripcion" => "Pera blanquilla / Ercolini",
                        "link" => "https://www.compraonline.alcampo.es/products/Pera-ercolini-a-granel/75952",
                            ]);

$p60501 = DB::table("productos")->where("name","Aguacate")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/7d8aa2c77ec2f1adcd38326afd410e31.jpg",
                        "peso" =>  550,
                        "scrab_id"=> "3858",
                        "descripcion" => "Aguacates",
                        "link" => "https://tienda.mercadona.es/product/3858/aguacates-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/074342_00_2.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-854100334",
                        "descripcion" => "Aguacates",
                        "link" => "https://www.carrefour.es/supermercado/aguacate-selecta-500-g/R-854100334/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202307/13/00118156300057____1__1200x1200.jpg",
                        "peso" => 200,
                        "scrab_id"=> "0110118156300057",
                        "descripcion" => "Aguacates",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118156300057-aguacate-unidad-200-g-peso-aproximado/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/220373/220373_ISO_0_ES.jpg",
                        "peso" =>  450,
                        "scrab_id"=> "220373",
                        "descripcion" => "Aguacates",
                        "link" => "https://www.dia.es/frutas/frutas-tropicales/p/220373",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60501,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/18374611_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18374611-aguacate-maduro-al-peso-compra-minima-500-g/",
                        "descripcion" => "Aguacates",
                        "link" => "https://supermercado.eroski.es/es/productdetail/18374611-aguacate-maduro-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60501,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/58893be8-2170-422a-89b9-0bc42502dfca/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "55624",
                        "descripcion" => "Aguacates",
                        "link" => "https://www.compraonline.alcampo.es/products/Aguacates-a-granel/55624",
                            ]);

$p60502 = DB::table("productos")->where("name","Ciruela")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $mercadona,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/781807_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-833311198",
                        "descripcion" => "Ciruelas",
                        "link" => "https://www.carrefour.es/supermercado/ciruela-roja-a-granel-1-kg-aprox/R-833311198/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118105400032____1__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118105400032",
                        "descripcion" => "Ciruelas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118105400032-ciruela-morada-al-peso/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $dia,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60502,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/8384653_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8384653-ciruela-roja-al-peso-compra-minima-500-g/",
                        "descripcion" => "Ciruelas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/8384653-ciruela-roja-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60502,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/e5864ef5-2fff-4340-bb40-c123d3e70df5/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "76023",
                        "descripcion" => "Ciruelas",
                        "link" => "https://www.compraonline.alcampo.es/products/Ciruela-roja-a-granel/76023",
                            ]);

$p60601 = DB::table("productos")->where("name","Manzanilla")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/9c05f2c89e2f3fafdf21f2206ca2a007.jpg",
                        "peso" =>  225,
                        "scrab_id"=> "33114",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://tienda.mercadona.es/product/33114/aceitunas-manzanilla-hacendado-sin-hueso-pack-3",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/488058_00_1.jpg",
                        "peso" => 400,
                        "scrab_id"=> "R-VC4AECOMM-488058",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://www.carrefour.es/supermercado/aceitunas-verdes-manzanilla-sin-hueso-carrefour-400-g/R-VC4AECOMM-488058/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202011/26/00120940402819____2__1200x1200.jpg",
                        "peso" => 210,
                        "scrab_id"=> "0110118040400683",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118040400683-el-corte-ingles-aceitunas-verdes-manzanilla-deshuesadas-envase-210-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/116850/116850_ISO_0_ES.jpg",
                        "peso" =>  225,
                        "scrab_id"=> "116850",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/aceitunas-y-encurtidos/p/116850",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60601,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/15179559_x.jpg",
                        "peso" => 225,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15179559-aceitunas-verdes-sin-hueso-eroski-basic-pack-3x75-g/",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://supermercado.eroski.es/es/productdetail/15179559-aceitunas-verdes-sin-hueso-eroski-basic-pack-3x75-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60601,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c6afc361-3626-4ff0-af2d-79dadeb40982/500x500.jpg",
                        "peso" => 75,
                        "scrab_id"=> "27163",
                        "descripcion" => "Aceitunas manzanilla sin hueso",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceitunas-sin-hueso-manzanilla-sin-hueso-PRODUCTO-ALCAMPO-bolsa-de-75-g/27163",
                            ]);

$p60602 = DB::table("productos")->where("name","Negra")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/f35c5eb1937f554893c9c6f005b7eb49.jpg",
                        "peso" =>  150,
                        "scrab_id"=> "52734",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://tienda.mercadona.es/product/52734/aceitunas-negras-hacendado-sin-hueso-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/488032_00_1.jpg",
                        "peso" => 150,
                        "scrab_id"=> "R-VC4AECOMM-488032",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://www.carrefour.es/supermercado/aceitunas-negras-cacerenas-sin-hueso-carrefour-150-g/R-VC4AECOMM-488032/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201807/19/00120941700336____3__600x600.jpg",
                        "peso" => 150,
                        "scrab_id"=> "0110118040900096",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118040900096-el-corte-ingles-aceitunas-negras-deshuesadas-extra-lata-150-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/142058/142058_ISO_0_ES.jpg",
                        "peso" =>  150,
                        "scrab_id"=> "142058",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/aceitunas-y-encurtidos/p/142058",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60602,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/4291845_x.jpg",
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4291845-aceitunas-negras-sin-hueso-eroski-lata-150-g/",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/4291845-aceitunas-negras-sin-hueso-eroski-lata-150-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60602,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f6ecd67d-f4af-41cc-80cc-b53a1419b27d/500x500.jpg",
                        "peso" => 150,
                        "scrab_id"=> "27116",
                        "descripcion" => "Aceitunas negras deshuesadas",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceitunas-negras-sin-hueso-PRODUCTO-ALCAMPO-150-g/27116",
                            ]);

$p60603 = DB::table("productos")->where("name","Rellena anchoa")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/cc1ca60ef2986c990f6f235afd216148.jpg",
                        "peso" =>  150,
                        "scrab_id"=> "22911",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://tienda.mercadona.es/product/22911/aceitunas-manzanilla-rellenas-anchoa-hacendado-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/441966_00_1.jpg",
                        "peso" => 150,
                        "scrab_id"=> "R-VC4AECOMM-441966",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://www.carrefour.es/supermercado/aceitunas-verdes-rellenas-de-anchoa-carrefour-150-g/R-VC4AECOMM-441966/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202204/11/00120940801127____6__1200x1200.jpg",
                        "peso" => 130,
                        "scrab_id"=> "0110118040600399",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118040600399-el-corte-ingles-aceitunas-rellenas-de-anchoa-lata-130-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/273264/273264_ISO_0_ES.jpg",
                        "peso" =>  150,
                        "scrab_id"=> "273264",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/aceitunas-y-encurtidos/p/273264",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60603,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/16514028_x.jpg",
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16514028-aceitunas-rellenas-de-anchoa-eroski-basic-lata-150-g/",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://supermercado.eroski.es/es/productdetail/16514028-aceitunas-rellenas-de-anchoa-eroski-basic-lata-150-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60603,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f95f6493-4ccd-4c39-9d53-8297b459d7c1/500x500.jpg",
                        "peso" => 150,
                        "scrab_id"=> "27115",
                        "descripcion" => "Aceitunas rellenas de anchoa",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Aceitunas-verdes-manzanilla-rellenas-de-anchoa-PRODUCTO-ALCAMPO-lata-de-150-g/27115",
                            ]);

$p60701 = DB::table("productos")->where("name","Fresas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/541f9e28e57b2897041f060d5fe17728.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "3715",
                        "descripcion" => "Fresón",
                        "link" => "https://tienda.mercadona.es/product/3715/freson-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/035923_00_1.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-521032196",
                        "descripcion" => "Fresón",
                        "link" => "https://www.carrefour.es/supermercado/freson-tarrina-500-g/R-521032196/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201709/25/00118155600184____15__600x600.jpg",
                        "peso" => 400,
                        "scrab_id"=> "0110118155600184",
                        "descripcion" => "Fresón",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118155600184-freson-tarrina-400-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/12254/12254_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "12254",
                        "descripcion" => "Fresón",
                        "link" => "https://www.dia.es/frutas/frutas-de-temporada/p/12254",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60701,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/17640137_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17640137-fresa-bandeja-500-g/",
                        "descripcion" => "Fresón",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17640137-fresa-bandeja-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60701,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/df1e0f90-3b02-41c9-9d55-640f33f9050b/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "72888",
                        "descripcion" => "Fresón",
                        "link" => "https://www.compraonline.alcampo.es/products/Fres%C3%B3n-tarrina-de-500-g/72888",
                            ]);

$p60702 = DB::table("productos")->where("name","Uva blanca")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/7b5610514b8fc646d0a02def291b8b6d.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "3313",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://tienda.mercadona.es/product/3313/uva-blanca-sin-semillas-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/402112_00_2.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-fprod1460464",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://www.carrefour.es/supermercado/uva-blanca-sin-pepitas-carrefour-bandeja-de-500-g/R-fprod1460464/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202006/15/00118158400806____15__600x600.jpg",
                        "peso" => 500,
                        "scrab_id"=> "0110118158400806",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118158400806-sin-peps-uva-blanca-sin-semilla-tarrina-500-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/2672/2672_FRO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "2672",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://www.dia.es/frutas/uvas/p/2672",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60702,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/17778762_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17778762-uva-blanca-sin-semilla-cubeta-500-g/",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17778762-uva-blanca-sin-semilla-cubeta-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60702,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5d30d758-ce25-4c62-9da6-6b85bf53ceea/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "429318",
                        "descripcion" => "Uva blanca sin semilla",
                        "link" => "https://www.compraonline.alcampo.es/products/Uvas-blancas-sin-pepitas-cesta-500-g/429318",
                            ]);

$p60801 = DB::table("productos")->where("name","Kiwi")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/9c08be85d7f7fc1375935f5a09fb896d.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "3832",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://tienda.mercadona.es/product/3832/kiwis-verdes-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/855254_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-prod730834",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://www.carrefour.es/supermercado/kiwi-circulo-de-calidad-a-granel-1-kg-aprox/R-prod730834/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/27/00118109300063____1__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118109300063",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109300063-kiwi-verde-al-peso-peso-aproximado-de-la-unidad-130-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/270541/270541_ISO_0_ES.jpg",
                        "peso" =>  700,
                        "scrab_id"=> "270541",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://www.dia.es/frutas/frutas-tropicales/p/270541",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60801,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/20317509_x.jpg",
                        "peso" => 900,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20317509-kiwi-euskal-baserri-cubeta-900-g/",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://supermercado.eroski.es/es/productdetail/20317509-kiwi-euskal-baserri-cubeta-900-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60801,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/3e26a19e-6f6d-4252-8713-0391e75fda60/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "75101",
                        "descripcion" => "Kiwi verde",
                        "link" => "https://www.compraonline.alcampo.es/products/Kiwis-1-kg/75101",
                            ]);

$p60802 = DB::table("productos")->where("name","Mango")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/1b2fd343be56063400732e9e212256a5.jpeg",
                        "peso" =>  500,
                        "scrab_id"=> "3050",
                        "descripcion" => "Mango",
                        "link" => "https://tienda.mercadona.es/product/3050/mango-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/430552_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-430552",
                        "descripcion" => "Mango",
                        "link" => "https://www.carrefour.es/supermercado/mango-carrefour-a-granel-1-kg-aprox/R-VC4AECOMM-430552/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201709/04/00118105000303____2__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118105000303",
                        "descripcion" => "Mango",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118105000303-mango-sweet-pieza-400-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/166057/166057_ISO_0_ES.jpg",
                        "peso" =>  650,
                        "scrab_id"=> "166057",
                        "descripcion" => "Mango",
                        "link" => "https://www.dia.es/frutas/frutas-tropicales/p/166057",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60802,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/8426736_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8426736-mango-extra-pieza-al-peso-aprox-500-g/",
                        "descripcion" => "Mango",
                        "link" => "https://supermercado.eroski.es/es/productdetail/8426736-mango-extra-pieza-al-peso-aprox-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60802,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/bd0c2424-84b4-44d5-b68e-c165134cf68b/500x500.jpg",
                        "peso" => 800,
                        "scrab_id"=> "55042",
                        "descripcion" => "Mango",
                        "link" => "https://www.compraonline.alcampo.es/products/Mangos-a-granel/55042",
                            ]);

$p60803 = DB::table("productos")->where("name","Melon")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/bd4459355f58bc265a2c6720b688e3c3.jpg",
                        "peso" =>  3620,
                        "scrab_id"=> "3506",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://tienda.mercadona.es/product/3506/melon-piel-sapo-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/035701_00_1.jpg",
                        "peso" => 4000,
                        "scrab_id"=> "R-521032186",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://www.carrefour.es/supermercado/melon-piel-de-sapo-4-kg-aprox/R-521032186/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201606/01/00118106000096____1__600x600.jpg",
                        "peso" => 3500,
                        "scrab_id"=> "0110118106000096",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118106000096-melon-piel-de-sapo-pieza-35-kg-peso-aproximado/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/28887/28887_ISO_0_ES.jpg",
                        "peso" =>  2000,
                        "scrab_id"=> "28887",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://www.dia.es/frutas/frutas-de-temporada/p/28887",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60803,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/16046518_x.jpg",
                        "peso" => 2500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16046518-melon-el-abuelo-pieza-al-peso-aprox-25-kg/",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://supermercado.eroski.es/es/productdetail/16046518-melon-el-abuelo-pieza-al-peso-aprox-25-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60803,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/9222ba20-7bfa-42c1-a51b-1e712a5b3785/500x500.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "57511",
                        "descripcion" => "Melón verde piel de sapo",
                        "link" => "https://www.compraonline.alcampo.es/products/Mel%C3%B3n-verde/57511",
                            ]);

$p60804 = DB::table("productos")->where("name","Piña")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/9dd42248e51d82317d3e48eaa166d56e.jpg?fit=crop&h=300&w=300",
                        "peso" =>  2330,
                        "scrab_id"=> "3076",
                        "descripcion" => "Piña",
                        "link" => "https://tienda.mercadona.es/product/3076/pina-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/181242_00_1.jpg",
                        "peso" => 2500,
                        "scrab_id"=> "R-521032201",
                        "descripcion" => "Piña",
                        "link" => "https://www.carrefour.es/supermercado/pina-golden-ripe-25-kg-aprox/R-521032201/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118109500019____3__600x600.jpg",
                        "peso" => 1800,
                        "scrab_id"=> "0110118109500019",
                        "descripcion" => "Piña",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109500019-pina-de-costa-rica-pieza-18-kg-peso-aproximado/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/190710/190710_ISO_0_ES.jpg",
                        "peso" =>  2000,
                        "scrab_id"=> "190710",
                        "descripcion" => "Piña",
                        "link" => "https://www.dia.es/frutas/frutas-tropicales/p/190710",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60804,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/5848726_x.jpg",
                        "peso" => 1500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5848726-pina-de-centro-america-pieza-al-peso-apox-15-kg/",
                        "descripcion" => "Piña",
                        "link" => "https://supermercado.eroski.es/es/productdetail/5848726-pina-de-centro-america-pieza-al-peso-apox-15-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60804,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/06d43cc9-385c-4c2f-b0ce-28be2234e47a/500x500.jpg",
                        "peso" => 1800,
                        "scrab_id"=> "59024",
                        "descripcion" => "Piña",
                        "link" => "https://www.compraonline.alcampo.es/products/Pi%C3%B1a-entera/59024",
                            ]);

$p60901 = DB::table("productos")->where("name","Almendras crudas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/004f0afb11c32dc0bbbfca6407db1557.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "23575",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://tienda.mercadona.es/product/23575/almendra-natural-hacendado-sin-piel-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/104328_00_1.jpg",
                        "peso" => 200,
                        "scrab_id"=> "R-VC4AECOMM-104328",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://www.carrefour.es/supermercado/almendra-cruda-repelada-simpl-200-g/R-VC4AECOMM-104328/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201808/16/00120968401230____2__600x600.jpg",
                        "peso" => 150,
                        "scrab_id"=> "0110118003100304",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118003100304-el-corte-ingles-almendras-repeladas-crudas-bolsa-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/253837/253837_ISO_0_ES.jpg",
                        "peso" =>  125,
                        "scrab_id"=> "253837",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/frutos-secos/p/253837",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60901,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/12194650_x.jpg",
                        "peso" => 185,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12194650-almendras-crudas-repeladas-eroski-tarrina-185-g/",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/12194650-almendras-crudas-repeladas-eroski-tarrina-185-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60901,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b009fa5e-a36f-416e-8438-323a2634597a/500x500.jpg",
                        "peso" => 150,
                        "scrab_id"=> "521841",
                        "descripcion" => "Almendras crudas peladas",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Almendras-repeladas-PRODUCTO-ALCAMPO-150-g/521841",
                            ]);

$p60902 = DB::table("productos")->where("name","Avellanas tostadas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/2fe6ffcc848dc8e5e28ed47bcec81a4b.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "34025",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://tienda.mercadona.es/product/34025/avellana-tostada-hacendado-0-sal-anadida-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/142330_00_2.jpg",
                        "peso" => 225,
                        "scrab_id"=> "R-prod1070735",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://www.carrefour.es/supermercado/avellana-tostada-sin-sal-carrefour-el-mercado-tarrina-de-225-g/R-prod1070735/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201808/16/00120969800364____2__600x600.jpg",
                        "peso" => 150,
                        "scrab_id"=> "0110118003200054",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118003200054-el-corte-ingles-avellanas-tostadas-sin-gluten-bolsa-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/125616/125616_ISO_0_ES.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "125616",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/frutos-secos/p/125616",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60902,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/12194775_x.jpg",
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12194775-avellanas-tostadas-eroski-tarrina-150-g/",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/12194775-avellanas-tostadas-eroski-tarrina-150-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60902,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/71be9854-2f44-4c5e-99b5-070b305e1cbf/500x500.jpg",
                        "peso" => 175,
                        "scrab_id"=> "521924",
                        "descripcion" => "Avellanas tostadas",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Avellanas-tostadas-PRODUCTO-ALCAMPO-175-g/521924",
                            ]);

$p60903 = DB::table("productos")->where("name","Cacahuetes fritos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/07a2b46548d650635898f0b909dded94.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "34820",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://tienda.mercadona.es/product/34820/cacahuete-frito-con-sal-hacendado-pelado-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/513752_00_1.jpg",
                        "peso" => 200,
                        "scrab_id"=> "R-VC4AECOMM-513752",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://www.carrefour.es/supermercado/cacahuetes-fritos-sin-sal-anadida-carrefour-200-g/R-VC4AECOMM-513752/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201808/08/00120952300943____2__600x600.jpg",
                        "peso" => 150,
                        "scrab_id"=> "0110118003000165",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118003000165-el-corte-ingles-cacahuetes-fritos-y-salados-sin-gluten-bolsa-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/23066/23066_ISO_0_ES.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "23066",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/frutos-secos/p/23066",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60903,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/12194791_x.jpg",
                        "peso" => 200,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12194791-cacahuetes-fritos-eroski-tarrina-200-g/",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://supermercado.eroski.es/es/productdetail/12194791-cacahuetes-fritos-eroski-tarrina-200-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60903,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/127bb1c6-d29d-4b1b-9c54-72997c845bf2/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "522700",
                        "descripcion" => "Cacachuetes fritos pelados",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Cacahuetes-fritos-y-salados-PRODUCTO-ALCAMPO-500-g/522700",
                            ]);

$p60904 = DB::table("productos")->where("name","Pistachos tostados")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/9eea7c9e5920aecbcbd7aa91bc4b77f9.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "86202",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://tienda.mercadona.es/product/86202/pistacho-tostado-hacendado-con-sal-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/800949_00_1.jpg",
                        "peso" => 400,
                        "scrab_id"=> "R-625334196",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://www.carrefour.es/supermercado/pistachos-tostados-y-saldaos-classic-carrefour-400-g/R-625334196/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201808/16/00120970200711____2__600x600.jpg",
                        "peso" => 175,
                        "scrab_id"=> "0110118003400167",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118003400167-el-corte-ingles-pistachos-tostados-y-salados-sin-gluten-bolsa-175-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/271642/271642_ISO_0_ES.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "271642",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/frutos-secos/p/271642",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60904,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/21834460_x.jpg",
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21834460-pistacho-tostado-sin-sal-eroski-bolsa-175-g/",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://supermercado.eroski.es/es/productdetail/21834460-pistacho-tostado-sin-sal-eroski-bolsa-175-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60904,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/69a75c8b-f664-4a91-a287-101810d00aed/500x500.jpg",
                        "peso" => 250,
                        "scrab_id"=> "524521",
                        "descripcion" => "Pistachos tostados",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Pistachos-tostados-y-salados-PRODUCTO-ALCAMPO-250-g/524521",
                            ]);

$p60905 = DB::table("productos")->where("name","Nueces peladas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/de768af5358346867a912d57ec96b69c.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "34024",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://tienda.mercadona.es/product/34024/nuez-natural-hacendado-pelada-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/603846_00_1.jpg",
                        "peso" => 200,
                        "scrab_id"=> "R-521003605",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://www.carrefour.es/supermercado/nueces-sin-cascara-carrefour-200-g/R-521003605/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201808/16/00120968401230____2__600x600.jpg",
                        "peso" => 150,
                        "scrab_id"=> "0110118004100071",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118003100304-el-corte-ingles-almendras-repeladas-crudas-bolsa-150-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/214775/214775_ISO_0_ES.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "214775",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://www.dia.es/patatas-fritas-encurtidos-y-frutos-secos/frutos-secos/p/214775",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60905,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/4171013_x.jpg",
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4171013-nuez-mondada-eroski-bolsa-175-g/",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://supermercado.eroski.es/es/productdetail/4171013-nuez-mondada-eroski-bolsa-175-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60905,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/54568e71-d50b-4ad5-893a-c546211da337/500x500.jpg",
                        "peso" => 200,
                        "scrab_id"=> "523877",
                        "descripcion" => "Nueces sin cáscara",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Nueces-mondadas-PRODUCTO-ALCAMPO-200-g/523877",
                            ]);

$p70101 = DB::table("productos")->where("name","Acelgas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/221d049992006b8662fd9044f98b0138.jpg",
                        "peso" =>  800,
                        "scrab_id"=> "69698",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://tienda.mercadona.es/product/69698/acelgas-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/176736_00_1.jpg",
                        "peso" => 800,
                        "scrab_id"=> "R-521032289",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://www.carrefour.es/supermercado/acelgas-manojo-de-800-g/R-521032289/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/28/00118166800674____1__600x600.jpg",
                        "peso" => 750,
                        "scrab_id"=> "0110118166800674",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118166800674-acelgas-manojo-750-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/215330/215330_ISO_0_ES.jpg",
                        "peso" =>  750,
                        "scrab_id"=> "215330",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://www.dia.es/verduras/otras-verduras/p/215330",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70101,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/14298350_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14298350-acelga-euskal-baserri-manojo-500-g/",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://supermercado.eroski.es/es/productdetail/14298350-acelga-euskal-baserri-manojo-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70101,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/fa2a71d4-a284-4768-84dd-fdaedb6fe5e3/500x500.jpg",
                        "peso" => 750,
                        "scrab_id"=> "56014",
                        "descripcion" => "Acelgas manojo / bolsa",
                        "link" => "https://www.compraonline.alcampo.es/products/Acelgas-manojo-de-750-g-aproximadamente/56014",
                            ]);

$p70102 = DB::table("productos")->where("name","Ajos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/4528ac7ba285c6f04282c093c5189140.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "69298",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://tienda.mercadona.es/product/69298/ajos-morados-malla",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/076258_00_1.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-VC4AECOMM-076258",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://www.carrefour.es/supermercado/ajo-sprint-carrefour-malla-500-g/R-VC4AECOMM-076258/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA02/CONTENIDOS/201409/27/00118176102806____1__600x600.jpg",
                        "peso" => 500,
                        "scrab_id"=> "0110118176102806",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118176102806-huerta-de-carabana-ajo-morado-bolsa-500-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/171596/171596_ISO_0_ES.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "171596",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://www.dia.es/verduras/ajos-cebollas-y-puerros/p/171596",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70102,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/15380470_x.jpg",
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15380470-ajo-blanco-malla-400-g/",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://supermercado.eroski.es/es/productdetail/15380470-ajo-blanco-malla-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70102,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8838b967-6f25-4dd9-b98b-740545df890e/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "56181",
                        "descripcion" => "Ajos blancos / morados",
                        "link" => "https://www.compraonline.alcampo.es/products/ajos-500-g/56181",
                            ]);

$p70103 = DB::table("productos")->where("name","Apio")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/863bb93223549d2a0247eedb36cc8d77.jpg",
                        "peso" =>  660,
                        "scrab_id"=> "69275",
                        "descripcion" => "Apio",
                        "link" => "https://tienda.mercadona.es/product/69275/apio-verde-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/175861_00_1.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-521032335",
                        "descripcion" => "Apio",
                        "link" => "https://www.carrefour.es/supermercado/apio-blanco-500-g/R-521032335/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118166800666____1__600x600.jpg",
                        "peso" => 600,
                        "scrab_id"=> "0110118166800666",
                        "descripcion" => "Apio",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118166800666-apio-verde-manojo-600-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/21242/21242_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "21242",
                        "descripcion" => "Apio",
                        "link" => "https://www.dia.es/verduras/otras-verduras/p/21242",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70103,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/13340575_x.jpg",
                        "peso" => 600,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13340575-apio-verde-local-pieza-al-peso-aprox-600-g/",
                        "descripcion" => "Apio",
                        "link" => "https://supermercado.eroski.es/es/productdetail/13340575-apio-verde-local-pieza-al-peso-aprox-600-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70103,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/2a69a394-c242-4d0d-8066-434a04cb1d4c/500x500.jpg",
                        "peso" => 300,
                        "scrab_id"=> "56118",
                        "descripcion" => "Apio",
                        "link" => "https://www.compraonline.alcampo.es/products/Apio-verde-bandeja-de-300-g/56118",
                            ]);

$p70104 = DB::table("productos")->where("name","Cebolla tubo")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/d950590e426dca5e9531e1ff2809edb4.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "69089",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://tienda.mercadona.es/product/69089/cebollas-malla",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/235457_00_2.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-521032276",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://www.carrefour.es/supermercado/cebolla-carrefour-1-kg/R-521032276/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202402/28/00118176100768____5__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118176100768",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118176100768-cebolla-tradicional-buti-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/191535/191535_ISO_0_ES.jpg",
                        "peso" =>  750,
                        "scrab_id"=> "191535",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://www.dia.es/verduras/ajos-cebollas-y-puerros/p/191535",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70104,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/1934785_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1934785-cebolla-blanca-buti-malla-1-kg/",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://supermercado.eroski.es/es/productdetail/1934785-cebolla-blanca-buti-malla-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70104,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/75cb11df-df65-403b-b57f-4135488b85b4/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "50139",
                        "descripcion" => "Cebolla blanca",
                        "link" => "https://www.compraonline.alcampo.es/products/Cebolla-tubo-1-kg/50139",
                            ]);

$p70105 = DB::table("productos")->where("name","Puerro")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/614ed5d4d4c7fab1d3396f43b17c05e4.jpg",
                        "peso" =>  900,
                        "scrab_id"=> "69411",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://tienda.mercadona.es/product/69411/puerros-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/240832_00_2.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-prod223075",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://www.carrefour.es/supermercado/puerro-circulo-de-calidad-500-g/R-prod223075/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/25/00118176102889____8__1200x1200.jpg",
                        "peso" => 400,
                        "scrab_id"=> "0110118176102889",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118176102889-puerro-manojo-400-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/17230/17230_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "17230",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://www.dia.es/verduras/ajos-cebollas-y-puerros/p/17230",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70105,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/53520_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/53520-puerro-bandeja-500-g/",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://supermercado.eroski.es/es/productdetail/53520-puerro-bandeja-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70105,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/8cb42fbc-7f64-44f6-a3da-d0ad776f2798/500x500.jpg",
                        "peso" => 420,
                        "scrab_id"=> "57265",
                        "descripcion" => "Puerros manojo / bandeja",
                        "link" => "https://www.compraonline.alcampo.es/products/Puerros-bandeja-de-420-g/57265",
                            ]);

$p70106 = DB::table("productos")->where("name","Lechuga iceberg")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/e047afab489d1c6a9ffc9e7da122ce3f.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "68130",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://tienda.mercadona.es/product/68130/lechuga-iceberg-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/235341_00_2.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-fprod1190510",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://www.carrefour.es/supermercado/lechuga-iceberg-carrefour-1-ud/R-fprod1190510/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202307/03/00118165302359____9__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118165302359",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118165302359-lechuga-iceberg-seleccion-1-unidad/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/11462/11462_ISO_0_ES.jpg?imwidth=392",
                        "peso" =>  1000,
                        "scrab_id"=> "11462",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://www.dia.es/verduras/lechuga-escarolas-y-endivias/p/11462",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70106,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/71126_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/71126-lechuga-iceberg-unidad/",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://supermercado.eroski.es/es/productdetail/71126-lechuga-iceberg-unidad/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70106,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c2115627-9e21-4afd-9aac-57ba200d4750/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "53037",
                        "descripcion" => "Lechuga iceberg",
                        "link" => "https://www.compraonline.alcampo.es/products/Lechuga-iceberg/53037",
                            ]);

$p70107 = DB::table("productos")->where("name","Col lombarda")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/7798d5fc27ec9df3b3336c68302e5972.jpg",
                        "peso" =>  1140,
                        "scrab_id"=> "69251",
                        "descripcion" => "Col lombarda",
                        "link" => "https://tienda.mercadona.es/product/69251/col-lombarda-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "",
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118120700069____7__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118120700069",
                        "descripcion" => "Col lombarda",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118120700069-lombarda-pieza-1-kg-peso-aproximado/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/50666/50666_ISO_0_ES.jpg?imwidth=392",
                        "peso" =>  2000,
                        "scrab_id"=> "50666",
                        "descripcion" => "Col lombarda",
                        "link" => "https://www.dia.es/verduras/otras-verduras/p/50666",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70107,
                        "supermercado_id"=> $eroski,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70107,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/2c2e09ee-fae4-4ace-9fbc-0949ffa74ffb/500x500.jpg",
                        "peso" => 2000,
                        "scrab_id"=> "55727",
                        "descripcion" => "Col lombarda",
                        "link" => "https://www.compraonline.alcampo.es/products/Lombarda/55727",
                            ]);

$p70108 = DB::table("productos")->where("name","Zanahorias")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/9be53ec227e952dfc6609061f983c2b8.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "69586",
                        "descripcion" => "Zanahorias bolsa",
                        "link" => "https://tienda.mercadona.es/product/69586/zanahorias-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/235422_00_2.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-fprod1410012",
                        "descripcion" => "Zanahorias bolsa",
                        "link" => "https://www.carrefour.es/supermercado/zanahoria-carrefour-1-kg/R-fprod1410012/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/19/00118176400028____16__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118176400028",
                        "descripcion" => "Zanahorias bolsa TABUENCA",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118176400028-tabuenca-zanahoria-bolsa-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/11421/11421_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "11421",
                        "descripcion" => "Zanahorias bolsa",
                        "link" => "https://www.dia.es/verduras/patatas-y-zanahorias/p/11421",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70108,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/4501508_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4501508-zanahoria-bolsa-1-kg/",
                        "descripcion" => "Zanahorias bolsa",
                        "link" => "https://supermercado.eroski.es/es/productdetail/4501508-zanahoria-bolsa-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70108,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a3639586-fc2b-4fd3-95b3-94bf9e286443/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "73734",
                        "descripcion" => "Zanahorias bolsa",
                        "link" => "https://www.compraonline.alcampo.es/products/Zanahoria-bolsa-de1-kg/73734",
                            ]);

$p70201 = DB::table("productos")->where("name","Tomate ensalada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/ccb2b42ba2bb6a7b692dac6101074709.jpg",
                        "peso" =>  220,
                        "scrab_id"=> "69937",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://tienda.mercadona.es/product/69937/tomate-ensalada-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/050265_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-530067024",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://www.carrefour.es/supermercado/tomate-ensalada-1-kg-aprox/R-530067024/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118107600050____2__600x600.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118107600050",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118107600050-tomate-ensalada-al-peso/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/110/110_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "110",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://www.dia.es/verduras/tomates-pimientos-y-pepinos/p/110",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70201,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/13338397_x.jpg",
                        "peso" => 380,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13338397-tomate-de-ensalada-al-peso-compra-minima-380-g/",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://supermercado.eroski.es/es/productdetail/13338397-tomate-de-ensalada-al-peso-compra-minima-380-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70201,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/5f76cc51-a4c7-4ddb-95df-3ecd9a4a3649/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "57466",
                        "descripcion" => "Tomate ensalada",
                        "link" => "https://www.compraonline.alcampo.es/products/Tomate-ensalada-malla-de-1-kg/57466",
                            ]);

$p70202 = DB::table("productos")->where("name","Calabacin")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/ebbfb6a904fe02ba5a88b02f2be911fd.jpg",
                        "peso" =>  370,
                        "scrab_id"=> "69338",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://tienda.mercadona.es/product/69338/calabacin-verde-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/431967_00_2.jpg",
                        "peso" => 1200,
                        "scrab_id"=> "R-VC4AECOMM-431967",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://www.carrefour.es/supermercado/calabacin-carrefour-a-granel-12-kg-aprox/R-VC4AECOMM-431967/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118109000010____2__600x600.jpg",
                        "peso" => 250,
                        "scrab_id"=> "0110118109000010",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109000010-calabacin-al-peso-peso-aproximado-de-la-unidad-250-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/93/93_ISO_0_ES.jpg",
                        "peso" =>  475,
                        "scrab_id"=> "93",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://www.dia.es/verduras/calabacin-calabaza-y-berenjena/p/93",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70202,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/90712_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/90712-calabacin-verde-al-peso-compra-minima-500-g/",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://supermercado.eroski.es/es/productdetail/90712-calabacin-verde-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70202,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a14dd4c7-ffdd-4d18-81e6-eca88c1f42f5/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "55376",
                        "descripcion" => "Calabacin verde",
                        "link" => "https://www.compraonline.alcampo.es/products/Calabac%C3%ADn-malla-de-1-kg/55376",
                            ]);

$p70203 = DB::table("productos")->where("name","Calabaza")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/d552b586da0854756dd9286994269da9.jpg",
                        "peso" =>  990,
                        "scrab_id"=> "3388",
                        "descripcion" => "Calabaza cacahuete",
                        "link" => "https://tienda.mercadona.es/product/3388/calabaza-cacahuete-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/462664_00_1.jpg",
                        "peso" => 2000,
                        "scrab_id"=> "R-VC4AECOMM-462664",
                        "descripcion" => "Calabaza cacahuete",
                        "link" => "https://www.carrefour.es/supermercado/calabaza-sepallo-carrefour-2-kg-aprox/R-VC4AECOMM-462664/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201911/27/00118165600869____1__1200x1200.jpg",
                        "peso" => 800,
                        "scrab_id"=> "0110118165600869",
                        "descripcion" => "Calabaza cacahuete",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118165600869-peris-calabaza-cacahuete-pieza-800-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/75926/75926_ISO_1_ES.jpg",
                        "peso" =>  1600,
                        "scrab_id"=> "75926",
                        "descripcion" => "Calabaza cacahuete",
                        "link" => "https://www.dia.es/verduras/calabacin-calabaza-y-berenjena/p/75926",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70203,
                        "supermercado_id"=> $eroski,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70203,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a4ab70fe-4b3f-4944-b826-42073c475f42/500x500.jpg",
                        "peso" => 2500,
                        "scrab_id"=> "56119",
                        "descripcion" => "Calabaza cacahuete",
                        "link" => "https://www.compraonline.alcampo.es/products/Calabaza-entera/56119",
                            ]);

$p70204 = DB::table("productos")->where("name","Pepino")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/a1e854648225054f10d2bac80ca7ca98.jpg",
                        "peso" =>  190,
                        "scrab_id"=> "69584",
                        "descripcion" => "Pepino",
                        "link" => "https://tienda.mercadona.es/product/69584/pepino-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/451456_00_2.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-451456",
                        "descripcion" => "Pepino",
                        "link" => "https://www.carrefour.es/supermercado/pepino-carrefour-a-granel-1-kg-aprox/R-VC4AECOMM-451456/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118109100018____2__600x600.jpg",
                        "peso" => 250,
                        "scrab_id"=> "0110118109100018",
                        "descripcion" => "Pepino",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118109100018-pepino-al-peso-peso-aproximado-de-la-unidad-250-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/272355/272355_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "272355",
                        "descripcion" => "Pepino",
                        "link" => "https://www.dia.es/verduras/tomates-pimientos-y-pepinos/p/272355",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70204,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/90514.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/90514-pepino-negro-al-peso-compra-minima-500-g/",
                        "descripcion" => "Pepino",
                        "link" => "https://supermercado.eroski.es/es/productdetail/90514-pepino-negro-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70204,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/70979b28-ad37-4887-9091-f83cca7cc3f4/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "75876",
                        "descripcion" => "Pepino",
                        "link" => "https://www.compraonline.alcampo.es/products/Pepino-corto-a-granel/75876",
                            ]);

$p70205 = DB::table("productos")->where("name","Pimiento verde freir")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/ace6cddb107859b9d019cdd773ffda00.jpg",
                        "peso" =>  120,
                        "scrab_id"=> "69320",
                        "descripcion" => "Pimiento verde",
                        "link" => "https://tienda.mercadona.es/product/69320/pimiento-verde-freir-pieza",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $carrefour,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                        // "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/050257_00_1.jpg",
                        // "peso" => 1000,
                        // "scrab_id"=> "R-536001616",
                        // "descripcion" => "Pimiento verde",
                        // "link" => "https://www.carrefour.es/supermercado/pimiento-verde-italiano-1-kg-aprox/R-536001616/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201811/26/00118107400063____1__600x600.jpg",
                        "peso" => 100,
                        "scrab_id"=> "0110118107400063",
                        "descripcion" => "Pimiento verde",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118107400063-pimiento-verde-de-freir-al-peso-peso-aproximado-de-la-unidad-100-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/116/116_FRO_0_ES.jpg",
                        "peso" =>  300,
                        "scrab_id"=> "116",
                        "descripcion" => "Pimiento verde",
                        "link" => "https://www.dia.es/verduras/tomates-pimientos-y-pepinos/p/116",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70205,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/1867.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1867-pimiento-verde-italiano-al-peso-compra-minima-500-g/",
                        "descripcion" => "Pimiento verde",
                        "link" => "https://supermercado.eroski.es/es/productdetail/1867-pimiento-verde-italiano-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70205,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/6500a710-8bd0-494a-996b-94af443b6a8e/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "55210",
                        "descripcion" => "Pimiento verde",
                        "link" => "https://www.compraonline.alcampo.es/products/Pimiento-Italiano-a-granel/55210",
                            ]);

$p70301 = DB::table("productos")->where("name","Champiñones")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/4920b19b6bc77098a6a4f9350b3539df.jpg",
                        "peso" =>  430,
                        "scrab_id"=> "69672",
                        "descripcion" => "Champiñon blanco entero",
                        "link" => "https://tienda.mercadona.es/product/69672/champinon-grande-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/271642_00_2.jpg",
                        "peso" => 600,
                        "scrab_id"=> "R-fprod1220135",
                        "descripcion" => "Champiñon blanco entero",
                        "link" => "https://www.carrefour.es/supermercado/champinon-pie-cortado-carrefour-600-g-aprox/R-fprod1220135/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201804/24/00118165800816____6__600x600.jpg",
                        "peso" => 450,
                        "scrab_id"=> "0110118165800816",
                        "descripcion" => "Champiñon blanco entero DELICHAMP",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118165800816-delichamp-champinon-cultivado-entero-pie-cortado-bandeja-450-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/273421/273421_ISO_0_ES.jpg",
                        "peso" =>  430,
                        "scrab_id"=> "273421",
                        "descripcion" => "Champiñon blanco entero",
                        "link" => "https://www.dia.es/verduras/setas-y-champinones/p/273421",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70301,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/17823097_x.jpg",
                        "peso" => 300,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17823097-champinon-blanco-bandeja-300-g/",
                        "descripcion" => "Champiñon blanco entero",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17823097-champinon-blanco-bandeja-300-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70301,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/caf68fb6-2070-4d1d-92ff-25072aad7e69/500x500.jpg",
                        "peso" => 250,
                        "scrab_id"=> "54981",
                        "descripcion" => "Champiñon blanco entero",
                        "link" => "https://www.compraonline.alcampo.es/products/Champi%C3%B1ones-con-pie-cortado-barqueta-de-250-g/54981",
                            ]);

$p70302 = DB::table("productos")->where("name","Setas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/e6d09e358b31958859613754ad7ca13d.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "69653",
                        "descripcion" => "Seta ostra",
                        "link" => "https://tienda.mercadona.es/product/69653/seta-bandeja",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/271605_00_2.jpg",
                        "peso" => 250,
                        "scrab_id"=> "R-fprod1220121",
                        "descripcion" => "Seta ostra",
                        "link" => "https://www.carrefour.es/supermercado/seta-carrefour-250-g-aprox/R-fprod1220121/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202301/24/00118165801657____4__1200x1200.jpg",
                        "peso" => 200,
                        "scrab_id"=> "0110118165801657",
                        "descripcion" => "Seta ostra",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118165801657-setas-de-cultivo-bandeja-200-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/13337/13337_ISO_0_ES.jpg",
                        "peso" =>  200,
                        "scrab_id"=> "13337",
                        "descripcion" => "Seta ostra",
                        "link" => "https://www.dia.es/verduras/setas-y-champinones/p/13337",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70302,
                        "supermercado_id"=> $eroski,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70302,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/32709ad3-cbe7-4a91-b17e-b546791452a8/500x500.jpg",
                        "peso" => 150,
                        "scrab_id"=> "780316",
                        "descripcion" => "Seta ostra ecológica",
                        "link" => "https://www.compraonline.alcampo.es/products/alcampo-cultivamos-lo-bueno-ecol%C3%B3gico-seta-ostra-ecol%C3%B3gica-150-g/780316",
                            ]);

$p70401 = DB::table("productos")->where("name","Alubia blanca")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/bf5f397a8ebaf8638cfdf86c6b95da9c.jpg?fit=crop&h=300&w=300",
                        "peso" =>  1000,
                        "scrab_id"=> "5124",
                        "descripcion" => "Alubia blanca seca",
                        "link" => "https://tienda.mercadona.es/product/5124/alubia-blanca-hacendado-categoria-extra-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/717239_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-740822685",
                        "descripcion" => "Alubia blanca seca",
                        "link" => "https://www.carrefour.es/supermercado/alubia-blanca-categoria-extra-carrefour-1-kg/R-740822685/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/21/00118006301610____3__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118006301610",
                        "descripcion" => "Alubia blanca seca",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118006301610-el-corte-ingles-alubia-blanca-extra-paquete-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $dia,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL,
                        // "img_url" => "https://www.dia.es/product_images/154/154_ISO_0_ES.jpg",
                        // "peso" =>  1000,
                        // "scrab_id"=> "154",
                        // "descripcion" => "Alubia blanca seca",
                        // "link" => "https://www.dia.es/arroz-pastas-y-legumbres/alubias/p/154",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70401,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/300210_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/300210-alubia-blanca-larga-eroski-paquete-1-kg/",
                        "descripcion" => "Alubia blanca seca",
                        "link" => "https://supermercado.eroski.es/es/productdetail/300210-alubia-blanca-larga-eroski-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70401,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/bae7cbe5-1fad-47ac-b83a-b03c3bbb47ff/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "11796",
                        "descripcion" => "Alubia blanca seca",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Alubia-ri%C3%B1%C3%B3n-extra-PRODUCTO-ALCAMPO-paquete-de-1-kg/11796",
                            ]);

$p70402 = DB::table("productos")->where("name","Garbanzos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/51b811c04aded80e12ed7decf92c7480.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "5214",
                        "descripcion" => "Garbanzo seco cat. Extra",
                        "link" => "https://tienda.mercadona.es/product/5214/garbanzo-hacendado-categoria-extra-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/201578_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-536500289",
                        "descripcion" => "Garbanzo seco cat. Extra",
                        "link" => "https://www.carrefour.es/supermercado/garbanzo-categoria-extra-carrefour-1-kg/R-536500289/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/15/00118008200844____2__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118008200844",
                        "descripcion" => "Garbanzo seco cat. Extra",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118008200844-el-corte-ingles-garbanzo-castellano-extra-envase-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/155/155_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "155",
                        "descripcion" => "Garbanzo seco cat. Extra",
                        "link" => "https://www.dia.es/arroz-pastas-y-legumbres/garbanzos/p/155",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70402,
                        "supermercado_id"=> $eroski,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70402,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d85c6f87-b132-4c11-a16b-897b28727315/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "11790",
                        "descripcion" => "Garbanzo seco cat. Extra",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Garbanzo-extra-PRODUCTO-ALCAMPO-1-kg/11790",
                            ]);

$p70403 = DB::table("productos")->where("name","Lentejas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/791095e84776c2ee6cffa64f4992b9a2.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "5325",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://tienda.mercadona.es/product/5325/lenteja-hacendado-categoria-extra-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/201629_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-536500291",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://www.carrefour.es/supermercado/lenteja-categoria-extra-carrefour-1-kg/R-536500291/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/15/00118007700794____2__1200x1200.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "0110118007701198",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118007700794-el-corte-ingles-lenteja-castellana-extra-paquete-1-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/291145/291145_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "291145",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://www.dia.es/arroz-pastas-y-legumbres/lentejas/p/291145",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70403,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/309575_x.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/309575-lenteja-eroski-basic-paquete-1-kg/",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://supermercado.eroski.es/es/productdetail/309575-lenteja-eroski-basic-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70403,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/b2e850dd-d7db-4fb2-9a78-0ab160ed7572/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "11793",
                        "descripcion" => "Lenteja seca",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Lentejas-extra-1-kg/11793",
                            ]);

$p70501 = DB::table("productos")->where("name","Alcachofa troceada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/572a388783b75bf4c4e9669f8388d0fa.jpg",
                        "peso" =>  240,
                        "scrab_id"=> "16039",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://tienda.mercadona.es/product/16039/corazones-alcachofas-hacendado-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/045140_00_1.jpg",
                        "peso" => 240,
                        "scrab_id"=> "R-521016439",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://www.carrefour.es/supermercado/corazones-de-alcachofa-8-10-carrefour-240-g/R-521016439/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201609/22/00118021800737____1__600x600.jpg",
                        "peso" => 240,
                        "scrab_id"=> "0110118021800737",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118021800737-el-corte-ingles-corazones-de-alcachofas-al-natural-6-8-piezas-lata-240-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/276527/276527_ISO_0_ES.jpg?imwidth=392",
                        "peso" =>  240,
                        "scrab_id"=> "276527",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/276527",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70501,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/15927635_x.jpg",
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15927635-alcachofa-1012-frutos-eroski-frasco-175-g/",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://supermercado.eroski.es/es/productdetail/15927635-alcachofa-1012-frutos-eroski-frasco-175-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70501,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/296a5366-d121-436c-b1c9-3cc9358779a5/500x500.jpg",
                        "peso" => 165,
                        "scrab_id"=> "882438",
                        "descripcion" => "Corazones de alcachofa",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-corazones-de-alcachofas-8-12-piezas-frasco-de-165-g/882438",
                            ]);

$p70502 = DB::table("productos")->where("name","Alubias en bote")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/4ec09419bc9fa7bcc4e3f4eee26c6fa4.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "26019",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://tienda.mercadona.es/product/26019/alubia-cocida-blanca-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/686224_00_1.jpg",
                        "peso" => 400,
                        "scrab_id"=> "R-521005493",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://www.carrefour.es/supermercado/alubias-cocidas-categoria-extra-carrefour-400-g/R-521005493/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202109/22/00118007300652____3__1200x1200.jpg",
                        "peso" => 400,
                        "scrab_id"=> "0110118007300652",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118007300652-el-corte-ingles-alubia-blanca-extra-cocida-frasco-400-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/1233/1233_ISO_0_ES.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "1233",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/1233",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70502,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/336164_x.jpg",
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/336164-alubia-blanca-cocida-eroski-basic-frasco-400-g/",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://supermercado.eroski.es/es/productdetail/336164-alubia-blanca-cocida-eroski-basic-frasco-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70502,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a0e73a31-356d-4018-8c81-ad75ddd57fd3/500x500.jpg",
                        "peso" => 400,
                        "scrab_id"=> "24457",
                        "descripcion" => "Alubia blanca cocida",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Alubias-cocidas-extra-PRODUCTO-ALCAMPO-400-g/24457",
                            ]);

$p70503 = DB::table("productos")->where("name","Champiñon laminado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/65d41733683713bd00ab585b42b8d6e0.jpg",
                        "peso" =>  180,
                        "scrab_id"=> "16618",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://tienda.mercadona.es/product/16618/champinones-laminados-hacendado-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/530648_00_1.jpg",
                        "peso" => 230,
                        "scrab_id"=> "R-521005928",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://www.carrefour.es/supermercado/champinones-laminados-carrefour-230-g/R-521005928/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201711/03/00118022300786____1__600x600.jpg",
                        "peso" => 185,
                        "scrab_id"=> "0110118022300786",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118022300786-el-corte-ingles-champinon-laminado-lata-185-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/1666/1666_ISO_0_ES.jpg",
                        "peso" =>  185,
                        "scrab_id"=> "1666",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/1666",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70503,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/2723237_x.jpg",
                        "peso" => 185,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2723237-champinon-laminado-eroski-basic-lata-185-g/",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://supermercado.eroski.es/es/productdetail/2723237-champinon-laminado-eroski-basic-lata-185-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70503,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/cd64c22f-fa71-4bdb-8d86-167a9cc6f402/500x500.jpg",
                        "peso" => 185,
                        "scrab_id"=> "27573",
                        "descripcion" => "Champiñones laminados lata",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-champi%C3%B1ones-laminados-lata-de-185-g/27573",
                            ]);

$p70504 = DB::table("productos")->where("name","Esparragos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/61e0ef88d285e66d8f076a711212051b.jpg",
                        "peso" =>  205,
                        "scrab_id"=> "18562",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://tienda.mercadona.es/product/18562/esparragos-medianos-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/387665_00_1.jpg",
                        "peso" => 325,
                        "scrab_id"=> "R-fprod1460151",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://www.carrefour.es/supermercado/esparragos-blancos-gruesos-6-12-carrefour-325-g/R-fprod1460151/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202110/15/00118023703053____2__1200x1200.jpg",
                        "peso" => 110,
                        "scrab_id"=> "0110118023703053",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118023703053-el-corte-ingles-esparragos-blancos-cortos-medianos-frasco-110-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/4118/4118_ISO_0_ES.jpg",
                        "peso" =>  205,
                        "scrab_id"=> "4118",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/4118",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70504,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/5965801_x.jpg",
                        "peso" => 110,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5965801-esparrago-corto-grueso-eroski-frasco-110-g/",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://supermercado.eroski.es/es/productdetail/5965801-esparrago-corto-grueso-eroski-frasco-110-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70504,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/76117227-4be9-4b00-a77e-e90798ad762c/500x500.jpg",
                        "peso" => 250,
                        "scrab_id"=> "238088",
                        "descripcion" => "Espárragos blancos",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Tallos-de-esp%C3%A1rragos-blancos-medio-250-g/238088",
                            ]);

$p70505 = DB::table("productos")->where("name","Garbanzo cocido")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/a34fdf0b4c98ecab0cfbb5011e74259d.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "26029",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://tienda.mercadona.es/product/26029/garbanzo-cocido-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/686220_00_1.jpg",
                        "peso" => 400,
                        "scrab_id"=> "R-521005495",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://www.carrefour.es/supermercado/garbanzos-cocidos-categoria-extra-carrefour-400-g/R-521005495/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202108/19/00118007000799____3__1200x1200.jpg",
                        "peso" => 400,
                        "scrab_id"=> "0110118007000799",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118007000799-el-corte-ingles-garbanzo-cocido-extra-frasco-570-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/1232/1232_ISO_0_ES.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "1232",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://www.dia.es/arroz-pastas-y-legumbres/garbanzos/p/1232",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70505,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/336750_x.jpg",
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/336750-garbanzos-cocidos-eroski-basic-frasco-400-g/",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://supermercado.eroski.es/es/productdetail/336750-garbanzos-cocidos-eroski-basic-frasco-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70505,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/00356c10-a513-4beb-a45e-c797917f5bd2/500x500.jpg",
                        "peso" => 400,
                        "scrab_id"=> "24455",
                        "descripcion" => "Garganzos cocidos",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Garbanzos-cocidos-PRODUCTO-ALCAMPO-400-g/24455",
                            ]);

$p70506 = DB::table("productos")->where("name","Guisantes frescos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $mercadona,
                        "img_url"=> "https://prod-mercadona.imgix.net/images/2f68846a7d86622c8e4bd01e714aee48.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "16416",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://tienda.mercadona.es/product/16416/guisantes-extra-hacendado-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $carrefour,
                        "img_url"=> "https://static.carrefour.es/hd_510x_/img_pim_food/767712_00_1.jpg",
                        "peso" => 250,
                        "scrab_id"=> "R-758904356",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://www.carrefour.es/supermercado/guisantes-muy-finos-classic-carrefour-250-g/R-758904356/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $eci,
                        "img_url"=> "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202112/29/00118024200463____4__1200x1200.jpg",
                        "peso" => 250,
                        "scrab_id"=> "0110118024200463",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118024200463-el-corte-ingles-guisantes-al-natural-medianos-lata-250-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $dia,
                        "img_url"=> "https://www.dia.es/product_images/265948/265948_ISO_0_ES.jpg",
                        "peso" =>  265,
                        "scrab_id"=> "265948",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/265948",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70506,
                        "supermercado_id"=> $eroski,
                        "img_url"=> "https://supermercado.eroski.es/images/17820515_x.jpg",
                        "peso" => 280,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17820515-guisante-muy-fino-eroski-basic-lata-280-g/",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://supermercado.eroski.es/es/productdetail/17820515-guisante-muy-fino-eroski-basic-lata-280-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70506,
                        "supermercado_id"=> $alcampo,
                        "img_url"=> "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/49c00543-1e74-4940-98e6-ab2dcb43e2bf/500x500.jpg",
                        "peso" => 250,
                        "scrab_id"=> "25760",
                        "descripcion" => "Guisantes al natural",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-econ%C3%B3mico-alcampo-guisantes-al-natural-medianos-lata-de-250-g/25760",
                            ]);

$p70507 = DB::table("productos")->where("name","Judía verde troceada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/292aad78553646fd2cc464368f801d34.jpg",
                        "peso" =>  360,
                        "scrab_id"=> "16313",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://tienda.mercadona.es/product/16313/judias-verdes-planas-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/357831_00_1.jpg",
                        "peso" => 360,
                        "scrab_id"=> "R-521005920",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://www.carrefour.es/supermercado/judias-verdes-planas-cortadas-carrefour-360-g/R-521005920/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202111/17/00118042100364____2__1200x1200.jpg",
                        "peso" => 360,
                        "scrab_id"=> "0110118042100364",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118042100364-el-corte-ingles-judias-verdes-anchas-extra-cortadas-en-trozos-medianos-frasco-360-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/13049/13049_ISO_0_ES.jpg",
                        "peso" =>  360,
                        "scrab_id"=> "13049",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/13049",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70507,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/2811933_x.jpg",
                        "peso" => 350,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2811933-judia-verde-troceada-calidad-i-eroski-frasco-350-g/",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://supermercado.eroski.es/es/productdetail/2811933-judia-verde-troceada-calidad-i-eroski-frasco-350-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70507,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/d217d5cd-7edd-4204-8267-8e436d6eb3f7/500x500.jpg",
                        "peso" => 360,
                        "scrab_id"=> "22383",
                        "descripcion" => "Judia verde troceada",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-jud%C3%ADas-verdes-cortadas-en-trozos-medianos-frasco-de-360-g/22383",
                            ]);

$p70508 = DB::table("productos")->where("name","Maiz dulce")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/63c02c99a04f34217723f9220d7edfcf.jpg",
                        "peso" =>  420,
                        "scrab_id"=> "16712",
                        "descripcion" => "Maiz dulce",
                        "link" => "https://tienda.mercadona.es/product/16712/maiz-dulce-hacendado-pack-3",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/553244_00_1.jpg",
                        "peso" => 420,
                        "scrab_id"=> "R-VC4AECOMM-553244",
                        "descripcion" => "Maiz dulce CIDACOS",
                        "link" => "https://www.carrefour.es/supermercado/maiz-dulce-cidacos-sin-lactosa-pack-de-3-unidades-de-140-g/R-VC4AECOMM-553244/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202112/29/00118049700042____8__1200x1200.jpg",
                        "peso" => 285,
                        "scrab_id"=> "0110118049700042",
                        "descripcion" => "Maiz dulce",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118049700042-el-corte-ingles-maiz-dulce-en-grano-lata-285-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/1250/1250_ISO_0_ES.jpg",
                        "peso" =>  285,
                        "scrab_id"=> "1250",
                        "descripcion" => "Maiz dulce",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/1250",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70508,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/870683_x.jpg",
                        "peso" => 285,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/870683-maiz-dulce-eroski-basic-lata-285-g/",
                        "descripcion" => "Maiz dulce",
                        "link" => "https://supermercado.eroski.es/es/productdetail/870683-maiz-dulce-eroski-basic-lata-285-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70508,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/954a170b-79ff-4a88-91a5-69d1e432deef/500x500.jpg",
                        "peso" => 285,
                        "scrab_id"=> "28187",
                        "descripcion" => "Maiz dulce",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-ma%C3%ADz-dulce-285-g/28187",
                            ]);

$p70509 = DB::table("productos")->where("name","Tomate entero pelado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/86df20581dccfa401dea906b4ed48208.jpg",
                        "peso" =>  240,
                        "scrab_id"=> "16042",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://tienda.mercadona.es/product/16042/tomate-entero-pelado-hacendado-freir-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/813683_00_1.jpg",
                        "peso" => 240,
                        "scrab_id"=> "R-641402267",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://www.carrefour.es/supermercado/tomates-enteros-contenido-bajo-de-sal-carrefour-240-g/R-641402267/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202111/01/00118027500737____2__1200x1200.jpg",
                        "peso" => 480,
                        "scrab_id"=> "0110118027500737",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118027500737-el-corte-ingles-tomate-entero-pelado-lata-480-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/5616/5616_ISO_0_ES.jpg",
                        "peso" =>  480,
                        "scrab_id"=> "5616",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://www.dia.es/aceites-salsas-y-especias/tomate/p/5616",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70509,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/316026_x.jpg",
                        "peso" => 390,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/316026-tomate-natural-entero-pelado-eroski-lata-390-g/",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://supermercado.eroski.es/es/productdetail/316026-tomate-natural-entero-pelado-eroski-lata-390-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70509,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/934867cc-f9e8-4f5b-9b53-fcca8a018af0/500x500.jpg",
                        "peso" => 480,
                        "scrab_id"=> "10066",
                        "descripcion" => "Tomate entero pelado",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-tomate-pelado-entero-lata-de-480-g/10066",
                            ]);

$p70510 = DB::table("productos")->where("name","Tomate triturado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/db53895dcbf286affe16def253a0ab89.jpg",
                        "peso" =>  400,
                        "scrab_id"=> "16044",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://tienda.mercadona.es/product/16044/tomate-triturado-hacendado-freir-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/245631_00_1.jpg",
                        "peso" => 390,
                        "scrab_id"=> "R-fprod1190604",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://www.carrefour.es/supermercado/tomate-triturado-carrefour-lata-de-390-g/R-fprod1190604/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202102/09/00118027500729____5__1200x1200.jpg",
                        "peso" => 400,
                        "scrab_id"=> "0110118027500729",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118027500729-el-corte-ingles-tomate-extra-triturado-lata-400-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/326/326_ISO_0_ES.jpg",
                        "peso" =>  390,
                        "scrab_id"=> "326",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://www.dia.es/aceites-salsas-y-especias/tomate/p/326",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70510,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/307892_x.jpg",
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/307892-tomate-triturado-eroski-basic-lata-400-g/",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://supermercado.eroski.es/es/productdetail/307892-tomate-triturado-eroski-basic-lata-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70510,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/e429bc6b-3b3b-4fa5-b5e3-9b2b376b6254/500x500.jpg",
                        "peso" => 400,
                        "scrab_id"=> "10090",
                        "descripcion" => "Tomate triturado",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-tomate-triturado-lata-de-400-g/10090",
                            ]);

$p70511 = DB::table("productos")->where("name","Tomate frito tarro")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/80f47b9ceb89f9e0ec69b6df0fc11fed.jpg",
                        "peso" =>  560,
                        "scrab_id"=> "17108",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://tienda.mercadona.es/product/17108/tomate-frito-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/365663_00_1.jpg",
                        "peso" => 550,
                        "scrab_id"=> "R-600805291",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://www.carrefour.es/supermercado/tomate-frito-carrefour-tarro-550-g/R-600805291/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202201/21/00118043502089____3__1200x1200.jpg",
                        "peso" => 550,
                        "scrab_id"=> "0110118043502089",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118043502089-el-corte-ingles-tomate-frito-sin-gluten-frasco-550-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/10677/10677_ISO_0_ES.jpg",
                        "peso" =>  550,
                        "scrab_id"=> "10677",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://www.dia.es/aceites-salsas-y-especias/tomate/p/10677",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70511,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/316216_x.jpg",
                        "peso" => 550,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/316216-tomate-frito-eroski-frasco-550-g-/",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://supermercado.eroski.es/es/productdetail/316216-tomate-frito-eroski-frasco-550-g-/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70511,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/0bcf6ba3-fc0a-4b1e-a703-fb5e1876910f/500x500.jpg",
                        "peso" => 560,
                        "scrab_id"=> "26530",
                        "descripcion" => "Tomate frito tarro",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-tomate-frito-frasco-de-560-g/26530",
                            ]);

$p70512 = DB::table("productos")->where("name","Zanahoria rallada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/bcdb8e73e8e804727db144e83a278429.jpg",
                        "peso" =>  250,
                        "scrab_id"=> "16752",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://tienda.mercadona.es/product/16752/zanahoria-tiras-hacendado-tarro",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/705230_00_1.jpg",
                        "peso" => 250,
                        "scrab_id"=> "R-VC4AECOMM-705230",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://www.carrefour.es/supermercado/zanahoria-en-tiras-classic-carrefour-250-g/R-VC4AECOMM-705230/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201612/15/00118025601016____1__600x600.jpg",
                        "peso" => 250,
                        "scrab_id"=> "0110118025601016",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118025601016-el-corte-ingles-zanahoria-rallada-en-hilos-frasco-250-g-neto-escurrido/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/16543/16543_ISO_0_ES.jpg",
                        "peso" =>  180,
                        "scrab_id"=> "16543",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://www.dia.es/conservas-caldos-y-cremas/conservas-vegetales/p/16543",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70512,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/1743509_x.jpg",
                        "peso" => 180,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16041030-zanahoria-rallada-leyenda-frasco-180-g-/",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://supermercado.eroski.es/es/productdetail/1743509-zanahoria-en-tiras-eroski-frasco-180-g-/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70512,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/4e6125d4-d7a7-4495-b0e1-560ad140dc11/500x500.jpg",
                        "peso" => 150,
                        "scrab_id"=> "58285",
                        "descripcion" => "Zanahoria rallada",
                        "link" => "https://www.compraonline.alcampo.es/products/Zanahoria-rallada-PRODUCTO-ALCAMPO-bolsa-de-150-g/58285",
                            ]);

$p70601 = DB::table("productos")->where("name","Patatas freir malla")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/f6cc8ef3532225e5f557e79c5f6cf3f1.jpg",
                        "peso" =>  3000,
                        "scrab_id"=> "69166",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://tienda.mercadona.es/product/69166/patatas-malla",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/288155_00_1.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "R-600709206",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://www.carrefour.es/supermercado/patata-para-freir-carrefour-3-kg/R-600709206/p",
                    ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202202/09/00118176302935____4__600x600.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "0110118176302935",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://www.elcorteingles.es/supermercado/0110118176302935-el-corte-ingles-patata-de-freir-bolsa-3-kg/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/248458/248458_ISO_0_ES.jpg",
                        "peso" =>  2000,
                        "scrab_id"=> "248458",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://www.dia.es/verduras/patatas-y-zanahorias/p/248458",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70601,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/12972899_x.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12972899-patata-seleccion-malla-3-kg/",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://supermercado.eroski.es/es/productdetail/12972899-patata-seleccion-malla-3-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70601,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/f37f80d5-c27d-4340-b70e-b088cf3dc010/500x500.jpg",
                        "peso" => 3000,
                        "scrab_id"=> "57727",
                        "descripcion" => "Malla de patatas",
                        "link" => "https://www.compraonline.alcampo.es/products/Patatas-lavadas-malla-3-kg/57727",
                            ]);

$p80101 = DB::table("productos")->where("name","Azucar blanco")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/782bc97fd2960e24b4505e25b384a2d4.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "19897",
                        "descripcion" => "Azucar blanco",
                        "link" => "https://tienda.mercadona.es/product/19897/azucar-blanco-hacendado-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/463155_00_1.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-463155",
                        "descripcion" => "Azucar blanco",
                        "link" => "https://www.carrefour.es/supermercado/azucar-blanco-carrefour-1-kg/R-VC4AECOMM-463155/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $eci,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/81798/81798_ISO_0_ES.jpg",
                        "peso" =>  1000,
                        "scrab_id"=> "81798",
                        "descripcion" => "Azucar blanco",
                        "link" => "https://www.dia.es/azucar-chocolates-y-caramelos/azucar-y-edulcorantes/p/81798",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80101,
                        "supermercado_id"=> $eroski,
                        "img_url" => NULL,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        "descripcion" => NULL,
                        "link" => NULL
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80101,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/ababcc33-48e4-450a-8718-a4338aa45e3f/500x500.jpg",
                        "peso" => 1000,
                        "scrab_id"=> "197879",
                        "descripcion" => "Azucar blanco",
                        "link" => "https://www.compraonline.alcampo.es/products/PRODUCTO-ALCAMPO-Az%C3%BAcar-blanco-PRODUCTO-ALCAMPO-1-Kg/197879",
                            ]);

$p80201 = DB::table("productos")->where("name","Miel de flores")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/12e08df918846820ae9cd7d8fe8b142b.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "15430",
                        "descripcion" => "Miel de flores",
                        "link" => "https://tienda.mercadona.es/product/15430/miel-flores-hacendado-bote",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/632345_00_1.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-521003512",
                        "descripcion" => "Miel de flores",
                        "link" => "https://www.carrefour.es/supermercado/miel-de-flores-carrefour-classic-500-g/R-521003512/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202104/15/00120640201511____3__1200x1200.jpg",
                        "peso" => 500,
                        "scrab_id"=> "0110120640201511",
                        "descripcion" => "Miel de flores",
                        "link" => "https://www.elcorteingles.es/supermercado/0110120640201511-el-corte-ingles-miel-de-flores-bote-500-g-antigoteo/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/133109/133109_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "133109",
                        "descripcion" => "Miel de flores",
                        "link" => "https://www.dia.es/azucar-chocolates-y-caramelos/miel/p/133109",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80201,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/6300669_x.jpg",
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6300669-miel-de-panal-cero-goteo-eroski-dosificador-500-g/",
                        "descripcion" => "Miel de flores",
                        "link" => "https://supermercado.eroski.es/es/productdetail/6300669-miel-de-panal-cero-goteo-eroski-dosificador-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80201,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/c2f0f3e7-e4e3-49fd-ba80-262976a826d4/500x500.jpg",
                        "peso" => 500,
                        "scrab_id"=> "15136",
                        "descripcion" => "Miel de flores",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-alcampo-miel-de-flores-con-dosificador-anti-goteo-500-g/15136",
                            ]);

$p80301 = DB::table("productos")->where("name","Cafe molido Natural")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $mercadona,
                        "img_url" => "https://prod-mercadona.imgix.net/images/cbc4b1728c61c7746295508bc4e54396.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "11178",
                        "descripcion" => "Café molido natural",
                        "link" => "https://tienda.mercadona.es/product/11178/cafe-molido-natural-hacendado-paquete",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $carrefour,
                        "img_url" => "https://static.carrefour.es/hd_510x_/img_pim_food/331397_00_1.jpg",
                        "peso" => 500,
                        "scrab_id"=> "R-fprod1280764",
                        "descripcion" => "Café molido natural",
                        "link" => "https://www.carrefour.es/supermercado/cafe-molido-natural-carrefour-500-g/R-fprod1280764/p",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $eci,
                        "img_url" => "https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202112/22/00120603901941____2__1200x1200.jpg",
                        "peso" => 250,
                        "scrab_id"=> "0110120603901941",
                        "descripcion" => "Café molido natural",
                        "link" => "https://www.elcorteingles.es/supermercado/0110120603901941-el-corte-ingles-cafe-molido-tostado-natural-paquete-250-g/",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $dia,
                        "img_url" => "https://www.dia.es/product_images/218159/218159_ISO_0_ES.jpg",
                        "peso" =>  500,
                        "scrab_id"=> "218159",
                        "descripcion" => "Café molido natural",
                        "link" => "https://www.dia.es/cafe-cacao-e-infusiones/cafe/p/218159",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80301,
                        "supermercado_id"=> $eroski,
                        "img_url" => "https://supermercado.eroski.es/images/8484214_x.jpg",
                        "peso" => 250,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8484214-cafe-molido-natural-eroski-basic-paquete-250-g/",
                        "descripcion" => "Café molido natural",
                        "link" => "https://supermercado.eroski.es/es/productdetail/8484214-cafe-molido-natural-eroski-basic-paquete-250-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80301,
                        "supermercado_id"=> $alcampo,
                        "img_url" => "https://www.compraonline.alcampo.es/images-v3/37ea0506-72ec-4543-93c8-a77bb916ec12/a3a7df1d-761a-49ce-b0c3-3bc1d11d3359/500x500.jpg",
                        "peso" => 250,
                        "scrab_id"=> "562073",
                        "descripcion" => "Café molido natural",
                        "link" => "https://www.compraonline.alcampo.es/products/producto-econ%C3%B3mico-alcampo-caf%C3%A9-molido-natural-250-g/562073",
                            ]);
    }
}
