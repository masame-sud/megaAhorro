<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precio;
use App\Models\Supermercadoproducto;

function getPage ($url)
{
    $useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36';
    $timeout= 120;
    $dir            = dirname(__FILE__);
    $cookie_file    = $dir . '/cookies/' . md5($_SERVER['REMOTE_ADDR']) . '.txt';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt($ch, CURLOPT_ENCODING, "" );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($ch, CURLOPT_AUTOREFERER, true );
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout );
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com/');
    $content = curl_exec($ch);
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }
    else
    {
        return $content;
    }
        curl_close($ch);
}


function file_get_contents_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
};



class GuardaPreciosController extends Controller
{
    public function mercadona()
        {

            $mercadonas = Supermercadoproducto::with("precio")->where("supermercado_id", 1)->get();

            foreach ($mercadonas as $mercadona)
                {
                    if ((empty($mercadona->precio->last()->created_at)) or ($mercadona->precio->last()->created_at < now()->sub('hour', 16)))
                    {
                        if (($mercadona->scrab_id === NULL))
                        {
                            echo "Mercadona: ". $mercadona->descripcion . " Precio no actualizado (No scrab_id)<br>";
                        } else
                            {
                            $dataString = file_get_contents_curl("https://tienda.mercadona.es/api/v1_1/products/{$mercadona->scrab_id}/?lang=es&wh=mad1");
                            $dataArray = json_decode($dataString, true);
                                if (isset($dataArray["price_instructions"]))
                                    {
                                    $precioProducto = $dataArray['price_instructions']['unit_price'];
                                    $preciokilo = $dataArray['price_instructions']['bulk_price'];
                                    $atributos = [
                                        "supermercadoproductos_id" => $mercadona->id,
                                        "precio" => $precioProducto,
                                        "precio_kg" => $preciokilo
                                    ];
                                    Precio::create($atributos);
                                    echo "Mercadona ". $mercadona->descripcion . " actualizado.<br>";
                                    }
                                else
                                {
                                    echo "Mercadona: ". $mercadona->descripcion . " no actualizado (Faltan datos).<br>";
                                }
                            }
                    }
                    else
                    {
                        echo "Mercadona: ". $mercadona->descripcion . " Precio no actualizado (ya actual)<br>";
                    }

                }
                echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

        }

    public function carrefour()
    {

        $carefours = Supermercadoproducto::with("precio")->where("supermercado_id", 2)->get();

        foreach ($carefours as $carrefour)
                {

                    if ((empty($carrefour->precio->last()->created_at)) or ($carrefour->precio->last()->created_at < now()->sub('hour', 16)))
                    {
                        if (($carrefour->scrab_id === NULL))
                        {
                            echo "Carrefour: ". $carrefour->descripcion ." Precio no actualizado (No scrab_id)<br>";
                        } else {
                            $dataString = file_get_contents_curl("https://www.carrefour.es/cloud-api/pdp-food-analytics/v1/impressions?product_id={$carrefour->scrab_id}");
                            $dataArray = json_decode($dataString, true);
                            if (isset($dataArray['impressions']))
                            {
                                $precioProducto = $dataArray['impressions']['0']['price'];
                                $precioK = ($precioProducto * 1000)/ $carrefour->peso;
                                $atributos = [
                                    "supermercadoproductos_id" => $carrefour->id,
                                    "precio" => $precioProducto,
                                    "precio_kg" => $precioK
                                ];
                                Precio::create($atributos);
                                echo "Carrefour ". $carrefour->descripcion ." actualizado.<br>";
                            }
                            else
                            {
                                echo "Carrefour: ". $carrefour->descripcion ." no actualizado (Faltan datos).<br>";
                            }

                        }

                    }
                    else
                    {
                        echo "Carrefour: ". $carrefour->descripcion ." Precio no actualizado (ya actual)<br>";
                    }

                }
        echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }

    // public function eci()
    // {

    //     $ecis = Supermercadoproducto::with("precio")->where("supermercado_id", 3)->get();

    //     foreach ($ecis as $eci)
    //             {

    //                 if ((empty($eci->precio->last()->created_at)) or ($eci->precio->last()->created_at < now()->subDay()))
    //                 {
    //                     if (($eci->scrab_id === NULL))
    //                     {
    //                         echo "ECI: ". $eci->descripcion ." Precio no actualizado (No scrab_id)<br>";
    //                     } else {
    //                         $dataString = file_get_contents_curl("https://www.elcorteingles.es/alimentacion/api/catalog/get-rr-products/?ids={$eci->scrab_id}___&mode=JSON");
    //                         $dataArray = json_decode($dataString, true);


    //                         if(isset($dataArray['products_list']['items']['0']))
    //                         {
    //                             $precioProducto = $dataArray['products_list']['items']['0']['product']['price']['seo_price'];
    //                             $precioKilo = $dataArray['products_list']['items']['0']['product']['price']['pum_price'];
    //                             $precioK = substr($precioKilo, 0, 5);
    //                             $precioK = str_replace(",",".", $precioK);
    //                             $precioK = floatval($precioK);
    //                             $atributos = [
    //                                 "supermercadoproductos_id" => $eci->id,
    //                                 "precio" => $precioProducto,
    //                                 "precio_kg" => $precioK
    //                             ];
    //                             Precio::create($atributos);
    //                             echo "ECI ". $eci->descripcion ." actualizado.<br>";
    //                         }
    //                         else
    //                         {
    //                             echo "ECI: ". $eci->descripcion ." no actualizado (Faltan datos).<br>";
    //                         }
    //                             }
    //                 }
    //                 else
    //                 {
    //                     echo "ECI: ". $eci->descripcion ." Precio no actualizado (ya actual)<br>";
    //                 }

