@extends('admin.index')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  {{-- <a href="{{ route('add-items') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Item</a> --}}
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ url('/dashboard') }}" method="GET">
    <div class="input-group">
      <input class="form-control" id="myInput" name="cari" type="text" placeholder="Cari Produk..">
      <div class="input-group-append">
        <input class="btn btn-primary" type="submit" value="Cari">
      </div>
    </div>
  </form>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Barang Diskon</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>image</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Diskon</th>
            <th>Keterangan</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
            @foreach($item as $i)
              @if($i->diskon)
                  <tr>
                    <th><img src="{{asset('produk/'.$i->image)}}" alt="produk" height="200" width="200"></th>
                    <th>{{ $i->name }}</th>
                    <th><del style="color: red">Rp {{ number_format($i->price, 2, ',','.') }}</del><br> Rp {{ number_format( ($i->price)-($i->price * ($i->diskon/100)), 2, ',','.') }}</th>
                    <th>{{ $i->stock }} <a href="{{ route('add-stock', $i->id) }}" type="button" class="btn btn-success btn-sm">Tambah Stock</a></th>
                    <th>{{ $i->diskon }} %</th>
                    <th>{{ $i->description }}</th>
                    <th>{{ $i->created_at }}</th>
                    <th>
                      <a href="{{ route('edit-items', $i->id) }}" type="button" class="btn btn-success btn-sm">Edit</a>
                      <a href="{{ route('delete-items', $i->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger btn-sm">Hapus</a>
                    </th>
                  </tr>
              
              @endif
            @endforeach
        </tfoot>
        {{$item->links()}}
      </table>
    </div>
  </div>
</div>
@endsection