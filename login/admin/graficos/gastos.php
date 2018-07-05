<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Tipo');
        data.addColumn('number', 'Valor');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Energia',  {v: 10000, f: 'R$10,000'}, {v: 04101996, f: '04/10/1996'}],
          ['Água',   {v:8000,   f: 'R$8,000'},  {v: 04101996, f: '04/10/1996'}],
          ['Funcionários', {v: 12500, f: 'R$12,500'}, {v: 04101996, f: '04/10/1996'}],
          ['Aluguel',   {v: 7000,  f: 'R$7,000'},  {v: 04101996, f: '04/10/1996'}]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div2'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
</html>