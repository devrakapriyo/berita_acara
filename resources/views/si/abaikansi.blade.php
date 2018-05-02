<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Abaikan Data {{$data->nama_customer}}</title>
</head>
@section('content')

<body>
    <form method="post" action="{{URL::asset('abaikansi')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardsi')}}">Dashboard</a></li>
            <li><a href="{{URL::asset('entrysi')}}">Sistem Information</a></li>
            <li><a href="{{URL::asset('datasi')}}">Data Sistem Information</a></li>
            <li class="active">Input Sistem Informasi</li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
        </div>
        @endif
        <div class="card-panel z-depth-2">
            <table class=" highlight responsive-table">
                <thead>
                    <tr>
                        <th colspan="3" class="blue-text">
                            <h5>Sistem Infromation</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>No BA</th>
                        <th>:</th>
                        <th>{{$data->id_buat_ba}}</th>
                        <input type="hidden" name="id_cr" value="{{ $data->id_cr }}">
                        <input type="hidden" name="id_buat_ba" value="{{ $data->id_buat_ba}}">
                        <input type="hidden" name="nota_lama" value="{{ $data->nota_lama}}">
                        <input type="hidden" name="status_si" value="NEW">
                    </tr>
                    <tr>
                        <th>No permohonan</th>
                        <th>:</th>
                        <th>{{$data->id_cr}}</th>
                    </tr>
                    <tr>
                        <th>Nota lama</th>
                        <th>:</th>
                        <th>{{$data->nota_lama}}</th>
                    </tr>
                    <tr>
                        <th>No request</th>
                        <th>:</th>
                        <th>{{$data->no_req}}</th>
                    </tr>
                    <tr>
                        <th>Tagihan lama</th>
                        <th>:</th>
                        <th class="green-text">Rp. {{$data->tagihan}}</th>
                    </tr>
                    <tr>
                        <th>Nota baru</th>
                        <th>:</th>
                        <th>
                            <div class="input-field">
                                <input name="nota_baru" placeholder="Nota baru" id="first_name" type="text" class="validate">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>Tagihan baru</th>
                        <th>:</th>
                        <th>
                            <div class="input-field">
                                <input name="tagihan_baru" placeholder="Tagihan baru" id="first_name" type="text" class="validate">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <th>:</th>
                        <th>
                            <div class="input-field">
                                <input name="keterangan" placeholder="Keterangan" id="first_name" type="text" class="validate">
                            </div>
                        </th>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">
                            <a href="{{URL::asset('detailinputsi')}}/{{$data->id_buat_ba}}" class="btn waves-effect orange" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
                            <button class="btn waves-effect green"> <i class="material-icons right">send</i> Abaikan</button>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </form>
</body>
@stop

</html>