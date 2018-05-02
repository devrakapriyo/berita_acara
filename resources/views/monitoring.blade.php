<!DOCTYPE html>
<html>

<head>
    <title>IPC | Monitoring</title>
</head>


<body>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.modal-trigger').leanModal();
        });
    </script>

    <div class="card-panel z-depth-2">
        @if($respon == 1)
        <table class="bordered atas">
            <thead class="pink-text lighten-5">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Nota lama</th>
                    <th rowspan="2">No pengajuan</th>
                    <th colspan="4" class="center-align">Konfirmasi</th>
                </tr>
                <tr>
                    <th class="center-align">CS</th>
                    <th class="center-align">TO</th>
                    <th class="center-align">SI</th>
                    <th class="center-align">FI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data) @if($data->status_fi == 'NEW')
                <tr>
                    <td class="blue-text">{{$data->nama_customer}}</td>
                    <td>{{$data->nota_lama}}</td>
                    <td>{{$data->no_pengajuan}}</td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <!-- <td class="center-align">
                        <a data-target="modal1" class="modal-trigger" href="#modal1">View</a>
                    </td> -->
                </tr>
                @endif @empty
                <tr>
                    <td colspan="8" class="pink-text center-align">Maaf, data tidak valid</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td class="kanan">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
        </table>
        @else
        <table class="bordered atas">
            <thead class="pink-text lighten-5">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Nota lama</th>
                    <th rowspan="2">No pengajuan</th>
                    <th colspan="4" class="center-align">Konfirmasi</th>
                    <th rowspan="2" class="center-align blue-text">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">CS</th>
                    <th class="center-align">TO</th>
                    <th class="center-align">SI</th>
                    <th class="center-align">FI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <td class="blue-text">{{$cari->nama_customer}}</td>
                    <td>{{$cari->nota_lama}}</td>
                    <td>{{$cari->no_pengajuan}}</td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    <!-- <td class="center-align">
                        <a href="#modal1">View</a>
                    </td> -->
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="pink-text center-align">Maaf, data yang anda cari tidak ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endif
    </div>
    <div id="modal1" class="modal modal-fixed-footer" style="width:98%;">
        <div class="modal-content">
            <h4 class="blue-text">Report monitoring</h4>
            <hr>
            <div>
                <table border="1" class="bordered">
                    <tr>
                        <th rowspan="2">NAMA</th>
                        <th rowspan="2">NAMA PERUSAHAAN</th>
                        <th rowspan="2">NO. PENGAJUAN</th>
                        <th rowspan="2">TGL CS</th>
                        <th rowspan="2">NOTA LAMA</th>
                        <th rowspan="2">JENIS NOTA</th>
                        <th colspan="4">Proses tanda tangan B.A</th>
                        <th colspan="5"></th>
                        <th rowspan="3">Status &amp;No. Nota Baru</th>
                        <th rowspan="3">Lama Proses CS (hari)</th>
                        <th rowspan="3">Lama Proses S/D Selesai (hari)</th>
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
                        <td></td>
                        <td>TGL KIRIM KE TO</td>
                        <td>TGL KEMBALI KE CR</td>
                        <td>TGL KIRIM KE DATIN</td>
                        <td>TGL KIRIM KE CR</td>
                        <td>JML TAGIHAN AWAL</td>
                        <td>JML TAGIHAN AKHIR</td>
                        <td>NOMINAL YANG RESTITUSI</td>
                        <td>TGL KIRIM KE KEUANGAN</td>
                        <td>NO. BERITA ACARA</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
            </div>
        </div>
</body>

</html>