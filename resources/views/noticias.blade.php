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
        <section class="flex p-1">

                  <!-- subnoticia -->
                @if ($noticias[1])
                  <x-noticia-card :noticia="$noticias[1]"/>
                @endif

                @if ($noticias[2])
                  <x-noticia-card :noticia="$noticias[2]"/>

                @endif


        </section>

                   <!-- noticias anteriores -->
        <section class="flex flex-col p-2 gap-2">

            <!-- titulo del grid -->
            <h2 class="text-center font-semibold border border-black">
             Anteriores noticias
            </h2>
                @if ($noticias[3])
                 <x-noticia-old-card :noticia="$noticias[3]"/>

               @endif

               @if ($noticias[4])
                <x-noticia-old-card :noticia="$noticias[4]"/>

                @endif


                @if ($noticias[5])
                    <x-noticia-old-card :noticia="$noticias[5]"/>
                @endif





        </section>
        {{$noticias->links()}}

    </section>

</main>

</x-layout>
