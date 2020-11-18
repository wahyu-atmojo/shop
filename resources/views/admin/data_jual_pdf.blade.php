<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penjualan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan UD Tumbuh Jati</h4>
		</h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
	            <th>Nama</th>
	            <th>Alamat</th>
	            <th>Kode Transaksi</th>
	            <th>No Resi</th>
	            <th>Waktu Terkirim</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $no = 1;
          ?>
          @foreach($transaksi as $i)
          <tr>
            <th>{{ $no++ }}</th>
            <th>{{ $i->user_transaction['name'] }}</th>
            <th>{{ $i->user_transaction['alamat'] }}</th>
            <th>{{ $i->kode_transaksi }}</th>
            <th>{{ $i->no_resi }}</th>
            <th>{{ $i->updated_at }}</th>
            {{-- <th>
              <a href="#" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$i->id}}">Kirim No Resi</a>
            </th> --}}
          </tr>
          @endforeach
		</tbody>
	</table>

</body>
</html>