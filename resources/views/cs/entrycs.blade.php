<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Input Data Customer Service</title>
</head>
@section('content')

<body>
    <script type="text/javascript">
        $(document).ready(function () {
          //called when key is pressed in textbox
          $(".angka").keypress(function (e) {
             //if the letter is not digit then display error and don't type anything
             if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                $("#errmsg").html("Digits Only").show().fadeOut("slow");
                       return false;
            }
           });
        });
    </script>
    <form method="post" action="{{URL::asset('entrycs')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <table id="addtable" class="atas table-responsive highlight">
                <thead class="pink-text">
                    <tr>
                        <th>Customer</th>
                        <th>No pengajuan</th>
                        <th>No permohonan</th>
                        <th>Nota lama</th>
                        <th>Tagihan</th>
                        <th>No. Request</th>
                        <th>Jenis</th>
                        <th>Terminal oprasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <input type="hidden" name="status_cr[]" value="NEW">
                        <input type="hidden" name="surat_kuasa[]" value="Ada">
                        <th>
                            <div class="input-field">
                                <input name="customer[]" onkeyup="this.value = this.value.toUpperCase()" placeholder="Customer" id="first_name" type="text" class="kapital validate copy-generate1" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <input name="no_pengajuan[]" placeholder="No pengajuan" id="first_name" type="text" class="validate generate copy-generate blue-text" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <input name="no_permohonan[]" placeholder="No permohonan" id="first_name" type="text" class="validate pink-text copy-generate2" value="{{$data->id_cr}}" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <input name="nota_lama[]" placeholder="Nota lama" id="first_name" type="text" class="validate" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <input name="tagihan[]" placeholder="Rp." id="first_name" type="text" class="validate green-text" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <input name="no_req[]" placeholder="No. Request" id="first_name" type="text" class="validate" required>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <select class="browser-default" name="jenis_nota[]" required>
                                    <option value="" disabled selected>Jenis nota</option>
                                    <option value="Kapal">Kapal</option>
                                    <option value="Barang">Barang</option>
                                    <option value="Peti kemas">Peti kemas</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </th>
                        <th>
                            <div class="input-field">
                                <select class="browser-default" name="to[]" required>
                                    <option value="" disabled selected>TO</option>
                                    <option value="TO 1">TO 1</option>
                                    <option value="TO 2">TO 2</option>
                                    <option value="TO 3">TO 3</option>
                                    <option value="VAS">VAS</option>
                                </select>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <p>*) Pastikan data terisi semua</p>
            <p>*) Pastikan <span class="pink-text"><b>Nomer permohonan</b></span> sama dengan nomer permohonan yang terinput sebelumnya dan pastikan <span class="blue-text"><b>No pengajuan</b></span> berbeda.</p>
            <p>*) Untuk mengcopy <span class="pink-text"><b>No Pengajuan dan No Permohonan</b></span> pada baris selanjutnya silahkan mengklik tombol <span class="pink-text"><b>COPY</b></span></p>
        </div>

        <button class="btn waves-effect blue lighten-1 kanan" type="submit" name="action">
            <i class="material-icons right">send</i> SIMPAN
        </button>
        <div style="margin-right:10px;" onclick="addtable()" class="btn waves-effect green kanan" name="action">
            <i class="material-icons right">add</i> ADD
        </div>
        <div class="btn waves-effect orange" onclick="copygenerate()" name="action">
            <i class="material-icons right">description</i> COPY
        </div>
    </form>
</body>
@stop

</html>