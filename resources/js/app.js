import "./bootstrap";

$(document).ready(function () {
    $(".guage-slider").slick({
        arrows: false,
        dots: true,
    });
});

var gridSize = {
    top: 10,
    left: 30,
    right: 20,
    bottom: 60,
};

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

var chartOption1 = {
    tooltip: {
        trigger: "axis",
    },
    legend: {
        bottom: 0,
        // margin:-20,
        verticalAlign: "bottom",
        data: chart1Data.filter((i) => i.name),
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
        ...gridSize,
    },
    xAxis: {
        type: "category",
        boundaryGap: false,
        data: [
            "15 APRIL",
            "16 APRIL",
            "17 APRIL",
            "18 APRIL",
            "19 APRIL",
            "20 APRIL",
            "21 APRIL",
        ],
        axisLabel: {
            color: "#7C828A",
        },
    },
    yAxis: {
        type: "value",
        splitLine: {
            show: false,
        },
        axisLabel: {
            color: "#7C828A",
        },
    },
    series: chart1Data,
};

var chartOption2 = {
    tooltip: {
        trigger: "axis",
        textStyle: {
            color: "#000",
        },
        formatter: "<strong>{c0}</strong> additional text",
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
        ...gridSize,
    },
    xAxis: [
        {
            type: "category",
            boundaryGap: false,
            data: ["M", "T", "W", "T", "F", "S", "S"],
            axisLabel: {
                color: "#7C828A",
            },
        },
    ],
    yAxis: [
        {
            type: "value",
            splitLine: {
                show: false,
            },
            axisLabel: {
                color: "#7C828A",
            },
        },
    ],
    series: [
        {
            name: "Line 1",
            type: "line",
            stack: "Total",
            smooth: true,
            lineStyle: {
                width: 2,
                color: "#EC6666",
            },
            symbol: "circle",
            showSymbol: false,
            areaStyle: {
                opacity: 0.8,
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                    {
                        offset: 0,
                        color: "#EC6666",
                    },
                    {
                        offset: 1,
                        color: "#fff",
                    },
                ]),
            },
            itemStyle: {
                color: "#EC6666",
            },
            emphasis: {
                focus: "series",
            },
            data: [250, 300, 150, 200, 180, 230, 50],
        },
    ],
};

var chartOption3 = {
    series: [
        {
            type: "gauge",
            startAngle: 90,
            endAngle: -270,
            pointer: {
                show: false,
            },
            progress: {
                show: true,
                overlap: false,
                roundCap: true,
                clip: false,
                itemStyle: {
                    // borderWidth: 1,
                    color: "#147AD6",
                },
            },
            axisLine: {
                lineStyle: {
                    width: 30,
                },
            },
            splitLine: {
                show: false,
                distance: 0,
                length: 10,
            },
            axisTick: {
                show: false,
            },
            axisLabel: {
                show: false,
                distance: 50,
            },
            data: [
                {
                    value: 75,
                    name: "Perfect",
                    title: {
                        show: false,
                        offsetCenter: ["0%", "0%"],
                    },
                    detail: {
                        valueAnimation: true,
                        offsetCenter: ["0%", "0%"],
                    },
                },
            ],
            title: {
                fontSize: 14,
            },
            detail: {
                width: 50,
                height: 14,
                fontSize: 18,
                color: "#000",
                borderColor: "inherit",
                // borderRadius: 20,
                // borderWidth: 1,
                formatter: "{value}%",
            },
        },
    ],
};

var chartOption4 = {
    tooltip: {
        trigger: "axis",
        textStyle: {
            color: "#000",
        },
        formatter: "<strong>{c0}</strong> additional text",
    },
    grid: {
        ...gridSize,
    },
    legend: {
        show: false,
        bottom: 0,
        lineStyle: {
            opacity: 0,
        },
        // data: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5']
    },
    xAxis: [
        {
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
                color: "#7C828A",
            },
            data: [
                "15 APRIL",
                "16 APRIL",
                "17 APRIL",
                "18 APRIL",
                "19 APRIL",
                "20 APRIL",
                "21 APRIL",
            ],
        },
    ],
    yAxis: [
        {
            type: "value",
            splitLine: {
                show: false,
            },
            axisLabel: {
                color: "#7C828A",
            },
        },
    ],
    series: [
        {
            name: "Point 1",
            type: "line",
            stack: "Total",
            smooth: true,
            lineStyle: {
                width: 2,
            },
            symbol: "circle",
            showSymbol: false,
            areaStyle: {
                opacity: 0,
                color: "#79D2DE",
            },
            emphasis: {
                focus: "series",
            },
            data: [450, 500, 430, 380, 350, 400, 430],
        },
    ],
};

var chartOption5 = {
    tooltip: {
        trigger: "axis",
        textStyle: {
            color: "#000",
        },
        formatter: "<strong>{c0}</strong> additional text",
    },
    grid: {
        ...gridSize,
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

    xAxis: [
        {
            type: "category",
            boundaryGap: false,
            data: [
                "15 APRIL",
                "16 APRIL",
                "17 APRIL",
                "18 APRIL",
                "19 APRIL",
                "20 APRIL",
                "21 APRIL",
            ],
            axisLabel: {
                color: "#7C828A",
            },
        },
    ],
    yAxis: [
        {
            type: "value",
            splitLine: {
                show: false,
            },
            axisLabel: {
                color: "#7C828A",
            },
        },
    ],
    series: [
        {
            name: "Point 1",
            type: "line",
            stack: "Total",
            smooth: true,
            lineStyle: {
                width: 0,
            },
            symbol: "circle",
            showSymbol: false,
            areaStyle: {
                opacity: 1,
                color: "#79D2DE",
            },
            itemStyle: {
                color: "#79D2DE",
            },
            emphasis: {
                focus: "series",
            },
            data: [450, 500, 430, 380, 350, 400, 430],
        },
        {
            name: "Point 2",
            type: "line",
            stack: "Total",
            smooth: true,
            lineStyle: {
                width: 0,
            },
            symbol: "circle",
            showSymbol: false,
            areaStyle: {
                opacity: 1,
                color: "#147AD6",
            },
            itemStyle: {
                color: "#147AD6",
            },
            emphasis: {
                focus: "series",
            },
            data: [250, 280, 260, 240, 220, 240, 290],
        },
    ],
};

loadCharts("chart-1", chartOption1);

loadCharts("chart-2", chartOption3);
loadCharts("chart-6", chartOption3);
loadCharts("chart-7", chartOption3);

loadCharts("chart-3", chartOption2);
loadCharts("chart-4", chartOption4);
loadCharts("chart-5", chartOption5);

function loadCharts(id, option) {
    // chart1
    var chartDom = document.getElementById(id);
    if(!chartDom) return;
    var myChart = echarts.init(chartDom);

    option && myChart.setOption(option);
}
