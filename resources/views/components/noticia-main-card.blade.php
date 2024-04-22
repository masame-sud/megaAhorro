@props(['noticia'])

                <!-- noticia principal -->
              <article class="p-2">
                <img src="{{ $noticia->img_url}}" alt="Imagen articulo principal" class="p-2"/>
                    <!-- titular -->
                <a href="/noticias/{{$noticia->id}}">
                    <h2 class="text-center px-2 font-semibold">
                        {{ $noticia->title}}
                    </h2>
                </a>

                <section class="p-1 col-2 flex justify-between">
                    <a href="/producto/{{$noticia->producto->id}}" class="text-center">
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
                             {{  \Carbon\Carbon::parse($date)->diffForHumans()}}
                        </p>
                    </div>
                </section>
            </article>

