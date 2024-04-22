<x-layout>

<x-search-bar />


<header class="text-center flex flex-col gap-2 pb-4">
    <h1 class="font-bold text-2xl">
        <a href="/noticias">
            <span class="text-xs">volver a</span>
            Noticias
        </a>
    </h1>
</header>

<main class="container">

    <!-- grid noticias principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">


            <!-- noticia principal -->

        <article class="p-2">


            <img src=".{{ $noticia->img_url}}" alt="Señora preocupada precios supermercado" class="p-2"/>


                <!-- titular -->


            <h2 class="text-center px-2 font-semibold text-xl">
                {{ $noticia->title}}
            </h2>



            <section class="flex justify-between p-3">
                <a href="/producto/{{$noticia->producto->id}}">
                    <div class="p-1 productoBoton text-white rounded-3xl border border">
                        {{ $noticia->producto->name }}
                    </div>
                </a>
                <div class="text-xs font-light content-center">Publicado
                    @php $date=$noticia->published_at;  @endphp
                        {{  \Carbon\Carbon::parse($date)->diffForHumans()}}
                </div>


            </section>

            <div class="flex flex-col gap-2 p-2">
                  <!-- p 1 -->
                <p>
                   {{ $noticia->p1}}
                </p>
                    <!-- p 2 -->
                <p>
                    {{ $noticia->p2}}
                </p>
                    <!-- p 3  -->
                <p>
                    {{ $noticia->p3}}
                </p>
            </div>

        </article>

    </section>

</main>
</x-layout>
