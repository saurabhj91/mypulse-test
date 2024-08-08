<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saurabh Test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        welcome Saurabh

        <div style="display: flex">
            <div id="chart-1" style="height: 300px; width: 350px;"></div>
            <div id="chart-2" style="height: 300px; width: 350px;"></div>
            <div id="chart-3" style="height: 300px; width: 350px;"></div>
            <div id="chart-4" style="height: 300px; width: 350px;"></div>
            <div id="chart-5" style="height: 300px; width: 350px;"></div>
        </div>
        
    </body>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
        <script>
                var chart1Data = [
                    {
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
                title: {
                    text: "Chart title goes here",
                    subtext: "15 April - 21 April",
                    subtextStyle: {
                        color: '#7C828A'
                    },
                    textAlign: 'center',
                    right: 0,
                },
                tooltip: {
                    trigger: "axis",
                    axisPointer: {
                        type: "cross",
                        label: {
                            backgroundColor: "#6a7985",
                        },
                    },
                },
                legend: {
                    bottom: -5,
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
                    top: 80,
                    left: 40,
                    right: 20,
                    bottom: 40
                },
                xAxis: [{
                    type: "category",
                    boundaryGap: false,
                    data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
                }, ],
                yAxis: [{
                    type: "value",
                }, ],
                series: chart1Data,
            };

            var chartOption2 = {
                color: ['#EC6666'],
                title: {
                    text: "Chart title goes here",
                    subtext: "15 April - 21 April",
                    subtextStyle: {
                        color: '#7C828A'
                    },
                    textAlign: 'center',
                    right: 0,
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: '#6a7985'
                    }
                    }
                },
                legend: {
                    show:false,
                    // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
                },
                //   toolbox: {
                //     feature: {
                //       saveAsImage: {}
                //     }
                //   },
                //   grid: {
                //     left: '3%',
                //     right: '4%',
                //     bottom: '3%',
                //     containLabel: true
                //   },
                grid: {
                    top: 80,
                    left: 40,
                    right: 20,
                    bottom: 20
                },
                xAxis: [
                    {
                    type: 'category',
                    boundaryGap: false,
                    data: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
                    }
                ],
                yAxis: [
                    {
                    type: 'value'
                    }
                ],
                series: [
                    {
                    name: 'Line 1',
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    lineStyle: {
                        width: 2
                    },
                    symbol:'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 0.8,
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                        {
                            offset: 0,
                            color: '#EC6666'
                        },
                        {
                            offset: 1,
                            color: '#fff'
                        }
                        ])
                    },
                    emphasis: {
                        focus: 'series'
                    },
                    data: [250, 300, 200, 230, 250, 230, 250]
                    },
                ]
            };

            var chartOption3 = {
  series: [
    {
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
          borderWidth: 1,
          borderColor: '#464646'
        }
      },
      axisLine: {
        lineStyle: {
          width: 40
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
      data: [
  {
    value: 20,
    name: 'Perfect',
    title: {
      show: false,
      offsetCenter: ['0%', '0%']
    },
    detail: {
      valueAnimation: true,
      offsetCenter: ['0%', '0%']
    }
  }
],
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
    }
  ]
}

            var chartOption4 = {
                title: {
                    text: "Chart title goes here",
                    subtext: "15 April - 21 April",
                    subtextStyle: {
                        color: '#7C828A'
                    },
                    textAlign: 'center',
                    right: 0,
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: '#6a7985'
                    }
                    }
                },
                grid: {
                    top: 80,
                    left: 40,
                    right: 20,
                    bottom: 20
                },
                legend: {
                    show:false,
                    bottom: 0,
                    lineStyle:{
                        opacity: 0
                    },
                    // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
                },
                //   toolbox: {
                //     feature: {
                //       saveAsImage: {}
                //     }
                //   },
                //   grid: {
                //     left: '3%',
                //     right: '4%',
                //     bottom: '3%',
                //     containLabel: true
                //   },
                
                xAxis: [{
                    type: "category",
                    boundaryGap: true,
                    splitArea: {
                        show: true,
                        interval: false,
                    },
                    data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
                }, ],
                yAxis: [{
                    type: "value",
                }, ],
                series: [
                    {
                    name: 'Point 1',
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    lineStyle: {
                        width: 2
                    },
                    symbol:'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 0,
                        color: '#79D2DE'
                    },
                    emphasis: {
                        focus: 'series'
                    },
                    data: [450, 500, 430, 380, 350, 400, 430],
                    },
                ]
            };

            var chartOption5 = {
                title: {
                    text: "Chart title goes here",
                    subtext: "15 April - 21 April",
                    subtextStyle: {
                        color: '#7C828A'
                    },
                    textAlign: 'center',
                    right: 0,
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: '#6a7985'
                    }
                    }
                },
                grid: {
                    top: 80,
                    left: 40,
                    right: 20,
                    bottom: 50
                },
                legend: {
                    show:true,
                    bottom: 0,
                    // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
                },
                //   toolbox: {
                //     feature: {
                //       saveAsImage: {}
                //     }
                //   },
                //   grid: {
                //     left: '3%',
                //     right: '4%',
                //     bottom: '3%',
                //     containLabel: true
                //   },
                
                xAxis: [{
                    type: "category",
                    boundaryGap: false,
                    data: ["15 APRIL", "16 APRIL", "17 APRIL", "18 APRIL", "19 APRIL", "20 APRIL", "21 APRIL"],
                }, ],
                yAxis: [{
                    type: "value",
                }, ],
                series: [
                    {
                    name: 'Point 1',
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    lineStyle: {
                        width: 0
                    },
                    symbol:'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 1,
                        color: '#79D2DE'
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
                    symbol:'circle',
                    showSymbol: false,
                    areaStyle: {
                        opacity: 1,
                        color: '#147AD6'
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
