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


                <section class="flex justify-between p-3">

                    <a href="./producto.html">
                        <div class="p-1 productoBoton text-white rounded-3xl border border">
                            {{ $noticia->producto->name }}
                        </div>
                    </a>
                    <div class="text-xs font-light content-center">Publicado:
                        @php $date=$noticia->publish_at;  @endphp
                        {{  \Carbon\Carbon::parse($date)->diffForHumans()}}
                    </div>
                </section>

            </article>

