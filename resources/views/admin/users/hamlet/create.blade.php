@extends('admin.templates.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Pengguna RW</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POSt" action="{{ route('admin.user.hamlet.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Kata sandi</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Konfirmasi kata sandi</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Masukkan ulang kata sandi" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection