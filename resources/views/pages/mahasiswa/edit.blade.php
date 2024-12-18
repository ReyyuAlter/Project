@extends('layouts.master')

@section('title')
    Edit Mahasiswa
@endsection

@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('updateDataMahasiswa', $data->id) }}" method="POST">
                            @csrf
                            @method('POST') <!-- Gunakan POST jika update method POST di route -->

                            <div class="card-body">
                                <!-- Name Input -->
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $data->name) }}" required>
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
                                        value="{{ old('nim', $data->nim) }}" required>
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
                                        <option value="Teknik Informatika"
                                            {{ old('prodi', $data->prodi) == 'Teknik Informatika' ? 'selected' : '' }}>
                                            Teknik Informatika
                                        </option>
                                        <option value="Sistem Informasi"
                                            {{ old('prodi', $data->prodi) == 'Sistem Informasi' ? 'selected' : '' }}>
                                            Sistem Informasi
                                        </option>
                                    </select>
                                    @if ($errors->has('prodi'))
                                        <div class="text-danger">
                                            {{ $errors->first('prodi') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('getalldatamahasiswa') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
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
