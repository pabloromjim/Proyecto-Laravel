<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Juegos</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-[rgb(39,39,39)] text-white work-sans leading-normal text-base tracking-normal">

    <!--Nav  sticky?-->
    <nav id="header" class="sticky w-full z-30 top-0 py-1 bg-[rgba(16,16,16,1)]">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <a class="inline-block no-underline hover:text-[#ff5400]  py-2 px-4" href="#">Logo</a>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-white  pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#ff5400]  py-2 px-4" href="#">Logo</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-2">
                <!-- <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-[#ff5400] text-xl " href="#">
                    Barra busqueda
                </a> -->
                <div class="relative mb-4 flex w-full flex-wrap items-stretch top-[0.5rem]">
                    <input
                      type="text"
                      class=" relative m-0 -mr-px block w-[1%] min-w-0 flex-auto  border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5  rounded-2xl	text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-[#ff5400] focus:text-white focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 "
                      placeholder="Busqueda" />
                    <!-- <button
                      class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                      type="button">
                      Search
                    </button> -->
                    <button class="relative z-[2] px-6 py-2 text-xs font-medium uppercase text-primary left-[-3.5rem]">
                        <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                    </button>
                  </div>
                     
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">


                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z"></path>
                        <circle cx="10.5" cy="18.5" r="1.5"></circle>
                        <circle cx="17.5" cy="18.5" r="1.5"></circle>
                    </svg>
                </a>
                <a class="pl-3  inline-block no-underline hover:text-[#ff5400]" href="{{route('register')}}">
                    <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3"></circle>
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style=" height: 32rem; background-image: url('https://s2.gaming-cdn.com/img/products/2587/pcover/2587.jpg?v=1676979802');">

        <div class="container mx-auto">

            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-black text-2xl my-4">Atomic Heart</h1>

            </div>

        </div>

    </section>

    <section class="bg-[rgb(39,39,39)] text-white work-sans py-8">

<div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

    <nav id="store" class="w-full top-0 px-6 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">

            <a class="uppercase tracking-wide text-center   no-underline font-bold text-white text-xxl " href="#">
                Todos los productos
            </a>

            <div class="flex items-center">
            




            <!-- <a class="pl-3 inline-block no-underline hover:text-[#ff5400] href=" #">
                    <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                    </svg>
                </a> -->
            </div>
        </div>
    </nav>
    @foreach ($productos as $producto)
    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="{{route('producto.show', $producto)}}">
            <img class="hover:grow hover:shadow-lg" src="{{$producto->imagen}}">
            <div class="pt-3 flex items-center justify-between">
                <p class="">{{$producto->titulo}}</p>
                <!-- carrito -->
                <svg class="h-6 w-6 fill-current text-white hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z"></path>
                </svg>
            </div>
            <p class="pt-1 text-[#ff5400]">{{$producto->precio}}</p>
        </a>
    </div>
    @endforeach

</div>
    </section>


    <footer class=" mb-0 box-border flex w-full flex-col self-center mt-16 bg-[rgba(16,16,16,1)]">
        <div class="box-border flex w-full flex-col self-center max-w-[1200px]">
            <div class="mb-7 box-border flex justify-between pb-7 flex-wrap">

                <ul class="box-border flex flex-col justify-between ">
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Términos y condiciones</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Política de privacidad </a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Contacto</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">FAQ</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">
                            <div class="mr-2.5 box-border h-5 w-5 bg-[rgba(255,84,0,1)]"></div>
                            <span class="box-border ">Nuestras tarjetas regalo</span>
                        </a>
                    </li>
                </ul>

                <ul class="box-border flex flex-col justify-between ">
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Términos y condiciones</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Política de privacidad </a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Contacto</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">FAQ</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">
                            <div class="mr-2.5 box-border h-5 w-5 bg-[rgba(255,84,0,1)]"></div>
                            <span class="box-border ">Nuestras tarjetas regalo</span>
                        </a>
                    </li>
                </ul>
                <ul class="box-border flex flex-col justify-between ">
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Términos y condiciones</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Política de privacidad </a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">Contacto</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">FAQ</a>
                    </li>
                    <li class="box-border flex items-center ">
                        <a class="box-border flex items-center text-white ">
                            <div class="mr-2.5 box-border h-5 w-5 bg-[rgba(255,84,0,1)]"></div>
                            <span class="box-border ">Nuestras tarjetas regalo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>