<x-layout>

<x-search-bar />




<main class="container">



     <!-- grid noticias principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">

               <!-- titulo del grid -->

                <header class="text-center flex flex-col gap-2 pb-4">
                     <h1 class="font-bold text-2xl">Noticias</h1>
                </header>

                <x-noticia-main-card :noticia="$noticias[0]"/>
                 <!-- grid subnoticias -->
            <section class="flex flex-row gap-2 p-1">

                <x-noticia-card :noticia="$noticias[1]"/>
                    <!-- subnoticia 2 -->
                <x-noticia-card :noticia="$noticias[2]"/>


            </section>




    </section>

</main>

</x-layout>
