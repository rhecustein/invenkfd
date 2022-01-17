import {
    ApexStrokeDefault,
    ApexChartDefault,
    ApexColorDefault,
    ApexDataLabelDefault,
    ApexBarDefault,
    COLOR_1,
    COLOR_3
} from '../constant/chart.constant';

class Chart {

    static init() {
        const basicColumnOption = {
            series: [
                {
                    name: "Net Profit",
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                    color: COLOR_1
                },
                {
                    name: "Revenue",
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                    color: COLOR_2
                },
                {
                    name: "Free Cash Flow",
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                    color: COLOR_3
                }
            ],
            chart: {
                ...ApexChartDefault,
                type: "bar",
                height: 350
            },
            plotOptions: ApexBarDefault,
            dataLabels: ApexDataLabelDefault,
            stroke: {
                show: true,
                width: 2,
                colors: ["transparent"]
            },
            xaxis: {
                categories: [
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct"
                ]
            },
            yaxis: {
                title: {
                    text: "$ (thousands)"
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands";
                    }
                }
            }
        }
        new ApexCharts(document.querySelector("#basic-column-chart"), basicColumnOption).render();
    }
}
$(() => { Chart.init(); });
