<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Consecionario Autos</a>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-end">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                        <!-- Menú Desplegable de Inventario -->
                        <div class="relative group">
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                               onmouseover="showMenu('inventarioMenu')" onmouseout="hideMenu('inventarioMenu')">Inventario</a>
                            <div id="inventarioMenu" class="hidden absolute bg-gray-800 text-white rounded-md mt-2 w-36 z-10 py-2">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Ver Inventario</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Agregar Producto</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Eliminar Producto</a>
                            </div>
                        </div>
                        <!-- Menú Desplegable de Ventas -->
                        <div class="relative group">
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                               onmouseover="showMenu('inventarioMenu')" onmouseout="hideMenu('inventarioMenu')">Ventas</a>
                            <div id="inventarioMenu" class="hidden absolute bg-gray-800 text-white rounded-md mt-2 w-36 z-10 py-2">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Ver Inventario</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Agregar Producto</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Eliminar Producto</a>
                            </div>
                        </div>
                        <!-- Menú Desplegable de Recursos Humanos-->
                        <div class="relative group">
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                               onmouseover="showMenu('inventarioMenu')" onmouseout="hideMenu('inventarioMenu')">Recursos Humanos</a>
                            <div id="inventarioMenu" class="hidden absolute bg-gray-800 text-white rounded-md mt-2 w-36 z-10 py-2">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Ver Inventario</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Agregar Producto</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Eliminar Producto</a>
                            </div>
                        </div>
                        <!-- Menú Desplegable de Empleados-->
                        <div class="relative group">
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                               onmouseover="showMenu('inventarioMenu')" onmouseout="hideMenu('inventarioMenu')">Empleados</a>
                            <div id="inventarioMenu" class="hidden absolute bg-gray-800 text-white rounded-md mt-2 w-36 z-10 py-2">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Ver Inventario</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Agregar Producto</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Eliminar Producto</a>
                            </div>
                        </div>
                        <div class="img-container">
                            <a href="#">
                                <img src="/resources/images/apagar.png">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Inicio</a>
            <!-- Menú Desplegable de Inventario -->
            <div class="relative group">
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                   onmouseover="showMenu('mobileInventarioMenu')" onmouseout="hideMenu('mobileInventarioMenu')">Inventario</a>
                <div id="mobileInventarioMenu" class="hidden absolute bg-gray-800 text-white rounded-md mt-2 w-36 z-10 py-2">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Ver Inventario</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Agregar Producto</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-700 transition duration-300">Eliminar Producto</a>
                </div>
            </div>
            <!-- Otros menús desplegables -->
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Ventas</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Recursos Humanos</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Empleados</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Cerrar Sesión</a>
        </div>
    </div>
</nav>

