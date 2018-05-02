<!DOCTYPE html>
<html>
<head>
    <title>IPC | Buat Beriata Acara {{$data->nama_customer}}</title>
</head>
<body>
<div class="tabel">
                    <table border="2" style="font-size:12px; border-collapse:collapse; width:100%;">
                        <thead>
                            <tr>
                                <td class="aligcen">NO</td>
                                <td class="aligcen">BPRP</td>
                                <td class="aligcen">NO PENGAJUAN</td>
                                <td class="aligcen">NO PERMOHONAN</td>
                                <td class="aligcen">JENIS NOTA</td>
                                <td class="aligcen">NOTA LAMA</td>
                                <td class="aligcen">NO REQ</td>
                                <td class="aligcen">TAGIHAN</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td class="aligcen">1</td>
                                <td class="aligcen">{{$data->no_bprp}}</td>
                                <td class="aligcen">{{$data->no_pengajuan}}</td>
                                <td class="aligcen">{{$data->id_cr}}</td>
                                <td class="aligcen">{{$data->jenis_nota}}</td>
                                <td class="aligcen">{{$data->nota_lama}}</td>
                                <td class="aligcen">{{$data->no_req}}</td>
                                <td class="aligcen">{{$data->tagihan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <ol>
                    <li style="text-align: left;" value="2">
                        <p style="margin: 0px;"><span style="font-size: 10pt;">Setelah diadakan penelitian atas dokumen tersebut diatas dapat kami jelaskan sebagai berikut:</span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li style="margin: 0.5em;"><span style="font-size: 10pt;">Bahwa tarif container 20" Empty pada Nota Jasa Penumpukan tersebut diatas adalah Rp. 17.500,-/Box seharusnya adalah sebesar Rp. 8.500,-/Box.</span></li>
                            <li style="margin: 0.5em;"><span style="font-size: 10pt;">Terkait hal tersebut diatas, mohon dapat dikoreksi dan direstitusi Nota Jasa Penumpukan atas nama Pemakai Jasa {{$data->nama_customer}} Sebesar Rp. 3.137.750,- (Tiga Juta Seratus Tiga Puluh Tujuh Ribu Tujuh Ratus Lima Puluh Rupiah).</span></li>
                        </ol>
                    </li>
                    <li style="text-align: left;"><span style="font-size: 10pt;">Demikian Berita Acara ini di buat dengan sebenarnya untuk diketahui dan dapat dipergunakan seperlunya, apabila dikemudian hari terdapat kekeliruan dapat dibetulkan sebagaimana mestinya.</span></li>
                </ol>
                <table style="height: 218px; margin-left: auto; margin-right: auto;" border="0px" width="90%">
                    <tbody>
                        <tr style="text-align: left;">
                            <td style="text-align: center;" colspan="3"><span style="font-size: 12pt;">Diverifikasi oleh :</span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;</span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align: center;" colspan="3">
                                <p><span style="font-size: 10pt;">&nbsp;</span></p>
                                <p><span style="font-size: 12pt;">Mengetahui :</span></p>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align: center;"><span style="font-size: 10pt;"><strong>JABATAN</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<strong>JABATAN</strong></span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><span style="font-size: 10pt;">&nbsp;</span></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="text-align: center;"><span style="font-size: 10pt;"><strong>NAMA</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>
                            <td style="text-align: center;"><span style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;<strong>NAMA</strong></span></td>
                        </tr>
                    </tbody>
                </table>
</body>
</html>