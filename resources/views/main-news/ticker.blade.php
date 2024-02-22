@extends('layout._shared')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <div id="chart" class="mt-6 container"></div>
    <script>

var options = {
          series: [{
          name: 'Inflation',
          data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
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
            colors: ["#FB1111"]
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
          text: 'Monthly Inflation in Argentina, 2002',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#fff'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();





    </script>
@endsection