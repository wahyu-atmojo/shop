@extends('admin.index')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="{{ route('add-items') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Item</a>
</div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection