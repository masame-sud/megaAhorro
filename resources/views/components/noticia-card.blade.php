@props(['noticia'])
            <!-- subnoticia 1 -->
       <article class="border border-black flex flex-col justify-between gap-2 basis-1/2">

        <img src="{{ $noticia->img_url}}" alt="Foto de la noticia" class="p-2 img-reducida" />

        <a href="{{route('noticias')}}/{{$noticia->id}}">
            <h2 class="text-sm grow px-2 font-semibold">
                {{ $noticia->title}}
            </h2>
        </a>

        <section class="p-1 col-2 flex justify-between">
            <a href="{{route('index')}}/producto/{{$noticia->producto->id}}" class="text-center">
                <P  class="p-1 productoBoton text-white rounded-3xl border border text-xs">
                    {{ $noticia->producto->name }}
                </P>
            </a>
            <div class="text-xs content-center">
                <p class="text-right ">
                    Publicado:
                </p>
                <p class=" font-light text-right">
                     @php $date=$noticia->published_at;  @endphp
                      {{  \Carbon\Carbon::parse($date)->locale('es')->diffForHumans()}}
                </p>
            </div>
        </section>

    </article>
