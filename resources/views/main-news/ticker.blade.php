@extends('layout._shared')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <div id="chart" class="mt-6 container"></div>
    <script>

var options = {
          series: [{
          name: 'Inflation',
          data: [30, 55, 41, 10, 78, 31.7, 32, 23, 44, 88, 80, 65]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '14px',
            colors: ["#E0D21A"]
          }
        },
        
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          labels: {
    style: {
      colors: '#fff',
       fontSize: '17px',
    }
  },
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: true,
            style: {
      colors: '#fff',
      fontSize: '17px',
    },
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
        title: {
          text: 'Monatliche Lektüre Unserer Website',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#fff',
            fontSize: '17px',
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();





    </script>
@endsection