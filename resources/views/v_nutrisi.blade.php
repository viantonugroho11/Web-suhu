@extends('layout.v_template')
@section('title', 'Nutrisi')

@section('content')
    <table class="table table-bordered">
        <thead class="bg-green">
            <tr>
                <th>Kode Area</th>
                <th>Nilai Nutrisi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nutrisi as $data)
                <tr>
                    <td>{{ $data->KodeArea }}</td>
                    <td>{{ $data->NilaiNutrisi }}</td>
                    <td>{{ $data->Timestamp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="panel">
        <div id="chartNilai">

        </div>
    </div>
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
        Highcharts.chart('chartNilai', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Nilai Data Sensor Nutrisi'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'PPM'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [ {
                name: 'Nutrisi',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }]
        });
</script>

@stop
