@extends('admin.index')
@section('content')

<div class="card shadow mb-12">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Produk Baru</h6>
  </div>
    <div class="card-body">
      <form action="{{ route('add-proses') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Nama Produk:</label>
          <input type="text" name="name" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="email">Keterangan:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
        </div>
        <div class="form-group">
          <label for="email">Gambar:</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="in" name="image">
            <label class="custom-file-label" for="customFileLang">pilih file </label>
          </div>
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