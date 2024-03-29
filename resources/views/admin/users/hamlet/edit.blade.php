@extends('admin.templates.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pengguna RW</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('admin.hamlet.user.update', $user) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Masukkan nama" required value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor telepon</label>
                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Masukkan nomor telepon" required value="{{ $user->profile == null ? '' : $user->profile->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="hamlet">Nomor RW</label>
                            <select id="hamlet" name="hamlet_id" class="form-control" required>
                                <option selected disabled>Pilih nomor...</option>
                                @foreach($hamlets as $hamlet)
                                    <option value="{{ $hamlet->id }}" {{ $user->profile == null ? '' : $user->profile->hamlet_id == $hamlet->id ? 'selected' : ''}}>{{ $hamlet->number }}</option>
                                @endforeach
                            </select>                        
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