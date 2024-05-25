
<x-layout>

    <x-search-bar />


    <header class="text-center flex flex-col gap-2 pb-4">

{{-- /categorias/5 --}}

        <h1>
            <a href="{{route('index')}}/categorias/{{$producto[0]->subcategoria->categoria->id}}">
                <span class="font-bold text-2xl">
                    {{ $producto[0]->subcategoria->categoria->name }}
                </span>
            </a>
             /
            <a href="{{route('index')}}/subcategorias/{{$producto[0]->subcategoria->id}}">
                <span class="font-bold text-2xl">
                    {{$producto[0]->subcategoria->name}}
                </span>
            </a>
        </h1>
        <h2 class="font-bold text-2xl pt-2">
            {{ $producto[0]->name}}
        </h2>





</header>


    <main class="container">



        <!-- grid  principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">



        <article class="p-2 flex flex-col gap-6">

            <table>
                <thead>
                    <tr>
                        <th>Super</th>
                        <th class=" p-1 border border-slate-800">Descripción</th>
                        <th class=" p-1 border border-slate-800">Peso</th>
                        <th class=" p-1 border border-slate-800">€</th>
                        <th class=" p-1 border border-slate-800">€/Kg</th>
                        <th class=" p-1 border border-slate-800">
                            <div class="flex flex-col">
                               <p>Precio:</p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($supermercadoproductos as $item)

                    {{-- @php
                    $ayer = now()->subDays(1);
                    $semana = now()->subDays(7);
                    $preciosAyer = $item->precio->where('created_at', '<', $ayer)->sortBy('created_at')->last();
                    $preciosSemana = $item->precio->where('created_at', '<', $semana)->sortBy('created_at')->last();
                 @endphp --}}
                 {{-- @dd($item->precio->sortByDesc('created_at')->skip(1)->first()->precio_kg) --}}

                    @if (($item->scrab_id) AND ($item->precio->last() != NULL))
                    <tr class="text-center">
                        <td class="p-2 w-1/6">
                            <a href="{{ $item->link}}">
                                <img src="../img/brand_logos/{{$item->supermercado_id}}.png" alt="Supermercado Mercadona" />
                            </a>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <a href="javascript: void(0);" onclick="toggle('panel{{$item->supermercado_id}}')">
                                <p class="text-xs">
                                    {{ $item->descripcion }}
                                </p>
                            </a>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <p class="text-xs">{{ $item->peso}} gr</p>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <p class="text-xs">
                                <a href="javascript: void(0);" onclick="toggle('panel{{$item->supermercado_id}}')">
                                    {{$item->precio->last()->precio}}
                                </a>
                            </p>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <p class="text-xs">
                                <a href="javascript: void(0);" onclick="toggle('panel{{$item->supermercado_id}}')">
                                    {{$item->precio->last()->precio_kg}}
                                </a>
                            </p>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <p class="text-xs">
                                <a href="javascript: void(0);" onclick="toggle('panel{{$item->supermercado_id}}')">
                                    {{$item->precio->last()->created_at->diffForHumans()}}
                                </a>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="6">
                            <div class="p-2 columns-2" id="panel{{$item->supermercado_id}}" style="display: none;">
                                <img src="{{ $item->img_url}}" alt="Mercadona"
                                class="" />
                                <div class="py-6">


                                    <div class="flex justify-around text-sm text-white productoBoton mb-2">
                                        <p>Hace</p>
                                        <p>Precio</p>
                                    </div>
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>1 día</p>
                                        <p>
                                            {{$item->precio->sortByDesc('created_at')->skip(1)->first()->precio_kg}}
                                            €
                                        </p>
                                    </div>
                                    @if (isset($item->precio->sortByDesc('created_at')->skip(7)->first()->precio_kg))
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>7 días</p>
                                        <p>
                                            {{$item->precio->sortByDesc('created_at')->skip(7)->first()->precio_kg}}
                                           €</p>
                                    </div>
                                    @endif



                                </div>
                            </div>
                        </td>

                    </tr>
                    @endif


                @endforeach

                </tbody>

            </table>



        </article>

    </section>
            @if ($noticias->count() > 1)
                               <!-- noticias anteriores -->
                               <section class="flex flex-col p-2 gap-2">

                                <!-- titulo del grid -->
                                <h2 class="text-center font-semibold border border-black">
                                 Noticias relacionadas
                                </h2>
                                    @if ($noticias[0])
                                     <x-noticia-old-card :noticia="$noticias[0]"/>

                                   @endif

                                   @if ($noticias[1])
                                    <x-noticia-old-card :noticia="$noticias[1]"/>

                                    @endif


                                    @if ($noticias[2])
                                        <x-noticia-old-card :noticia="$noticias[2]"/>
                                    @endif





                            </section>
                            {{$noticias->links()}}

                        </section>
            @endif


    </main>

 </x-layout>
