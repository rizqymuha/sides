@extends('admin.templates.default')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pengguna Rukun Warga</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>email</th>
                    <th>Rukun Warga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rizky</td>
                    <td>rizky@mail.com</td>
                    <td>111</td>
                </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
@endsection