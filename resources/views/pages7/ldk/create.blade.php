@extends('layouts.master')

@section('title')
    Tambah Data Mahasiswa
@endsection

@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data LDK Al-gazhari</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('createDataLdk') }}" method="POST">
                                @csrf

                                <!-- Name Input -->
                                <div class="form-group">
                                    <label for="name">UKM</label>
                                    <input type="text" class="form-control" id="ukm" name="ukm"
                                        placeholder="Masukkan Nama UKM" value="{{ old('ukm') }}" required>
                                    @if ($errors->has('ukm'))
                                        <div class="text-danger">
                                            {{ $errors->first('ukm') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- NIM Input -->
                                <div class="form-group">
                                    <label for="pengurus">Pengurus</label>
                                    <input type="text" class="form-control" id="pengurus" name="pengurus"
                                        placeholder="Masukkan pengurus" value="{{ old('pengurus') }}" required > 
                                    @if ($errors->has('pengurus'))
                                        <div class="text-danger">
                                            {{ $errors->first('pengurus') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Prodi Input -->
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        placeholder="Masukkan jabatan" value="{{ old('jabatan') }}" required > 
                                    @if ($errors->has('jabatan'))
                                        <div class="text-danger">
                                            {{ $errors->first('jabatan') }}
                                        </div>
                                    @endif
                                </div>
                               

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('getalldataldk') }}" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

@section('scripts')
    <!-- Include any specific scripts needed here -->
@endsection
