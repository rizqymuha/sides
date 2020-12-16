@extends('admin.templates.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tentang Pengguna</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-user mr-1"></i> Nama</strong>
                    <p class="text-muted">
                        {{ $user->name }}
                    </p>
                    <hr>
                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                    <p class="text-muted">{{ $user->email }}</p>
                    <hr>
                    <strong><i class="fas fa-phone mr-1"></i> Nomor Telepon</strong>
                    <p class="text-muted">{{ $user->profile == null ? 'Belum ada nomor telepon' : $user->profile->phone }}</p>
                    <hr>
                    <strong><i class="fas fa-users mr-1"></i> Rukun Warga</strong>
                    <p class="text-muted">{{ $user->profile == null ? 'Belum ada nomor RW' : $hamlet->number }}</p>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
@endsection