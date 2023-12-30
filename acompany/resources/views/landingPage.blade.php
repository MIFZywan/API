<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acompany</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
    @vite('resources/css/css/landingPage.css')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"> </script>
</head>

<body style="font-family: 'Maven Pro';">
    <!-- SideBar -->
    @extends('component/sideBar')

    <!-- Card -->
    <div class="flex flex-col ml-64 p-4">
        <div class="grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E3F5FF;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Product</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">
                            {{ $totalProducts }}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+11.01%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Profit</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">
                            {{ $totalProfit }}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">-0.03%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E3F5FF;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Stock</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">
                            {{ $totalStocks }}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+15.03%</p>
                    </div>
                </div>
            </div>
            <div class="card relative flex flex-col border-none rounded-xl text-gray-700" style="background-color: #E5ECF6;">
                <div class="px-4 p-3 text-left">
                    <p class="block antialiased leading-normal font-semibold text-blue-gray-600">Total Customer</p>
                </div>
                <div class="px-4 p-2 text-left flex items-center justify-between">
                    <div class="flex">
                        <p class="block antialiased tracking-normal text-2xl font-bold leading-snug text-blue-gray-900">
                            {{ $totalCustomers }}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <p class="block antialiased leading-normal font-normal text-blue-gray-600" style="text-size-adjust: 10px;">+15.03%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ml-60 px-4">
        <div class="col-6">
            <!-- Product Sales Chart -->
            <section class="flex flex-col bg-white">
                <div class="xl:w-12/12">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-lg" style="background-color: #F7F9FB;">
                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <p class="mb-1 text-xl font-semibold" style="color: #1C1C1C;">Product Stock</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex-auto">
                            <!-- Chart -->
                            <div class="relative h-350-px">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="sales-chart" style="display: block; height: 350px; width: 791px;" width="1582" height="700" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-6">
            <!-- Profit Chart -->
            <section class="flex flex-col bg-white">
                <div class="xl:w-12/12">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-lg" style="background-color: #F7F9FB;">
                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <p class="mb-1 text-xl font-semibold" style="color: #1C1C1C;">Sales Profit</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex-auto">
                            <!-- Chart -->
                            <div class="relative h-350-px">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="revenue-chart" style="display: block; height: 350px; width: 791px;" width="1582" height="700" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>

<script>
    var config = {
        type: "line",
        data: {
            labels: <?php echo json_encode($monthLabels); ?>,
            datasets: [{
                    label: new Date().getFullYear(),
                    backgroundColor: "#A8C5DA",
                    borderColor: "#A8C5DA",
                    data: <?php echo json_encode($productData); ?>,
                    fill: false,
                },
                {
                    label: new Date().getFullYear() - 1,
                    fill: false,
                    backgroundColor: "#1C1C1C",
                    borderColor: "#1C1C1C",
                    data: [40, 68, 86, 74, 56, 60, 87, 67, 52, 85, 60, 90],
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
                display: false,
                text: "Sales Charts",
                fontColor: "#1C1C1C66",
            },
            legend: {
                labels: {
                    fontColor: "#1C1C1C66",
                },
                align: "end",
                position: "bottom",
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: "#1C1C1C66",
                    },
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: "Month",
                        fontColor: "1C1C1C66",
                    },
                    gridLines: {
                        display: false,
                        borderDash: [2],
                        borderDashOffset: [2],
                        color: "#1C1C1C66",
                        zeroLineColor: "#1C1C1C66",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                    },
                }, ],
                yAxes: [{
                    ticks: {
                        fontColor: "#1C1C1C66",
                    },
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: "Value",
                        fontColor: "#1C1C1C66",
                    },
                    gridLines: {
                        borderDash: [3],
                        borderDashOffset: [3],
                        drawBorder: false,
                        color: "#1C1C1C66",
                        zeroLineColor: "#1C1C1C66",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                    },
                }, ],
            },
        },
    };
    var ctx = document.getElementById("sales-chart").getContext("2d");
    window.myLine = new Chart(ctx, config);
</script>

<script>
    var config = {
        type: "line",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sept",
                "Oct",
                "Nov",
                "Dec"
            ],
            datasets: [{
                    label: new Date().getFullYear(),
                    backgroundColor: "#A8C5DA",
                    borderColor: "#A8C5DA",
                    data: [65, 78, 66, 44, 56, 67, 75, 55, 82, 69, 42, 63],
                    fill: false,
                },
                {
                    label: new Date().getFullYear() - 1,
                    fill: false,
                    backgroundColor: "#1C1C1C",
                    borderColor: "#1C1C1C",
                    data: [40, 68, 86, 74, 56, 60, 87, 67, 52, 85, 60, 90],
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
                display: false,
                text: "Sales Charts",
                fontColor: "#1C1C1C66",
            },
            legend: {
                labels: {
                    fontColor: "#1C1C1C66",
                },
                align: "end",
                position: "bottom",
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: "#1C1C1C66",
                    },
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: "Month",
                        fontColor: "1C1C1C66",
                    },
                    gridLines: {
                        display: false,
                        borderDash: [2],
                        borderDashOffset: [2],
                        color: "#1C1C1C66",
                        zeroLineColor: "#1C1C1C66",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                    },
                }, ],
                yAxes: [{
                    ticks: {
                        fontColor: "#1C1C1C66",
                    },
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: "Value",
                        fontColor: "#1C1C1C66",
                    },
                    gridLines: {
                        borderDash: [3],
                        borderDashOffset: [3],
                        drawBorder: false,
                        color: "#1C1C1C66",
                        zeroLineColor: "#1C1C1C66",
                        zeroLineBorderDash: [2],
                        zeroLineBorderDashOffset: [2],
                    },
                }, ],
            },
        },
    };
    var ctx = document.getElementById("revenue-chart").getContext("2d");
    window.myLine = new Chart(ctx, config);
</script>

</html>