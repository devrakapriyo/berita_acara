<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Truncate data proses monitoring</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('truncate')}}">Dashboard</a></li>
	<li><a href="{{URL::asset('truncatecs')}}">Data CS</a></li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li><a href="{{URL::asset('truncatefi')}}">Data FI</a></li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data nomer permohonan</a></li>
	<li class="active">Data proses monitoring</li>
    <li><a href="{{URL::asset('truncatereport')}}">Data report</a></li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
<div class="card-panel z-depth-2">
<table>
	<thead>
		<tr>
			<td>Nomer permohonan</td>
			<td>Proses CR</td>
			<td>Proses TO</td>
			<td>Proses SI</td>
			<td>Proses FI</td>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
					<td>{{$data->id_cr}}</td>
					@if($data->pro_cr == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($data->pro_cr == '2')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle pink">close</i></center>
                            </li>
                        </ul>
                    </td>
                    @else
                   <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle orange">pause</i></center>
                            </li>
                        </ul>
                    </td>
                    @endif
                    @if($data->pro_to  == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($data->pro_to == '2')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle pink">close</i></center>
                            </li>
                        </ul>
                    </td>
                    @else
                   <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle orange">pause</i></center>
                            </li>
                        </ul>
                    </td>
                    @endif
                    @if($data->pro_si == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($data->pro_si == '2')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle pink">close</i></center>
                            </li>
                        </ul>
                    </td>
                    @else
                   <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle orange">pause</i></center>
                            </li>
                        </ul>
                    </td>
                    @endif
                    @if($data->pro_fi == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($data->pro_fi == '2')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle pink">close</i></center>
                            </li>
                        </ul>
                    </td>
                    @else
                   <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle orange">pause</i></center>
                            </li>
                        </ul>
                    </td>
                    @endif
                </tr>
        @empty
        <tr>
            <td class="center-align pink-text" colspan="5">Maaf, data tidak valid</td>
        </tr>
        @endforelse
    </tbody>
	<tfoot>
		<tr>
			<td colspan="5">{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
</div>
<a href="{{URL::asset('hapusprosesmonitoring')}}" class="btn waves-effect pink darken-1 kanan" type="submit">Truncate
    <i class="material-icons right">delete</i>
</a>
</body>
@stop
</html>