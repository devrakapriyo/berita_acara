<!DOCTYPE html>
<html>
<head>
    <title>IPC | Report Monitoring</title>
    <script src="{{URL::asset('jquery.js')}}"></script>
    <script src="{{URL::asset('attribute.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script src="{{URL::asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
</head>

<!--Import Google Icon Font-->
<link href="{{URL::asset('font.css')}}" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="{{URL::asset('design/css/materialize.min.css')}}" media="screen,projection" />
<!--Let browser know website is optimized for mobile-->
<link rel="stylesheet" href="{{URL::asset('style.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style type="text/css">
    body {
        overflow: hidden;
        font-size: 10px;
    }
    table {
      table-layout: fixed; 
      width: 2000px;
      font-size: 11px;
      border-collapse: collapse;
      *margin-left: -100px;/*ie7*/
    }
    td {
      border-top: 1px solid #ccc;
    }
    .outer {position:relative;}
    .inner {
      overflow-x:scroll;
      overflow-y:visible;
      width:100%; 
      height: 610px;
    }
</style>
<body>
<ol class="breadcrumb">
  <li><a href="{{URL::asset('monitoring')}}">Monitoring</a></li>
  <li><a href="{{URL::asset('prosesba')}}">Proses transaksi berita acara</a></li>
  <li class="active">Report monitoring</li>
</ol>
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <div class="outer">
                <div class="inner">
                <table class="bordered highlight">
                <thead class="blue-text">
                  <tr>
                    <td rowspan="2">NAMA PERUSAHAAN</td>
                    <td rowspan="2">NO. PENGAJUAN</td>
                    <td rowspan="2">TGL CS</td>
                    <td rowspan="2">NOTA LAMA</td>
                    <td rowspan="2">JENIS NOTA</td>
                    <td colspan="4" style="text-align:center;">Proses tanda tangan B.A</td>
                    <td colspan="5"></td>
                    <td rowspan="3">Nota Baru</td>
                    <td rowspan="3">NO. BERITA ACARA</td>
                    <td rowspan="3">Lama Proses CS (hari)</td>
                    <td rowspan="3">Lama Proses S/D Selesai (hari)</td>
                  </tr>
                  <tr>
                    <td colspan="2">TO</td>
                    <td colspan="2">DATIN</td>
                    <td colspan="3"></td>
                    <td colspan="2">KEUANGAN</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>TGL KIRIM KE TO</td>
                    <td>TGL KEMBALI KE CR</td>
                    <td>TGL KIRIM KE DATIN</td>
                    <td>TGL KIRIM KE CR</td>
                    <td>JML TAGIHAN AWAL</td>
                    <td>JML TAGIHAN AKHIR</td>
                    <td>NOMINAL YANG RESTITUSI</td>
                    <td>TGL. KIRIM RESTITUSI</td>
                    <td>TGL KIRIM KE KEUANGAN</td>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $data)
                      <tr>
                          <td>{{$data->nama_customer}}</td>
                          <td>{{$data->no_pengajuan}}</td>
                          <td>{{$data->tgl_cs}}</td>
                          <td>{{$data->nota_lama}}</td>
                          <td>{{$data->jenis_nota}}</td>

                          @if($data->id_warna== '1') 

                          <td class="blue">{{$data->tgl_kirim_to}}</td>
                          <td class="blue">{{$data->tgl_kembalicr_to}}</td>
                          <td class="blue">{{$data->tgl_kirim_datin}}</td>
                          <td class="blue">{{$data->tgl_kembalicr_si}}</td>
                          <td class="">Rp. {{$data->tagihan_awal}}</td>
                          <td class="">Rp. {{$data->tagihan_akhir}}</td>
                          <td class="">Rp. {{$data->jml_restitusi}}</td>
                          <td class="blue">{{$data->tgl_kirim_restitusi}}</td>

                          <td class="blue">{{$data->tgl_kirim_keuangan}}</td>
                          @else
                          <td class="yellow">{{$data->tgl_kirim_to}}</td>
                          <td  class="yellow">{{$data->tgl_kembalicr_to}}</td>
                          <td class="yellow">{{$data->tgl_kirim_datin}}</td>
                          <td class="yellow">{{$data->tgl_kembalicr_si}}</td>

                          <td>Rp. {{$data->tagihan_awal}}</td>
                          <td>Rp. {{$data->tagihan_akhir}}</td>
                          <td>Rp. {{$data->jml_restitusi}}</td>
                          <td class="yellow">{{$data->tgl_kirim_restitusi}}</td>

                          <td class="yellow">{{$data->tgl_kirim_keuangan}}</td>
                          @endif
                          <td>{{$data->nota_baru}}</td>
                          <td>{{$data->no_berita_acara}}</td>
                          
                          <td>{{$data->lama_proses_cr}}</td>
                          <td>{{$data->lama_sd_selesai}}</td>
                      </tr>
                      @endforeach
                  </tbody>

                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>