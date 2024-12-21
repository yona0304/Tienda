<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Empresa Logo" />
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <a href="#"><i
                    class="fa-regular fa-user text-gray-400 text-xl hover:text-gray-900 dark:hover:text-white"></i></a>
            <span class="border-l border-gray-300 h-6"></span>
            <a href="#"><i
                    class="fa-solid fa-cart-shopping text-gray-400 text-xl hover:text-gray-900 dark:hover:text-white"></i></a>
            <button data-collapse-toggle="mega-menu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 z-50">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">Inicio</a>
                </li>
                <li>
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Productos <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="mega-menu-dropdown"
                        class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Camisas
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Buzos
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Conjuntos
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Chaquetas
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Pantalonetas
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Shorts
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="p-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Equipo</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
