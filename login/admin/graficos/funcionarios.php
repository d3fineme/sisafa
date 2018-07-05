<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome');
        data.addColumn('number', 'Salário');
        data.addColumn('number', 'Avaliação');
        data.addRows([
          ['Mike',  {v: 10000, f: 'R$10,000'}, 0.5],
          ['Jim',   {v:8000,   f: 'R$8,000'},  0.5],
          ['Alice', {v: 12500, f: 'R$12,500'}, 0.5],
          ['Bob',   {v: 7000,  f: 'R$7,000'},  0.5]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
</html>