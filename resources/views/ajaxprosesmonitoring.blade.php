@extends('dashboard') @section('content')
<ol class="breadcrumb">
    <li><a href="{{URL::asset('monitoring')}}">Monitoring</a></li>
    <li class="active">Proses transaksi berita acara</li>
    <li><a href="{{URL::asset('reportmonitoring')}}">Report monitoring</a></li>
</ol>
<form method="post" action="{{URL::asset('cariprosesmonitoring')}}">
    <div class="row">
        <div class="input-field col s6">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input name="cari" type="text" class="validate">
            <label for="password">Pencarian...</label>
        </div>
        <button type="submit" class="btn blue" style="margin-top:25px;">
            <i class="material-icons right">search</i>
        </button>
    </div>
</form>
<div class="ajaxload">
    <center>
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </center>
</div>
@stop