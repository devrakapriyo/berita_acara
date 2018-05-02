<!DOCTYPE html>
<html>

<head>
    <title>IPC | Proses Monitoring</title>
    <script src="{{URL::asset('jquery.js')}}"></script>
    <script src="{{URL::asset('attribute.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script src="{{URL::asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <!--Import Google Icon Font-->
    <link href="{{URL::asset('font.css')}}" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('design/css/materialize.min.css')}}" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <div class="card-panel z-depth-2">
        @if($respon == 1)
        <table class="bordered atas">
            <thead class="pink-text lighten-5">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th rowspan="2">Tot. pengajuan</th>
                    <th rowspan="2">Tanggal</th>
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
                @forelse($data as $data)
                <tr>
                    <td>{{$data->nama_customer}}</td>
                    <td>{{$data->id_cr}}</td>
                    <td>{{$data->tot_pengajuan}} Pengajuan</td>
                    <td>{{$data->tgl_proses}}</td>
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
                    @endif @if($data->pro_to == '1')
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
                    @endif @if($data->pro_si == '1')
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
                    @endif @if($data->pro_fi == '1')
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
                    <td class="center-align" colspan="8">Maaf, data tidak valid</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @else
        <table class="bordered atas">
            <thead class="pink-text lighten-5">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th rowspan="2">Tot. pengajuan</th>
                    <th rowspan="2">Tanggal</th>
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
                @forelse($cari as $cari)
                <tr>
                    <td>{{$cari->nama_customer}}</td>
                    <td>{{$cari->id_cr}}</td>
                    <td>{{$cari->tot_pengajuan}} Pengajuan</td>
                    <td>{{$cari->tgl_proses}}</td>
                    @if($cari->pro_cr == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($cari->pro_cr == '2')
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
                    @endif @if($cari->pro_to == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($cari->pro_to == '2')
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
                    @endif @if($cari->pro_si == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($cari->pro_si == '2')
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
                    @endif @if($cari->pro_fi == '1')
                    <td class="center-align">
                        <ul class="collection" style="width:75px; height:65px;">
                            <li class="collection-item avatar">
                                <center><i class="material-icons circle green">done</i></center>
                            </li>
                        </ul>
                    </td>
                    @elseif($cari->pro_fi == '2')
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
                    <td class="center-align" colspan="8">Maaf, data yang anda cari tidak ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endif
    </div>
</body>

</html>