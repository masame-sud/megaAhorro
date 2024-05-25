@props(['noticia'])
            <!-- subnoticia 1 -->
            <article class="border border-black flex gap-2">

                <img src="{{ $noticia->img_url}}" alt="Foto de la noticia" class="p-2 w-1/3" />

                <h2 class="p-2 font-semibold text-sm content-center">
                    <a href="{{route('index')}}/noticias/{{$noticia->id}}">
                        {{ $noticia->title}}
                    </a>
                </h2>

            </article>
