<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MegaAhorro</title>

    <link rel="icon" href="{{route('index')}}/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{route('index')}}/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{route('index')}}/myscript.js"></script>
</head>
<body class="md:container md:m-auto md:max-w-lg">

    <nav class="p-2 flex justify-between">
        <div class="w-1/2">
            <a href="/">
                <img src="{{route('index')}}/img/logo.png" alt="MegaAhorro Logo" width="90" height="64">
            </a>
        </div>
        <div class="w-1/2 flex justify-end px-2">
            <div class="w-1/2 py-2 flex justify-center">
                {{-- <button onclick="mostrarOcultar()" type="button">
                    <img src="../img/icons/MagnifyingGlassCircle.svg" alt="MegaAhorro search" width="48" height="48">

                </button> --}}
            </div>

            <div class="w-1/2 py-2 flex justify-center ">

                <div class="dropdown content-center">

                        <img src="{{route('index')}}/img/icons/Bars3.svg" alt="MegaAhorro menu" width="48" height="48" onclick="openNav()">

                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                              <a href="{{ route('noticias')}}">Noticias</a>
                              <a href="{{ route('categorias')}}">Precios</a>
                              <a href="{{ route('nosotros')}}">Nosotros</a>
                              <a href="{{ route('contacto.index')}}">Contacto</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </nav>

    {{ $slot }}

    <footer>
        <div class="py-6 bg-footer flex-col items-center gap-2 inline-flex">
            <h2 class="font-bold text-3xl">
                <a href="{{ route('colabora')}}">
                    Colabora !
                </a>
            </h2>
            <img src="{{route('index')}}/img/miau.jpg" alt="Ayuda a MegaAhorro" class="miau"/>
            <p class="text-sm text-center">
                ¡ Con tu ayuda podremos seguir siendo independientes !
            </p>

        </div>
        <h4 class="text-center text-xs text-white bg-black">Diseño realizado por ManolitoCode</h4>

    </footer>

</body>
</html>
