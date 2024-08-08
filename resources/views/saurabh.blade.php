<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saurabh Test</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Styles -->
    <style>
        body {
            background-color: #F3F4FF;
            font-family: "Nunito Sans", sans-serif;
            color: #000;
            font-size: 16px;
        }

        .charts-container {
            /* display: flex; */
            /* gap: 20px; */
        }

        .chart-card {
            background-color: #fff;
            position: relative;
            margin: 15px 0;
            padding: 20px;
            border-radius: 12px;
        }

        .chart-wrapper {
            height: 300px;
            width: 100%;
        }

        .card-header {
            background-color: #fff;
            border-bottom: 0;
            text-align: center;
        }

        .chart-title {
            font-weight: 700;
            font-size: 22px;
        }

        .chart-subtitle {
            color: #7C828A;
        }

        ul.slick-dots {
            padding: 0;
            display: flex !important;
            justify-content: center;
            list-style-type: none;
        }

        ul.slick-dots li {
            height: 10px;
            transition: 500ms all;
            /* width: 10px; */
            /* display: none !important; */
        }

        ul.slick-dots li.slick-active button {
            background-color: #147AD6;
        }

        ul.slick-dots li button {
            border: 0;
            height: 10px;
            width: 10px;
            background-color: #7388A95A;
            color: transparent;
            border-radius: 50%;
            padding: 0;
            margin: 0 5px;
        }
    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="container-fluid">
        <div class="charts-container row">
            <div class="col-12 col-md-4">
                <div class="chart-card">
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">15 April - 21 April</div>
                    </div>
                    <div id="chart-1" class="chart-wrapper"></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="chart-card">
                    <div class="guage-slider">
                        <div>
                            <div class="card-header">
                                <div class="chart-title">Chart title goes here</div>
                                <div class="chart-subtitle">Here go numbers XX of total XX</div>
                            </div>
                            <div id="chart-2" class="chart-wrapper" style="height: 275px;"></div>
                        </div>
                        <div>
                            <div class="card-header">
                                <div class="chart-title">Chart title goes here</div>
                                <div class="chart-subtitle">Here go numbers XX of total XX</div>
                            </div>
                            <div id="chart-6" class="chart-wrapper" style="height: 275px;"></div>
                        </div>
                        <div>
                            <div class="card-header">
                                <div class="chart-title">Chart title goes here</div>
                                <div class="chart-subtitle">Here go numbers XX of total XX</div>
                            </div>
                            <div id="chart-7" class="chart-wrapper" style="height: 275px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="chart-card">
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">15 April - 21 April</div>
                    </div>
                    <div id="chart-3" class="chart-wrapper"></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="chart-card">
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">15 April - 21 April</div>
                    </div>
                    <div id="chart-4" class="chart-wrapper"></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="chart-card">
                    <div class="card-header">
                        <div class="chart-title">Chart title goes here</div>
                        <div class="chart-subtitle">15 April - 21 April</div>
                    </div>
                    <div id="chart-5" class="chart-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.guage-slider').slick({
                arrows: false,
                dots: true,
            });
        });

        var gridSize = {
            top: 10,
            left: 30,
            right: 20,
            bottom: 60
        }

        var chart1Data = [{
                name: "Point 1",
                type: "line",
                stack: "Total",
                areaStyle: {},
                emphasis: {
                    focus: "series",
                },
                symbol: "circle",
                color: "#147AD6",
                areaStyle: {
                    opacity: 1,
                },
                showSymbol: false,
                data: [450, 500, 430, 380, 350, 400, 430],
            },
            {
                name: "Point 2",
                type: "line",
                stack: "Total",
                areaStyle: {},
                emphasis: {
                    focus: "series",
                },
                symbol: "circle",
                color: "#EC6666",
                showSymbol: false,
                areaStyle: {
                    opacity: 1,
                },
                data: [250, 280, 260, 240, 220, 240, 290],
            },
        ];

        chartOption1 = {
            tooltip: {
                trigger: "axis",
            },
            legend: {
                bottom: 0,
                // margin:-20,
                verticalAlign: 'bottom',
                data: chart1Data.filter(i => i.name),
                lineStyle: {
                    opacity: 0,
                },
                // itemStyle: {
                //     color: '#ff0000'
                // }
            },
            // toolbox: {
            //     feature: {
            //         saveAsImage: {},
            //     },
            // },
            grid: {
                ...gridSize
            },
            xAxis: {
                type: "category",
                boundaryGap: false,
                data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
                axisLabel: {
                    color: "#7C828A"
                },
            },
            yAxis: {
                type: "value",
                splitLine: {
                    show: false
                },
                axisLabel: {
                    color: "#7C828A"
                },
            },
            series: chart1Data,
        };

        var chartOption2 = {
            tooltip: {
                trigger: 'axis',
                textStyle: {
                    color: "#000",
                },
                formatter: '<strong>{c0}</strong> additional text',
            },
            legend: {
                show: false,
                // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
            },
            //   toolbox: {
            //     feature: {
            //       saveAsImage: {}
            //     }
            //   },
            grid: {
                ...gridSize
            },
            xAxis: [{
                type: 'category',
                boundaryGap: false,
                data: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                axisLabel: {
                    color: "#7C828A"
                }
            }],
            yAxis: [{
                type: 'value',
                splitLine: {
                    show: false
                },
                axisLabel: {
                    color: "#7C828A"
                }
            }],
            series: [{
                name: 'Line 1',
                type: 'line',
                stack: 'Total',
                smooth: true,
                lineStyle: {
                    width: 2,
                    color: "#EC6666",
                },
                symbol: 'circle',
                showSymbol: false,
                areaStyle: {
                    opacity: 0.8,
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                            offset: 0,
                            color: '#EC6666'
                        },
                        {
                            offset: 1,
                            color: '#fff'
                        }
                    ])
                },
                itemStyle: {
                    color: "#EC6666"
                },
                emphasis: {
                    focus: 'series'
                },
                data: [250, 300, 150, 200, 180, 230, 50]
            }, ]
        };

        var chartOption3 = {
            series: [{
                type: 'gauge',
                startAngle: 90,
                endAngle: -270,
                pointer: {
                    show: false
                },
                progress: {
                    show: true,
                    overlap: false,
                    roundCap: true,
                    clip: false,
                    itemStyle: {
                        // borderWidth: 1,
                        color: '#147AD6'
                    }
                },
                axisLine: {
                    lineStyle: {
                        width: 30
                    }
                },
                splitLine: {
                    show: false,
                    distance: 0,
                    length: 10
                },
                axisTick: {
                    show: false
                },
                axisLabel: {
                    show: false,
                    distance: 50
                },
                data: [{
                    value: 75,
                    name: 'Perfect',
                    title: {
                        show: false,
                        offsetCenter: ['0%', '0%']
                    },
                    detail: {
                        valueAnimation: true,
                        offsetCenter: ['0%', '0%']
                    }
                }],
                title: {
                    fontSize: 14
                },
                detail: {
                    width: 50,
                    height: 14,
                    fontSize: 18,
                    color: '#000',
                    borderColor: 'inherit',
                    // borderRadius: 20,
                    // borderWidth: 1,
                    formatter: '{value}%'
                }
            }]
        }

        var chartOption4 = {
            tooltip: {
                trigger: 'axis',
                textStyle: {
                    color: "#000",
                },
                formatter: '<strong>{c0}</strong> additional text',
            },
            grid: {
                ...gridSize
            },
            legend: {
                show: false,
                bottom: 0,
                lineStyle: {
                    opacity: 0
                },
                // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
            },
            xAxis: [{
                type: "category",
                boundaryGap: true,
                splitArea: {
                    show: true,
                    interval: 0,
                    // areaStyle:{
                    //     color:"#F5F6FA"
                    // }
                },
                axisLabel: {
                    color: "#7C828A"
                },
                data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
            }, ],
            yAxis: [{
                type: "value",
                splitLine: {
                    show: false
                },
                axisLabel: {
                    color: "#7C828A"
                }
            }, ],
            series: [{
                name: 'Point 1',
                type: 'line',
                stack: 'Total',
                smooth: true,
                lineStyle: {
                    width: 2
                },
                symbol: 'circle',
                showSymbol: false,
                areaStyle: {
                    opacity: 0,
                    color: '#79D2DE'
                },
                emphasis: {
                    focus: 'series'
                },
                data: [450, 500, 430, 380, 350, 400, 430],
            }, ]
        };

        var chartOption5 = {
            tooltip: {
                trigger: 'axis',
                textStyle: {
                    color: "#000",
                },
                formatter: '<strong>{c0}</strong> additional text',
            },
            grid: {
                ...gridSize
            },
            legend: {
                show: true,
                bottom: 0,
                // itemStyle: {
                //     color: ["#79D2DE", "#147AD6"]
                // }
                // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
            },
            //   toolbox: {
            //     feature: {
            //       saveAsImage: {}
            //     }
            //   },

            xAxis: [{
                type: "category",
                boundaryGap: false,
                data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
                axisLabel: {
                    color: "#7C828A"
                },
            }, ],
            yAxis: [{
                type: "value",
                splitLine: {
                    show: false
                },
                axisLabel: {
                    color: "#7C828A"
                }
            }, ],
            series: [{
                    name: 'Point 1',
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    lineStyle: {
                        width: 0
                    },
                    symbol: 'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 1,
                        color: '#79D2DE'
                    },
                    itemStyle: {
                        color: "#79D2DE"
                    },
                    emphasis: {
                        focus: 'series'
                    },
                    data: [450, 500, 430, 380, 350, 400, 430],
                },
                {
                    name: 'Point 2',
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    lineStyle: {
                        width: 0
                    },
                    symbol: 'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 1,
                        color: '#147AD6'
                    },
                    itemStyle: {
                        color: "#147AD6"
                    },
                    emphasis: {
                        focus: 'series'
                    },
                    data: [250, 280, 260, 240, 220, 240, 290],
                },
            ]
        };

        loadCharts('chart-1', chartOption1);

        loadCharts('chart-2', chartOption3);
        loadCharts('chart-6', chartOption3);
        loadCharts('chart-7', chartOption3);

        loadCharts('chart-3', chartOption2);
        loadCharts('chart-4', chartOption4);
        loadCharts('chart-5', chartOption5);

        function loadCharts(id, option) {

            // chart1
            var chartDom = document.getElementById(id);
            var myChart = echarts.init(chartDom);

            option && myChart.setOption(option);

        }
    </script>
</footer>

</html>