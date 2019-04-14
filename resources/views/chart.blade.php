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
          ['Login with Google ({{$usersNotGoogle}})', {{$usersNotGoogle}}],
          ['Login without Google ({{$usersGoogle}})', {{$usersGoogle}}]
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
        data.addColumn('string', 'النوع');
        data.addColumn('number', 'العدد');
        data.addRows([
          ['مستخدمين لجوجل مع التسجيل العادي',{v: {{$usersGooglejson}}, f: '{{$usersGooglejson}}'}],
          ['مستخدمين لا يستخدموا جوجل للتسجيل',{v: {{$usersNotGoogle}}, f: '{{$usersNotGoogle}}'}],
          ['مستخدمين جوجل للتسجيل',{v: {{$usersGoogle}}, f: '{{$usersGoogle}}'}],
          ['عدد كل المستخدمين',{v: {{$users}}, f: '{{$users}}'}],
         
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '50%', height: '50%'});
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
  {{-- <h1>{{$users}}</h1> --}}
    <div style="position: absolute;" id="chart_div"></div>
    <div dir ="rtl" id="table_div"></div>
  </body>
</html>