
<x-layout>

    <x-search-bar />


    <header class="text-center flex flex-col gap-2 pb-4">



        <h1>
            <a href="/categorias">
                <span class="font-bold text-2xl">
                    {{ $producto->subcategoria->categoria->name }}
                </span>
            </a>
             /
            <a href="javascript:window.history.back();">
                <span class="font-bold text-2xl">
                    {{$producto->subcategoria->name}}
                </span>
            </a>
        </h1>
        <h2 class="font-bold text-2xl pt-2">
            {{ $producto->name}}
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
                                <div>15</div>
                                <div>2</div>
                                <div>2024</div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($suppro as $item)


                    @if ($item->scrab_id)
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
                                {{$item->precio->sortByDesc('created_at')->pluck('precio')->first()}}

                            </p>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <p class="text-xs">
                                {{$item->precio->sortByDesc('created_at')->pluck('precio_kg')->first()}}
                            </p>
                        </td>
                        <td class=" p-1 border border-slate-500">
                            <img src="../img/semam.png" alt="Precio sigue igual" />
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
                                        <p>1.30 €</p>
                                    </div>
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>7 días</p>
                                        <p>1.30 €</p>
                                    </div>
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>1 mes</p>
                                        <p>1.30 €</p>
                                    </div>
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>6 meses</p>
                                        <p>1.30 €</p>
                                    </div>
                                    <div class="flex justify-between px-3 text-sm">
                                        <p>1 año</p>
                                        <p>1.30 €</p>
                                    </div>

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

                <!-- noticias anteriores -->
        <section class="flex flex-col p-2 gap-2">

            <!-- titulo del grid -->
            <h2 class="text-center font-semibold border border-black">
                Noticias relacionadas
            </h2>

            <article class="border border-black flex gap-2">

                <img src="./img/front02.jpg" alt="Señora preocupada precios supermercado" class="p-2 w-1/3" />

                <h2 class="p-2 font-semibold text-sm content-center">
                    <a href="noticia.html">
                        Cada vez es más dificil llenar el carro de la compra
                    </a>
                </h2>

            </article>

            <article class="border border-black flex gap-2">

                <img src="./img/front02.jpg" alt="Señora preocupada precios supermercado" class="p-2 w-1/3" />

                <h2 class="p-2 font-semibold text-sm content-center">
                    <a href="noticia.html">
                        Cada vez es más dificil llenar el carro de la compra
                    </a>
                </h2>

            </article>

            <article class="border border-black flex gap-2">

                <img src="./img/front02.jpg" alt="Señora preocupada precios supermercado" class="p-2 w-1/3" />

                <h2 class="p-2 font-semibold text-sm content-center">
                    <a href="noticia.html">
                        Cada vez es más dificil llenar el carro de la compra
                    </a>
                </h2>

            </article>


            <!-- pagination -->
            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Anteriores</a>
                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Siguientes</a>
                </div>

                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                            <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                            <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                            <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

    </main>

 </x-layout>
