<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Detail Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
        <ol class="breadcrumb">
	        <li><a href="{{URL::asset('dashboardsi')}}">Dashboard</a></li>
	        <li class="active">Sistem Information</li>
	        <li><a href="{{URL::asset('datasi')}}">Data Sistem Information</a></li>
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
                        <th rowspan="2">Jenis nota</th>
                        <th rowspan="2">Nota lama</th>
                        <th rowspan="2">Terminal operasi</th>
                        <th colspan="3" class="center-align">OPSI</th>
                    </tr>
                    <tr>
                        <th class="center-align">Input data SI</th>
                        <th class="center-align">Detail data SI</th>
                        <th class="center-align">Abaikan data SI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td class="">{{$data->nama_customer}}</td>
                        <td class="">{{$data->no_pengajuan}}</td>
                        <td class="">{{$data->id_cr}}</td>
                        <td class="">{{$data->jenis_nota}}</td>
                        <td class="">{{$data->nota_lama}}</td>
                        <td class="">{{$data->terminal_operasi}}</td>
                        @if($data->status_to == "NEW" || $data->status_to == "KONFIRMASI")
                        <td class=" allow center-align">
                            <a href="{{URL::asset('inputsi')}}/{{$data->nota_lama}}" title="Input Data {{$data->nama_customer}}"><i class="material-icons green-text">add</i></a>
                        </td>
                        <td class=" allow center-align">
                            <a href="{{URL::asset('detailinputansi')}}/{{$data->nota_lama}}" title="Detail Data {{$data->nama_customer}}"><i class="material-icons blue-text">sort</i></a>
                        </td>
                        <td class=" allow center-align">
                            <a href="{{URL::asset('abaikansi')}}/{{$data->nota_lama}}" title="Abaikan Data {{$data->nama_customer}}"><i class="material-icons red-text">clear</i></a>
                        </td>
                        @else
                        <td>
                        </td>
                        <td class=" allow center-align">
                            <a href="{{URL::asset('detailinputansi')}}/{{$data->nota_lama}}" title="Detail Data {{$data->nama_customer}}"><i class="material-icons blue-text">sort</i></a>
                        </td>
                        <td class=" allow center-align">
                            <a href="{{URL::asset('abaikansi')}}/{{$data->nota_lama}}" title="Abaikan Data {{$data->nama_customer}}"><i class="material-icons red-text">clear</i></a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                	<tr>
                		<td colspan="7">
                            <a href="{{URL::asset('entrysi')}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
<!--
                            <a href="{{URL::asset('abaikansi')}}/{{$data->id_buat_ba}}" class="btn waves-effect red darken-1" type="submit">Abaikan
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