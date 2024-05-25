<x-layout>

<x-search-bar />

<header class="text-center flex flex-col gap-2 pb-4">
    <h1 class="font-bold text-2xl pt-2">
        Colabora
    </h1>
</header>

<main class="container">

        <!-- grid  principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">

        <article class="p-3 px-5 flex flex-col gap-6 text-center">

            <p>Pulsando en los siguientes botones podrás actualizar los precios</p>

            <a href="{{ route('actmercadona')}}" class="mx-auto">
                <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                    Mercadona
                </div>
            </a>
            <a href="{{ route('actcarrefour')}}" class="mx-auto">
                <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                    Carrefour
                </div>
            </a>
            <a href="{{ route('actdia')}}" class="mx-auto">
                <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                    Día
                </div>
            </a>
            <a href="{{ route('acteroski')}}" class="mx-auto">
                <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                    Eroski
                </div>
            </a>
            <a href="{{ route('actalcampo')}}" class="mx-auto">
                <div class="p-3 rounded-3xl border border-2 border-slate-500 text-center">
                    Alcampo
                </div>
            </a>

            <p>Tras pulsar, la página se quedará cargando y tras finalizar, los precios se actualizarán.</p>
            <p>Gracias por tu colaboración</p>

        </article>

    </section>



</main>


</x-layout>
