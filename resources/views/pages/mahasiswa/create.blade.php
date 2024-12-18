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
                            <h3 class="card-title">Tambah Data Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('createDataMahasiswa') }}" method="POST">
                                @csrf

                                <!-- Name Input -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama Mahasiswa" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- NIM Input -->
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        placeholder="Masukkan NIM" value="{{ old('nim') }}" required > 
                                    @if ($errors->has('nim'))
                                        <div class="text-danger">
                                            {{ $errors->first('nim') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Prodi Input -->
                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select class="form-control" id="prodi" name="prodi" required>
                                        <option value="">Pilih Prodi</option>
                                        <option value="Teknik Informatika" {{ old('prodi') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                        <option value="Sistem Informasi" {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                    </select>
                                    @if ($errors->has('prodi'))
                                        <div class="text-danger">
                                            {{ $errors->first('prodi') }}
                                        </div>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('getalldatamahasiswa') }}" class="btn btn-secondary">Batal</a>
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