    //             }
    //     echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    // }

    public function dia()
    {

        $dias = Supermercadoproducto::with("precio")->where("supermercado_id", 3)->get();

        foreach ($dias as $dia)
                {

                    if ((empty($dia->precio->last()->created_at)) or ($dia->precio->last()->created_at < now()->sub('hour', 16)))
                    {
                        if (($dia->scrab_id === NULL))
                        {
                            echo "Dia: ".$dia->descripcion." Precio no actualizado (No scrab_id)<br>";
                        } else {
                            $dataString = file_get_contents_curl("https://www.dia.es/api/v1/pdp-insight/initial_analytics/{$dia->scrab_id}");
                            $dataArray = json_decode($dataString, true);
                            if(isset($dataArray['page_product_analytics']))
                            {
                                $precioProducto = $dataArray['page_product_analytics'][$dia->scrab_id]['price'];
                                $precioK = ($precioProducto * 1000)/ $dia->peso;
                                $atributos = [
                                    "supermercadoproductos_id" => $dia->id,
                                    "precio" => $precioProducto,
                                    "precio_kg" => $precioK
                                ];
                                Precio::create($atributos);
                                echo "Dia ".$dia->descripcion." actualizado.<br>";
                            }
                            else
                            {
                                echo "Día: ".$dia->descripcion." no actualizado (Faltan datos).<br>";
                            }
                            }
                    }
                    else
                    {
                        echo "Dia: ".$dia->descripcion." Precio no actualizado (ya actual)<br>";
                    }

                }
        echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }

    public function eroski()
    {

        $eroskis = Supermercadoproducto::with("precio")->where("supermercado_id", 4)->get();

        foreach ($eroskis as $eroski)
                {
                    if ((empty($eroski->precio->last()->created_at)) or ($eroski->precio->last()->created_at < now()->sub('hour', 16)))
                    {
                        if (($eroski->scrab_id === NULL))
                        {
                            echo "Eroski: ".$eroski->descripcion." Precio no actualizado (No scrab_id)<br>";
                        } else {
                            $html = getPage ($eroski->scrab_id);

                            if(isset($html))
                            {
                                $start = stripos($html, '<!-- Description product -->');
                                $end = stripos($html, '<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 border-0 add-product', $offset = $start);
                                $length = $end - $start;
                                $htmlSection = substr($html, $start, $length);
                                $precioStart = stripos($htmlSection, 'offer-now">') + 12;
                                $precio = substr($htmlSection, $precioStart, 4);
                                $precio = str_replace(",",".", $precio);
                                $precio = floatval($precio);
                                $precioK = ($precio * 1000)/ $eroski->peso;
                                $atributos = [
                                    "supermercadoproductos_id" => $eroski->id,
                                    "precio" => $precio,
                                    "precio_kg" => $precioK
                                ];
                                Precio::create($atributos);
                                echo "Eroski ".$eroski->descripcion." actualizado.<br>";
                            }
                            else
                            {
                                echo "Eroski: ".$eroski->descripcion." no actualizado (Faltan datos).<br>";
                            }
                        }
                    }
                    else
                    {
                        echo "Eroski: ".$eroski->descripcion." Precio no actualizado (ya actual)<br>";
                    }
                }
        echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";
    }

    public function alcampo()
    {

        $alcampos = Supermercadoproducto::with("precio")->where("supermercado_id", 5)->get();

        foreach ($alcampos as $alcampo)
                {
                    if ((empty($alcampo->precio->last()->created_at)) or ($alcampo->precio->last()->created_at < now()->sub('hour', 16)))
                    {
                        if (($alcampo->scrab_id === NULL))
                        {
                            echo "Alcampo: ".$alcampo->descripcion." Precio no actualizado (No scrab_id)<br>";
                        }
                        else
                        {
                            $dataString = file_get_contents("https://www.compraonline.alcampo.es/api/v4/products/bop?retailerProductId={$alcampo->scrab_id}");
                            $dataArray = json_decode($dataString, true);
                            if(isset($dataArray['entities']))
                            {
                                $id= $dataArray['result']['product'];
                                $precio = $dataArray['entities']['product'][$id]['price']['current']['amount'];
                                $preciok = $dataArray['entities']['product'][$id]['price']['unit']['current']['amount'];
                                $atributos = [
                                    "supermercadoproductos_id" => $alcampo->id,
                                    "precio" => $precio,
                                    "precio_kg" =>$preciok
                                ];
                                Precio::create($atributos);
                                echo "Alcampo ".$alcampo->descripcion." actualizado.<br>";
                            }
                            else
                            {
                                echo "Alcampo: ".$alcampo->descripcion." Precio no actualizado (ya actual)<br>";
                            }
                        }
                    } else
                    {
                        echo "Alcampo:".$alcampo->descripcion." Precio no actualizado (ya actual)<br>";
                    }
                }
                echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";
    }

}
