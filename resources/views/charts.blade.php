@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
{{-- @include('flash-message') --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Laporan Total Jadwal yang Diadakan Perbulan</h5>
        </div>
        <div class="card-body">
    <div class='panel'><div id="chartjadwal"></div></div>
    <br><br>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Laporan Total HPP yang Dikeluarkan Perbulan</h5>
        </div>
        <div class="card-body">
    <div class='panel'><div id="charthasil"></div></div>
</div>
</div>
</div>
@endsection
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>Highcharts.chart('chartjadwal', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Total Jadwal'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Jadwal'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
        name: 'Jadwal yang di adakan Per Bulan',
        data: {!!json_encode($data)!!}

    }]
});</script>
<script>Highcharts.chart('charthasil', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Total HPP yang Keluar'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: {!!json_encode($categories2)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah HPP'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
        name: 'HPP yang dikeluarkan Per Bulan',
        data: {!!json_encode($data2)!!}

    }]
});</script>
@stop