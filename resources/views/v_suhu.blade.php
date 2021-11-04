@extends('layout.v_template')
@section('title', 'Suhu')

{{-- @section('content')
    <table class="table table-bordered">
            <thead class="bg-aqua">
                <tr>
                    <th>Kode Area</th>
                    <th>Nilai Suhu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suhu as $data)
                    <tr>
                        <td>{{ $data->kode_area }}</td>
                        <td>{{ $data->nilai_suhu }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection --}}

@section('content')
@include('layout.v_graphsuhu')



@stop

