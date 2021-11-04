@extends('layout.v_template')
@section('title', 'Intensitas Cahaya')

@section('content')
    <table class="table table-bordered">
        <thead class="bg-red">
            <tr>
                <th>Kode Area</th>
                <th>Nilai Intensitas Cahaya</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($intensitas as $data)
                <tr>
                    <td>{{ $data->KodeArea }}</td>
                    <td>{{ $data->NilaiIC }}</td>
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
<script src="highcharts.js"></script>
<script>
        Highcharts.chart('chartNilai', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Nilai Data Sensor Intensitas Cahaya'
            },
            xAxis: {
                categories:[
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
                    text: 'Celsius'
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
            series: [{
                name: 'Intensitas Cahaya',
                data: [1,2,3,4,2,,31,34,23,1,];
            }]
        });
</script>

@stop
