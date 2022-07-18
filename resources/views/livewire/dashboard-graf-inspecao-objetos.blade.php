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
          title: 'Resultado das inspeções',
          pieHole: 0.4,
          slices: {
            2: { color: 'yellow' },
            1: { color: 'green' },
            0: { color: 'red' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 95%; height: 440px;"></div>
  </body>
 </html>
</div>
