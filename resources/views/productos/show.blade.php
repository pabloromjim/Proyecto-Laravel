<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hueso</title>

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
                    <input type="text"
                        class=" relative m-0 -mr-px block w-[1%] min-w-0 flex-auto  border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5  rounded-2xl	text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-[#ff5400] focus:text-white focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 "
                        placeholder="Busqueda">
                    <!-- <button
                      class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                      type="button">
                      Search
                    </button> -->
                    <button class="relative z-[2] px-6 py-2 text-xs font-medium uppercase text-primary left-[-3.5rem]">
                        <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z">
                            </path>
                        </svg>
                    </button>
                </div>

            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">


                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z">
                        </path>
                        <circle cx="10.5" cy="18.5" r="1.5"></circle>
                        <circle cx="17.5" cy="18.5" r="1.5"></circle>
                    </svg>
                </a>
                <a class="pl-3  inline-block no-underline hover:text-[#ff5400]" href="#">
                    <svg class="fill-current hover:text-[#ff5400]" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3"></circle>
                        <path
                            d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right"
        style=" height: 32rem; background-image: url('https://s2.gaming-cdn.com/img/products/2587/pcover/2587.jpg?v=1676979802');">

        <div class="container mx-auto">

            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-black text-2xl my-4">Atomic Heart</h1>
              

            </div>

        </div>

    </section>



    <section class="bg-[rgb(39,39,39)] text-white work-sans py-8">

        <div class="container mx-auto flex items-center  justify-center flex-wrap pt-4 pb-12 ">


            <div class="z-[1] flex flex-col top-[-230px] mb-[-230px] relative w-auto max-w-[1200px] self-center w-full">
                <div class="flex flex-col">
                    <div class="flex items-start flex-wrap md:flex-nowrap">
                        <div class="flex flex-col flex-[0_0_616px] relative h-[353px]">
                            <picture class="flex justify-center"><img
                                    src="{{$producto->imagen}}">
                            </picture>
                        </div>
                        <!-- datos precios... -->
                        <div class="backdrop-blur-[60px] backdrop-saturate-[100%] w-full z-[1] min-h-[310px] flex flex-col justify-start items-center bg-[linear-gradient(1turn,black,rgba(39,39,39,0)_70%)] bg-transparent min-h-full ml-[60px] pt-5 pb-0 px-5 rounded-[15px]
                        ">
                            <div class="flex items-center justify-between mx-[30px] my-[5px]">
                                <h1 class="text-[27px] leading-[27px] text-center m-0">{{$producto->titulo}}</h1>
                                <div data-text-add="Añadir a mi wishlist"
                                    data-text-remove="Añadido a tu lista de deseos" data-hint="Añadir a mi wishlist"
                                    href="https://www.instant-gaming.com/es/wishlist/" data-prodid="2587"
                                    class="favorite addwishlist hint--top hint--rounded mimic ">
                                    <div class="icon-favorite icon-s"></div>
                                    <div class="icon-favorited icon-s"></div>
                                </div>
                            </div>
                            <div
                                class="text-[13px] bg-[rgba(16,16,16,0.3)] flex items-center justify-center min-h-[50px] m-2.5 px-5 py-[7px] rounded-[100px]">
                                <a href="/es/juegos/steam/" class="text-white no-underline flex items-center -ml-3">
                                    <div class="single platform-steam">
                                        <div class="icon-steam icon-s"></div>
                                    </div>
                                    {{$producto->plataforma}}
                                    <div class="bg-[hsla(0,0%,100%,0.15)] w-px h-5 mx-2.5 my-0"></div>
                                </a>
                                <div class="flex items-center box-border m-0 p-0">
                                    <div class="mr-2.5">
                                        <svg  class="fill-[#18c418]" id="Layer_1" version="1.1"
                                            viewBox="0 0 24 24" width="24px" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path clip-rule="evenodd"
                                                d="M21.652,3.211c-0.293-0.295-0.77-0.295-1.061,0L9.41,14.34  c-0.293,0.297-0.771,0.297-1.062,0L3.449,9.351C3.304,9.203,3.114,9.13,2.923,9.129C2.73,9.128,2.534,9.201,2.387,9.351  l-2.165,1.946C0.078,11.445,0,11.63,0,11.823c0,0.194,0.078,0.397,0.223,0.544l4.94,5.184c0.292,0.296,0.771,0.776,1.062,1.07  l2.124,2.141c0.292,0.293,0.769,0.293,1.062,0l14.366-14.34c0.293-0.294,0.293-0.777,0-1.071L21.652,3.211z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-wrap w-full justify-center w-[fill-available] mt-auto mb-2.5 mx-0 pt-[7px]">
                               
                            
                            </div>
                            <div class="flex items-baseline mt-auto m-2.5">
                                <div class="text-[40px] flex justify-end leading-[30px] items-baseline ml-2.5 pt-2.5">
                                    {{$producto->precio}}€</div>
                            </div>
                            <div class="flex w-full mt-[3px] mb-0 mx-[5px]">
                                <a href="#"
                                    class="shadow-none w-full font-bold text-[17px] bg-[#ff5400] text-white inline-flex items-center justify-center h-14 cursor-pointer text-center whitespace-normal mb-0 m-[5px] px-[15px] py-0 rounded-lg border-0">Compra
                                    Ahora</a>
                            </div>
                            <div id="sep" class="h-[60px]"></div>
                        </div>
                        <!-- detalles -->


                    </div>
                </div>
                <div class="mt-[-15px] mr-[-15px] mb-[-15px] ml-[-15px] flex box-border p-0 flex-wrap md:flex-nowrap">
                    <!-- sobre -->
                    <div
                        class="box-border w-[calc(55%_-_30px)] flex-[0_0_616px] flex flex-col flex-[0_0_50%] ml-[15px] mr-0 my-[15px] p-0">
                        <div class="justify-start flex items-center w-full max-w-[1200px] self-center mb-[30px]">
                            <h2 class="text-[27px] mb-0">Acerca del juego</h2>
                        </div>
                        <div class=" overflow-hidden text-ellipsis leading-[25px] text-[#999] box-border m-0 p-0">
                            {{$producto->descripcion}}
                        </div>

                    </div>
                    <!-- specifics -->
                    <div class="w-6/12 ml-[30px] ml-[90px] mr-[15px] my-[15px]">
                        <div class="min-h-[50px] flex items-center mb-[13px]">
                            <div class="cursor-pointer flex items-center w-min">
                                <div class="flex-[0_0_45px] font-bold relative flex mr-[15px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                        <g id="circles" stroke-width="2">
                                            <circle r="16" cx="18" cy="18" fill="none" class="stroke-[#6dd432]">
                                            </circle>
                                            <circle r="16" cx="18" cy="18" fill="none" stroke-dasharray="100 100" class="
                                    circle-meter-bar
                                    medium                    high                "></circle>
                                        </g>
                                    </svg>
                                    <div class="absolute text-[#ff0a4e] flex justify-center items-center inset-0">{{$producto->valoracion}}
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- tabla -->
                        <div class="leading-[25px] text-[#999] table">
                            <div class="table-row">
                                <div class="whitespace-nowrap table-cell pr-[30px]">Fecha de lanzamiento</div>
                                <div class="table-cell">
                                    <a href="#">{{$producto->fecha_lanzamiento}}</a>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="whitespace-nowrap table-cell pr-[30px]">Desarrollador</div>
                                <div class="table-cell">
                                    <a href="#">{{$producto->desarrollador}}</a>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="whitespace-nowrap table-cell pr-[30px]">Genero</div>
                                <div class="table-cell">
                                    <a href="#">{{$producto->genero}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>


    <div class="bg-[#323232] flex flex-col box-border m-0 p-[30px]">
        <div class="h-60px="></div>
        <div class=" box-border max-w-[1200px] self-center w-full flex justify-between m-0 p-0">
            <div class="flex-row flex items-center box-border mr-[30px] m-0 p-0">
                <div class="flex-row flex items-center box-border mr-[30px] m-0 p-0">
                    <div class="w-10 h-10 flex-[0_0_40px] box-border mr-5 m-0 p-0">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #ff5400;
                                    }
                                </style>
                            </defs>
                            <path class="cls-1"
                                d="M125,177.86a5,5,0,0,1-4.74-3.42L96,101.76,27.64,77.57a5,5,0,0,1,.2-9.49L169.22,24.53a5,5,0,0,1,6.23,6.3L129.76,174.37a5,5,0,0,1-4.73,3.49ZM45.23,73.19l56.44,20a5,5,0,0,1,3.07,3.13l20.15,60.44L163,36.9Z">
                            </path>
                            <path class="cls-1"
                                d="M100,102.84a4.94,4.94,0,0,1-3.59-1.52,5,5,0,0,1,.11-7.07L131.86,60a5,5,0,0,1,7,7.18l-35.35,34.26A5,5,0,0,1,100,102.84Z">
                            </path>
                            <path class="cls-1"
                                d="M75,175.69a5,5,0,0,1-3.19-8.85l25-20.69a5,5,0,0,1,6.38,7.7l-25,20.69A5,5,0,0,1,75,175.69Z">
                            </path>
                            <path class="cls-1"
                                d="M29.31,175.69a5,5,0,0,1-3.53-8.54l45.68-45.69a5,5,0,0,1,7.08,7.08L32.85,174.22A5,5,0,0,1,29.31,175.69Z">
                            </path>
                            <path class="cls-1"
                                d="M29.31,130a5,5,0,0,1-3.85-8.19l20.69-25a5,5,0,0,1,7.7,6.38l-20.69,25A5,5,0,0,1,29.31,130Z">
                            </path>
                        </svg>
                    </div>
                    <div class="">
                        <h3 class="text-[19px] mb-[5px]">¡No te pierdas ninguna oferta o promoción!</h3>
                        <span class="text-[#999] box-border mb-[30px] m-0 p-0">¡Y sé el primero en recibir nuestras
                            ofertas privadas, newsletters y promociones de la semana!</span>
                    </div>
                </div>

                <a href="#"
                    class="font-bold text-[17px] bg-[#ff5400] text-white inline-flex items-center justify-center h-14 box-border transition-[0.2s] cursor-pointer text-center whitespace-normal no-underline m-0 px-[30px] py-0 rounded-lg border-0">
                    ¡Suscríbete!
                </a>
            </div>
        </div>
    </div>

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