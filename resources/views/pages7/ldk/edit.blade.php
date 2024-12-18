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
                            <h3 class="card-title">Edit Data UKM</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('updateDataLdk', $data->id) }}" method="POST">
                            @csrf
                            @method('POST') <!-- Gunakan POST jika update method POST di route -->

                            <div class="card-body">
                                <!-- Name Input -->
                                <div class="form-group">
                                    <label for="ukm">UKM</label>
                                    <input type="text" class="form-control" id="ukm" name="ukm"
                                        value="{{ old('ukm', $data->ukm) }}" required>
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
                                        value="{{ old('pengurus', $data->pengurus) }}" required>
                                    @if ($errors->has('pengurus'))
                                        <div class="text-danger">
                                            {{ $errors->first('pengurus') }}
                                        </div>
                                    @endif
                                </div>
    
                             <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        value="{{ old('jabatan', $data->jabatan) }}" required>
                                    @if ($errors->has('jabatan'))
                                        <div class="text-danger">
                                            {{ $errors->first('jabatan') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('getalldataldk') }}" class="btn btn-secondary">Batal</a>
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
