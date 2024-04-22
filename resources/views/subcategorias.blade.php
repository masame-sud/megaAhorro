

<x-layout>

    <x-search-bar />


    <header class="text-center flex flex-col gap-2 pb-4">

        <a href="/categorias">

            <h1 class="font-bold text-2xl">
                <span class="text-xs">Volver de</span>

                {{ $categoria->name }}
            </h1>

        </a>

        <h2 class="font-bold text-2xl">
            Subcategorias
        </h2>


</header>

        <main class="container">



                <!-- grid  principal -->
            <section class="pt-2 py-12 gap-3 flex flex-col">

                <article class="p-2 flex flex-wrap gap-6 justify-around">

                    @foreach ($subcategorias as $subcategoria)
                        <a href="../subcategorias/{{ $subcategoria->id}}">
                            <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                                {{ $subcategoria->name}}
                            </div>
                        </a>
                    @endforeach


                </article>

            </section>

    </main>
    </x-layout>
