<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
		<ol class="breadcrumb">
	        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
	        <li><a href="{{URL::asset('entryfi')}}">Finance</a></li>
	        <li><a href="{{URL::asset('datafi')}}">Data Finance</a></li>
	        <li class="active">Edit data FI</li>
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
                        <th>Customer</th>
                        <th>No pengajuan</th>
                        <th>No permohonan</th>
                        <th>Jenis nota</th>
                        <th>Nota lama</th>
                        <th>Terminal operasi</th>
                        <th class="center-align">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <th>{{$data->nama_customer}}</th>
                        <th>{{$data->no_pengajuan}}</th>
                        <th>{{$data->id_cr}}</th>
                        <th>{{$data->jenis_nota}}</th>
                        <th>{{$data->nota_lama}}</th>
                        <th>{{$data->terminal_operasi}}</th>
                        <th>
                            <a class="center-align" href="{{URL::asset('editdetaildatafi')}}/{{$data->nota_lama}}" title="Edit Data {{$data->nama_customer}}"><i class="material-icons left">edit</i>Edit</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                	<tr>
                		<td colspan="7">
                			<a href="{{URL::asset('entryfi')}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
                		</td>
                	</tr>
                </tfoot>
            </table>
        </div>
</body>
@stop
</html>