<!DOCTYPE html>
<html>

<head>
    <title>Laravel Google Chart Implementation Example</title>
</head>

<body class="antialiased">
    <h2>Integrating Line Chart in Laravel</h2>
    <div id="linechart" style="width: 1000px; height: 500px"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var suhu = {!! json_encode($suhu) !!}};
        console.log(suhu);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(lineChart);

        function lineChart() {
            var data = google.visualization.arrayToDataTable(suhu);
            var options = {
                title: 'nilai suhu',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }        
    </script>
</body>

</html>