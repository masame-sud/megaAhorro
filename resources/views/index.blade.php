<x-layout>

<x-search-bar />

@include('_index-header')


<main class="container">
    <!-- slider -->
    <x-slider />


     <!-- grid noticias principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">

               <!-- titulo del grid -->


            <h2 class="text-center font-semibold border border-black">
                <a href="/noticias">
                    Últimas Noticias
                </a>
            </h2>

                <x-noticia-main-card :noticia="$noticias[0]"/>
                 <!-- grid subnoticias -->
            <section class="flex gap-2 p-1">

                <x-noticia-card :noticia="$noticias[1]"/>
                    <!-- subnoticia 2 -->
                <x-noticia-card :noticia="$noticias[2]"/>


            </section>




    </section>

</main>

</x-layout>
