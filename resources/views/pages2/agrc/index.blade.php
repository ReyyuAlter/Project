@extends('layouts.master')

@section('title')
   
@endsection

@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title" >Prakerim UKM AGRC</h3>
                           
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <a href="{{ route('createDataAgrc') }}" class="btn btn-success mb-3">
                                    <i class="fas fa-plus"></i> Add
                        </a>

                             
                            
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>UKM</th>
                                        <th>Pengurus</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data->count() > 0)
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $dt)
                                            <tr class="odd">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $dt->ukm }}</td>
                                                <td>{{ $dt->pengurus }}</td>
                                                <td>{{ $dt->jabatan }}</td>
                                                <th>
                                                    <a href="{{ route('getDataByIdAgrc', $dt->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('deleteDataAgrc', $dt->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-danger text-center">Data Kosong</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
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
@endsection
