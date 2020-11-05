@extends('admin.index')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ url('/sudah_terkirim') }}" method="GET">
    <div class="input-group">
      <input class="form-control" id="myInput" name="cari" type="text" placeholder="Cari Kode Transaksi..">
      <div class="input-group-append">
        <input class="btn btn-primary" type="submit" value="Cari">
      </div>
    </div>
  </form>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data List Produk Yang Sudah Terkirim</h6>
  </div>
  <div class="card-header py-3">
    <a href="{{ route('cetak_laporan')}}" class="btn btn-success">Cetak Laporan</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Transaksi</th>
            <th>No Resi</th>
            <th>Waktu Terkirim</th>
            {{-- <th>Action</th> --}}
          </tr>
        </thead>
        <tfoot>
          <?php
            $no = 1;
          ?>
          @foreach($transaksi as $i)
          <tr>
            <th>{{ $no++ }}</th>
            <th>{{ $i->user['name'] }}</th>
            <th>{{ $i->user['alamat'] }}</th>
            <th>{{ $i->kode_transaksi }}</th>
            <th>{{ $i->no_resi }}</th>
            <th>{{ $i->updated_at }}</th>
            {{-- <th>
              <a href="#" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$i->id}}">Kirim No Resi</a>
            </th> --}}
          </tr>
          @endforeach
        </tfoot>
        {{$transaksi->links()}}
      </table>
    </div>
  </div>
</div>
{{-- @if(isset($transaksi))
@foreach($transaksi as $i)
<div class="modal fade" id="myModal{{$i->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Masukkan Nomor Resi</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('add-resi', $i->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="resi">No Resi:</label>
              <input type="resi" class="form-control" id="resi" name="resi">
            </div>
            <button type="submit" class="btn btn-default">Masuk</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@endforeach
@endif --}}
@endsection