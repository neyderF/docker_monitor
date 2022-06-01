<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/tailwindConf.js"></script>
    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <title>Monitor de recursos</title>
</head>

<body class="bg-white dark:bg-slate-800">
    <header class="mx-auto flex flex-row p-3 items-center bg-slate-200 dark:bg-slate-700 shadow-sm">
        <div class="flex grow">
            <h1 class="text-3xl font-bold  text-slate-700 dark:text-slate-200">
                Monitor de recursos
            </h1>
        </div>
        <nav class="flex mx-5">
            <a href="#info-system">Información del sistema</a> |
            <a href="#info-dockers">Dockers</a>
        </nav>
        <button id="theme-toggle" type="button" class="text-slate-700 w-10 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </header>

    <!-- Inicia información del sistema -->
    <section id="info-system" class="container mx-auto flex  mt-5 flex-col">

        <div class="flex items-center flex-col">
            <h1 class="text-2xl font-bold text-slate-700 dark:text-slate-200">
                Recursos del sistema
            </h1>
            <h3 class="text-md font-normal max-w-sm  text-center text-slate-600 dark:text-slate-200 mt-2">
                Informe estadistico acerca del estado de la memoria ram, CPU, y uso del disco del servidor anfitrion
            </h3>
        </div>
        <div class="flex justify-evenly mt-10 flex-wrap">

            <div class="border border-blue-300 shadow rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">
                <div class="animate-pulse rounded-md bg-slate-200 h-44 w-full">
                </div>

                <div class="flex-1 space-y-2 py-1 mt-3">
                    <h3 class="font-bold">Uso del disco</h3>
                    <div class="mt-1">
                        <p class="text-sm ">Esta grafica presenta...</p>
                    </div>
                </div>
            </div>
            <div class="border border-blue-300 shadow rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">
                <div class="animate-pulse rounded-md bg-slate-200 h-44 w-full">
                </div>

                <div class="flex-1 space-y-2 py-1 mt-3">
                    <h3 class="font-bold">Uso de cpu</h3>
                    <div class="mt-1">
                        <p class="text-sm ">Esta grafica presenta...</p>
                    </div>
                </div>
            </div>
            <div class="border border-blue-300 shadow rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">
                <div class="animate-pulse rounded-md bg-slate-200 h-44 w-full">
                </div>

                <div class="flex-1 space-y-2 py-1 mt-3">
                    <h3 class="font-bold">Uso de memoria ram</h3>
                    <div class="mt-1">
                        <p class="text-sm ">Esta grafica presenta...</p>
                    </div>
                </div>
            </div>
    </section>
    <!--Finaliza Información del sistema -->

    <!-- Inicia información de los dockers -->
    <section id="info-dockers" class="container mx-auto">

        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </section>
    <!--Finaliza Información de los dockers -->
    <footer>

    </footer>


    <script src="./js/main.js"></script>
</body>

</html>