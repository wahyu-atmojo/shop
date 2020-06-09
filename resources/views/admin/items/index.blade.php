@extends('admin.index')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="{{ route('add-items') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Item</a>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
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
            <th>Keterangan</th>
            <th>Created_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          @foreach($item as $i)
          <tr>
            <th><img src="{{asset('produk/'.$i->image)}}" alt="produk" height="200" width="200"></th>
            <th>{{ $i->name }}</th>
            <th>{{ $i->price }}</th>
            <th>{{ $i->stock }}</th>
            <th>{{ $i->description }}</th>
            <th>{{ $i->created_at }}</th>
            <th>
              <a href="" type="button" class="btn btn-success btn-sm">Edit</a>
              <a href="" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger btn-sm">Hapus</a>
            </th>
          </tr>
          @endforeach
        </tfoot>
        {{$item->links()}}
      </table>
    </div>
  </div>
</div>
@endsection