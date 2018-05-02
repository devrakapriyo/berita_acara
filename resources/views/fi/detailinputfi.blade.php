<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Detail Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
		<ol class="breadcrumb">
	        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
	        <li class="active">Finance</li>
	        <li><a href="{{URL::asset('datafi')}}">Data Finance</a></li>
    	</ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
        </div>
        @endif
        <div class="card-panel z-depth-2">
            <table class="highlight responsive-table bordered atas">
                <thead class="pink-text">
                    <tr>
                        <th rowspan="2">Customer</th>
                        <th rowspan="2">No pengajuan</th>
                        <th rowspan="2">No permohonan</th>
                        <th colspan="3" class="center-align">OPSI</th>
                    </tr>
                    <tr>
                        <th>Konfimasi Data FI</th>
                        <th>Detail Data FI</th>
                        <th>Abaikan Data FI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <th>{{$data->nama_customer}}</th>
                        <th>{{$data->no_pengajuan}}</th>
                        <th>{{$data->id_cr}}</th>
                        @if($data -> status_si == 'NEW' || $data->status_si == 'KONFIRMASI')
                        <th>
                            <a title="Konfirmasi data {{$data->nama_customer}}" href="{{URL::asset('inputfi')}}/{{$data->nota_lama}}"><i class="material-icons left green-text">add</i></a>
                        </th>
                        <th>
                            <a title="Detail data {{$data->nama_customer}}" href="{{URL::asset('detaildatafi')}}/{{$data->nota_lama}}"><i class="material-icons left orange-text">sort</i></a>
                        </th>
                        <th>
                            <a title="Abaikan data {{$data->nama_customer}}" href="{{URL::asset('abaikanfi')}}/{{$data->nota_lama}}"><i class="material-icons red-text">close</i></a>
                        </th>
                        @else 
                        <th></th>
                        <th>
                            <a title="View" href="{{URL::asset('detaildatafi')}}/{{$data->nota_lama}}"><i class="material-icons left orange-text">sort</i></a>
                        </th>
                        <th>
                            <a title="Abaikan" href="{{URL::asset('abaikanfi')}}/{{$data->nota_lama}}"><i class="material-icons red-text">close</i></a>
                        </th>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                	<tr>
                		<td colspan="7">
                			<a href="{{URL::asset('entryfi')}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
<!--
                            <a href="{{URL::asset('abaikanfi')}}/{{$data->id_buat_ba}}" class="btn waves-effect red darken-1" type="submit">Abaikan
                                <i class="material-icons right">swap_horiz</i>
                            </a>
-->
                		</td>
                	</tr>
                </tfoot>
            </table>
        </div>
</body>
@stop
</html>