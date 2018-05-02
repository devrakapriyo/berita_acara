<html>
<link rel="stylesheet" href="{{URL::asset('style.css')}}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
@if($si2 !== null)
<table>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td class="tbl-head" colspan="9">REKAPITULASI KOREKSI NOTA {{$si2->jenis_nota}}</td>
	</tr>
	<tr>
		<td class="tbl-head" colspan="9">{{$si2->nama_customer}}</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<table border="1" class="tbl-border">
	<tr style="background-color:#ecf0f1;">
		<td>No. pengajuan</td>
		<td>No. Permohonan</td>
		<td>No. BPRP</td>
		<td>Jenis Nota</td>
		<td>Nota Lama</td>
		<td>No. Req</td>
		<td>Nota Baru</td>
		<td>Tagihan Baru</td>
		<td>Jumlah Tagihan</td>
	</tr>
	@foreach($si as $si)

	<tr>
		<td>{{$si->no_pengajuan}}</td>
		<td>{{$si->id_cr}}</td>
		<td>{{$si->no_bprp}}</td>
		<td>{{$si->jenis_nota}}</td>
		<td>{{$si->nota_lama}}</td>
		<td>{{$si->no_req}}</td>
		<td>{{$si->nota_baru}}</td>
		<td style="text-align:right;">Rp. {{$si->tagihan_baru}}</td>
		<td style="text-align:right;">Rp. {{$si->tagihan}}</td>
	</tr>
	@endforeach
</table>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Dibuat oleh Terminal Operasi</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Tanggal cetak  {{$date}}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Verivikasi</td>
	<td>Terminal Operasi</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>{{$si->nama_to}}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
@elseif($to2 !== null)
<table>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td class="tbl-head" colspan="7">REKAPITULASI KOREKSI NOTA {{$to2->jenis_nota}}</td>
	</tr>
	<tr>
		<td class="tbl-head" colspan="7">{{$to2->nama_customer}}</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>to
	</tr>
</table>
<table border="1" class="tbl-border">
	<tr style="background-color:#ecf0f1;">
		<td>No. pengajuan</td>
		<td>No. Permohonan</td>
		<td>No. BPRP</td>
		<td>Jenis Nota</td>
		<td>Nota Lama</td>
		<td>No. Req</td>
		<td>Jumlah Tagihan</td>
	</tr>
	@foreach($to as $to)

	<tr>
		<td>{{$to->no_pengajuan}}</td>
		<td>{{$to->id_cr}}</td>
		<td>{{$to->no_bprp}}</td>
		<td>{{$to->jenis_nota}}</td>
		<td>{{$to->nota_lama}}</td>
		<td>{{$to->no_req}}</td>
		<td style="text-align:right;">Rp. {{$to->tagihan}}</td>
	</tr>
	@endforeach
</table>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Dibuat oleh Terminal Operasi</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Tanggal cetak  {{$date}}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Verivikasi</td>
	<td>Terminal Operasi</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td>{{$to->nama_to}}</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

@endif

</html>