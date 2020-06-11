@extends('admin.index')
@section('content')

<div class="card shadow mb-12">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Stock Items</h6>
  </div>
    <div class="card-body">
      <form action="{{ route('add-stock-proses', $item->id) }}" method="POST" >
      {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Nama Produk:</label>
          <input type="text" name="name" class="form-control" value="{{ $item->name }}" id="email" readonly>
        </div>
        <div class="form-group">
          <label for="pwd">Jumlah:</label>
          <input type="text" class="form-control" id="jml" name="jumlah">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
</div>


@endsection