@extends('layout.v_template')
@section('title', 'PH')
@section('content')
    <table class="table table-bordered">
        <thead class="bg-yellow">
            <tr>
                <th>Kode Area</th>
                <th>Nilai PH</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ph as $PH)
                <tr>
                    <td>{{ $PH->KodeArea }}</td>
                    <td>{{ $PH->NilaiPH }}</td>
                    <td>{{ $PH->Timestamp }}</td>
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
                text: 'Nilai Data Sensor PH'
            },
            xAxis: {
                categories: [
                    {!! json_encode($PH->Timestamp) !!},
            ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'PH Meter'
                }
            },
            // tooltip: {
            //     headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            //     pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            //         '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            //     footerFormat: '</table>',
            //     shared: true,
            //     useHTML: true
            // },
            // plotOptions: {
            //     column: {
            //         pointPadding: 0.2,
            //         borderWidth: 0
            //     }
            // },
            series: [{
                name: 'PH',
                data:{!! json_encode($PH->NilaiPH) !!}
            }]
        });
</script>

@stop


