@props(['noticia'])
            <!-- subnoticia 1 -->
       <article class="border border-black flex flex-col justify-between gap-2 basis-1/2">

        <img src="{{ $noticia->img_url}}" alt="Foto de la noticia" class="p-2 img-reducida" />

        <a href="/noticias/{{$noticia->id}}">
            <h2 class="text-sm grow px-2 font-semibold">
                {{ $noticia->title}}
            </h2>
        </a>

        <section class="p-2 flex justify-between text-xs">
            <a href="./producto.html">
                <div class="p-1 productoBoton text-white rounded-3xl border text-center">
                    {{ $noticia->producto->name }}
                </div>
            </a>
            <div class="flex flex-col justify-center">
                <p class="text-xs font-light text-center">Publicado</p>
                <p class="text-xs font-light text-center">
                    @php $date=$noticia->publish_at;  @endphp
                    {{  \Carbon\Carbon::parse($date)->diffForHumans()}}
                </p>
            </div>
        </section>

    </article>
