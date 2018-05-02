<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Buat Nomer Permohonan</title>
</head>
@section('content')

<body>
    <form method="post" action="{{URL::asset('monitoringcs')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardcs')}}">Dashboard</a></li>
            <li class="active">Entry Customer Service</li>
            <li><a href="{{URL::asset('datacs')}}">Data Customer Service</a></li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
        </div>
        @endif
        <div class="card-panel z-depth-3">
            <table>
                <thead>
                    <tr>
                        <th>
                            <h5 class="blue-text">Masukan nomor permohonan</h5></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="card-content">
                                <div class="input-field col s6">
                                    <input class="generate pink-text" name="no_permohonan" placeholder="Masukan" type="text">
                                    <label class="blue-text">Nomer permohonan</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <div class="card-action">
                                <button class="btn waves-effect blue lighten-1 kanan" type="submit" name="action">SIMPAN
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <p>*) Harap mengcoppy <span class="pink-text"><b>Nomer permohonan</b></span> diatas sebelum disimpan</p>
        </div>
    </form>
</body>
@stop

</html>