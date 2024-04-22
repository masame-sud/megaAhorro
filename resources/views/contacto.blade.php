<x-layout>

<x-search-bar />

<header class="text-center flex flex-col gap-2 pb-4">
    <h1 class="font-bold text-2xl pt-2">
        Contacto
    </h1>
</header>

<main class="container">
      <!-- grid  principal -->
    <section class="pt-2 py-12 gap-3 flex flex-col">

        <article class="p-2 flex flex-col gap-6">

            <p>¿Te gusta el proyecto? ¿Tienes alguna sugerencia? Nos interesa saber !</p>
            <p>Utiliza el siguiente formulario para enviarnos tu mensaje.</p>

            <form action="{{route('contacto.store')}}" method="POST">
                @csrf
                <label for="nombre">
                    <p>Nombre
                        <span class="verde">(opcional)</span>
                    </p>
                </label><br>
                <input type="text" id="nombre" name="nombre" class="border container"><br><br>

                <label for="email">
                    <p>Email
                        <span class="naranja">(obligatorio)</span>
                    </p>
                </label><br>
                <input type="email" id="email" name="email" class="border container"><br><br>

                <label for="mensaje">
                    <p>Tu mensaje
                        <span class="amarillo">(máx 255 car.)</span>
                    </p>
                </label>
                <textarea name="mensaje" id="mensaje" cols="25" rows="10"
                class="border container shadow-inner"
                placeholder="Escribe aqui tu mensaje"></textarea><br><br>
                <div class="justify-center flex">
                    <input type="submit" value="Enviar" class="shadow-inner border border-black rounded-full p-2">
                </div>


            </form>

        </article>

    </section>

</main>

</x-layout>
