<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="./js/tailwindConf.js"></script>
    <link href="./css/all.min.css" rel="stylesheet" title="Default Style">
    <script src="./js/all.min.js"></script>
    <title>Monitor de recursos</title>
</head>

<body class="bg-zinc-50 dark:bg-slate-800">
    <header class="mx-auto flex flex-col  md:flex-row p-3 items-center bg-red-500 dark:bg-slate-700 shadow-lg shadow-red-500/50 ">
        <div class="flex grow">
            <h1 class="text-3xl font-bold  text-white dark:text-slate-200">
                <!-- <i class="fa fa-desktop"></i> -->
                Monitor de recursos
            </h1>
        </div>
        <nav class="flex mx-5 mt-5 md:mt-0 ">

            <a class="mr-5 text-white hover:opacity-80" href="#info-system"><i class="fa-solid fa-server"></i> Información del sistema</a>

            <a class="text-white hover:opacity-80" href="#info-dockers"><i class="fa-brands fa-docker"></i> Dockers</a>
        </nav>

    </header>
    <div class="bg-red-500 h-[74px]">
        <div style="overflow: hidden;">
            <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #fafafa; width: 125%; height: 75px; transform: rotate(180deg);">
                <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
                <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
                <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
            </svg>
        </div>
    </div>

    <!-- Inicia información del sistema -->
    <section id="info-system" class="container mx-auto flex  mt-10 flex-col">

        <div class="flex items-center flex-col ">
            <h1 class="text-2xl font-bold text-zinc-900 dark:text-slate-200">
                Recursos del sistema
            </h1>
            <h3 class="text-md font-normal max-w-sm  text-center text-zinc-800 dark:text-slate-200 mt-2">
                Informe estadistico acerca del porcentaje de uso de la memoria ram, CPU, y disco del servidor anfitrión
            </h3>
        </div>
        <div class="flex justify-evenly mt-10 flex-wrap">

            <div class="border bg-white shadow-lg shadow-zinc-300/50 rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">
                <div class="animate-pulse rounded-md bg-slate-200 h-44 w-full">
                </div>


                <div class="flex-1 space-y-2 py-1 mt-3">
                    <h3 class="font-bold text-red-500"> <i class="fa fa-hard-drive"></i> Uso del disco</h3>
                    <!-- <div class="mt-1">
                        <p class="text-sm text-zinc-900">Esta grafica presenta...</p>
                    </div> -->

                </div>
            </div>
            <div class="border bg-white shadow-lg shadow-zinc-300/50 rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">

                <div class="flex items-center justify-center rounded-md bg-slate-200 h-44 p-5 ">
                    <div id="chart_cpu_div" style=" height: 120px;"></div>
                </div>

                <div class="flex flex-col py-1 text-center  mt-3">
                    <h3 class="font-bold text-red-500"><i class="fa fa-microchip"></i> Uso de cpu</h3>
                    <!-- <div class="mt-1">
                        <p class="text-sm text-zinc-900">Esta grafica presenta el uso de CPU</p>
                    </div> -->
                </div>
            </div>
            <div class="border bg-white shadow-lg shadow-zinc-300/50 rounded-md p-4 max-w-md w-full mx-2 flex flex-col my-2">

                <div class="flex items-center justify-center rounded-md bg-slate-200 h-44 p-5 ">
                    <div id="chart_memory_div" style=" height: 120px;"></div>
                </div>

                <div class="flex flex-col py-1 text-center  mt-3">
                    <h3 class="font-bold text-red-500"><i class="fa fa-microchip"></i> Uso de memoria RAM</h3>
                    <!-- <div class="mt-1">
        <p class="text-sm text-zinc-900">Esta grafica presenta el uso de CPU</p>
    </div> -->
                </div>
            </div>
    </section>
    <!--Finaliza Información del sistema -->

    <!-- Inicia información de los dockers -->
    <section id="info-dockers" class="container mx-auto">

    </section>
    <!--Finaliza Información de los dockers -->
    <footer>

    </footer>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawCharts);

        /**Función ue renderiza los graficos
         * 
         */
        function drawCharts() {

            drawCPUChart()
            drawMemoryChart();
        }

        /**Se renderiza el grafico Gauge para mostrar el uso de la CPU
         * 
         */
        function drawCPUChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['CPU', 44],
            ]);

            var options = {
                width: 400,
                height: 120,
                redFrom: 90,
                redTo: 100,
                yellowFrom: 75,
                yellowTo: 90,
                minorTicks: 5
            };


            var chart = new google.visualization.Gauge(document.getElementById('chart_cpu_div'));

            chart.draw(data, options);


        }


        /**Se renderiza el grafico Gauge para mostrar el uso de la memoria ram
         * 
         */
        function drawMemoryChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['RAM', <?php include '../partials/RAM.php';?>],
            ]);

            var options = {
                width: 400,
                height: 120,
                redFrom: 90,
                redTo: 100,
                yellowFrom: 75,
                yellowTo: 90,
                minorTicks: 5
            };


            var chart = new google.visualization.Gauge(document.getElementById('chart_memory_div'));

            chart.draw(data, options);
        }
    </script>
</body>

</html>