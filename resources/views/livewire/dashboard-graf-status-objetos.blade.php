<div>
   <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Quantidade'],
          @foreach($dados as $dado)
            ['{{$dado->descricao}}',     {{$dado->qtd}}],
          @endforeach
        ]);

        var options = {
          title: 'Inspeções em Dia',
          pieHole: 0.4,
          slices: {
            0: { color: 'yellow' },
            1: { color: 'green' },
            2: { color: 'red' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchartStatus'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    @can('is_admin')
    <div id="donutchartStatus" style="width: 95%; height: 440px;"></div>
    @endcan
  </body>
 </html>
</div>
