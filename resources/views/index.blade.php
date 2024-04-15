<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- barra de navegacion --}}
    <header>
        <nav
            class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">DentalNet</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                        started</button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{-- Seccion 1:hero /  intro section imagen principal --}}
        <div class="grid grid-cols-2 gap-4 bg-blue-200 mt-16 ">
            <div class="col-start-1">
                <p class=""> Ofrecemos un servicio de alta calidad </p>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos natus eius voluptatum
                </p>
                <div class="grid grid-cols-2">
                    <form action="#" method="POST">
                        @csrf <!-- Token CSRF para proteger tu formulario -->
                        <button type="submit">Enviar</button>
                    </form>
                    <form action="#" method="POST">
                        @csrf <!-- Token CSRF para proteger tu formulario -->
                        <button type="submit">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="">
                <h1>Aqui va un imagen </h1>
            </div>
        </div>

        {{-- Seccion 2: Primera franja | Llamada telefonica | Agenda tu cita | Consuta --}}
        <div class="grid grid-cols-4 bg-blue-400 w-full mt-2">
            <div class="col-start-1">
                <h1>Que ofrecemos</h1>
                <p>sigue los siguientes pasos
                <p>
            </div>

            {{-- Targetas  --}}
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                    <p class="text-gray-700 text-base">
                        Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                    <p class="text-gray-700 text-base">
                        Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                    <p class="text-gray-700 text-base">
                        Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                    {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                </div>
            </div>
        </div>

        {{-- Seccion 3: Que es lo que ofrecemos  --}}
        <div class="grid grid-cols-2 bg-green-200 mt-2">
            <div>
                <h1>Tittle</h1>
                <p>Lorem ipsum dolor sit amet, conse</p>
            </div>
            <div class="col-start-2">
                <p> que es lo que garantizamos</p>
                <p> what we provide </p>

                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                </ul>
            </div>

        </div>

        {{-- Seccion 4: Que es lo que nos hace especial --}}
        <div>
            <div class="grid grid-cols-2 bg-green-400 mt-4">
                <h1>Que nos hace especial</h1>
                <h1 class="col-start-2">Key features</h1>
            </div>
            <div class="grid grid-cols-3 bg-purple-500 mt-2">
                <div>

                </div>

            </div>
        </div>

        {{-- Seccion 5: Franja motivadora --}}
        <div class="grid grid-cols-1 bg-cyan-300">
            <h1>Let us bighten Your Smile!</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Cumque fugit distinctio sunt fugiat dolor sequi nisi beatae
                officiis, ratione consectetur fuga pariatur. Earum dignissimos distinctio vitae nulla
                necessitatibus, quidem itaque.
            <p>
            <form action="#" method="POST">
                @csrf <!-- Token CSRF para proteger tu formulario -->
                <button type="submit">Enviar</button>
            </form>

        </div>

        {{-- Seccion 6: Quienes somos --}}
        <div class="grid grid-cols-2 bg-cyan-100 mt-10 ">
            <h1> Quienes somos</h1>
            <h1> Nuestra gloriosa historia</h1>
            <p>aca va una imagen <p>
            <div class="col-start-2">
                <h1>  Nuestra Historia </h1>
            </div>
        </div>
        {{-- Seccion 7: Conoce a nuestros doctores --}}
        <div>
            <div class="grid grid-cols-2 bg-fuchsia-300 mt-10">
                <h1>Conoce a nuestros doctores</h1>
                <p class="col-start-2">Conoce su historia</p>
            </div>
            <div class="grid grid-cols-4">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                        <p class="text-gray-700 text-base">
                            Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                        <p class="text-gray-700 text-base">
                            Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                        <p class="text-gray-700 text-base">
                            Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                    </div>
                </div>
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="/img/card-top.jpg" alt="Imagen descriptiva">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Título de la Tarjeta</div>
                        <p class="text-gray-700 text-base">
                            Aquí va el contenido de la tarjeta. Puedes añadir más texto aquí.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta1</span> --}}
                        {{-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#etiqueta2</span> --}}
                    </div>
                </div>
            </div>
        </div>


        {{-- Seccion 8: Testimonios de nuestros clientes | Carrusel --}}
        <div class="grid grid-cols-2 bg-slate-600">
            <h1> Aca va una imagen</h1>
            <div class="col-start-2">
                <h1> Que es lo que nuestros clientes piensan de nosotros </h1>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maiores porro cum quae officia!
                     Voluptatem neque itaque quos, beatae fugiat placeat corporis modi laudantium quaerat ab asperiores
                      ratione quidem quibusdam!</p>
            </div>

        </div>

        {{-- Seccion 9: Formulario de contacto --}}
        <div class="bg-green-900 mt-10 ">
            <h1>Formulario de contacto</h1>
        </div>


        {{-- Seccion 10: Footer --}}

    </main>
<footer>
    <div class="bg-green-300 mt-10 ">
        <h1>Footer</h1>
    </div>
</footer>

</body>

</html>
