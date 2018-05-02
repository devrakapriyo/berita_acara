<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Abaikan Data {{$data->nama_customer}}</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entryfi')}}">Finance</a></li>
        <li><a href="{{URL::asset('datafi')}}">Data Finance</a></li>
        <li class="active">Input Finance</li>
    </ol>
    @if(Session::has('sukses'))
    <div class="chip" title="Klick jika ingin di hilangkan">
        <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
    </div>
    @endif
    <div class="card-panel z-depth-2">
        <form method="post" action="{{ URL::asset('abaikanfi2') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="status_fi" value="NEW">
            <input type="hidden" name="id_buat_ba" value="{{$data->id_buat_ba}}">
            <input type="hidden" name="id_cr" value="{{$data->id_cr}}">
            <input type="hidden" name="nota_lama" value="{{$data->nota_lama}}">
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th colspan="3">
                            <h5 class="blue-text">Input Finance</h5></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>No BA</th>
                        <th>:</th>
                        <th>{{$data->id_buat_ba}}</th>
                    </tr>
                    <tr>
                        <th>Nota Lama</th>
                        <th>:</th>
                        <th>{{$data->nota_lama}}</th>
                    </tr>
                    <tr>
                        <th>No. Permohonan</th>
                        <th>:</th>
                        <th>{{$data->id_cr}}</th>
                        <tr>
                            <th>No req</th>
                            <th>:</th>
                            <th>{{$data->no_req}}</th>
                        </tr>
                        <tr>
                            <th>No Pengajuan</th>
                            <th>:</th>
                            <th>{{$data->no_pengajuan}}</th>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <th>:</th>
                            <th>{{$data->nama_customer}}</th>
                        </tr>
                        <tr>
                            <th>Selisih</th>
                            <th>:</th>
                            <th class="orange-text">Rp. {{$data->selisih}}</th>
                        </tr>
                        <tr>
                            <th>Tagihan</th>
                            <th>:</th>
                            <th class="green-text">Rp. {{$data->tagihan}}</th>
                        </tr>
<!--
                        <tr>
                            <th>Tanggal</th>
                            <th>:</th>
                            <th>
                                <input name="tanggal" type="date" class="datepicker" placeholder="Masukan Tanggal">
                            </th>
                        </tr>
-->
                        <tr>
                            <th>Jumlah finance</th>
                            <th>:</th>
                            <th>
                                <div class="input-field">
                                    <input name="jml_finance" placeholder="Jumlah" type="text" value="Rp. {{$data->selisih}}">
                                </div>
                            </th>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">
                            <a href="{{URL::asset('detailinputfi')}}/{{$data->id_buat_ba}}" class="btn waves-effect orange" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
                            <button class="btn waves-effect green">Abaikan
                                <i class="material-icons right">send</i>
                            </button>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</body>
@stop

</html>