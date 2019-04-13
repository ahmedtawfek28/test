<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['TodayOrder without Comments (255)', 255],
          ['Today Order Not Delivered (3)', 3],
          ['All Deleted Orders (98)', 98],
          ['All Accepted (19)', 19],
          ['Partial Deliverd (1)', 1]
        ]);

        // Set chart options
        var options = {'title':'الطلبات المختارة',
                       'width':600,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'التاريخ');
        data.addColumn('number', 'العدد');
        data.addRows([
          ['طلبات جديدة',{v: 255, f: '255'}],
          ['طلبات تحت الاجراء',{v: 3, f: '3'}],
          ['طلبات ملغية',{v: 98, f: '98'}],
          ['طلبات تحت التوصيل',{v: 0, f: '0'}],
          ['تم التسليم',{v: 19, f: '19'}],
          ['طلبات سلمت جزئيا',{v: 1, f: '1'}],
          ['المجموع الكلي',{v: 358, f: '358'}],
         
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '50%', height: '50%'});
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div style="position: absolute;" id="chart_div"></div>
    <div dir ="rtl" id="table_div"></div>
  </body>
</html>