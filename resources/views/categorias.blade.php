<x-layout>

<x-search-bar />


    <header class="text-center flex flex-col gap-2 pb-4">
        <h1 class="font-bold text-2xl">Categorías</h1>
    </header>

    <main class="container">



            <!-- grid  principal -->
        <section class="pt-2 py-12 gap-3 flex flex-col">

            <article class="p-2 flex flex-wrap gap-6 justify-around">

                @foreach ($categorias as $categoria)
                    <a href="categorias/{{ $categoria->id}}">
                        <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                            {{ $categoria->name}}
                        </div>
                    </a>
                @endforeach


            </article>

        </section>

</main>
</x-layout>
