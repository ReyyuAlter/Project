@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

<div class="content-wrapper d-flex justify-content-start align-items-center" style="min-height: 100vh;"> <!-- Mengubah justify-content-center menjadi justify-content-start -->
    <!-- Content -->
    <section class="content w-120">
        <div class="container-fluid">
            <!-- Row 1 -->
            <div class="row justify-content-start"> <!-- Menambahkan justify-content-start untuk menggeser ke kiri -->
                <!-- Komputer Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-primary shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-desktop fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">PENA</h5>
                                    <p class="card-text">Lihat Data Pena</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('pena') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- AGRC Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-success shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-robot fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">AGRC</h5>
                                    <p class="card-text">Lihat Data AGRC</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('agrc') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Himpunan Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-info shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">HIMPUNAN</h5>
                                    <p class="card-text">Lihat Data Himpunan</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('himpunan') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row justify-content-start"> <!-- Menambahkan justify-content-start untuk menggeser ke kiri -->
                <!-- Poma Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-warning shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-futbol fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">POMA</h5>
                                    <p class="card-text">Lihat Data Poma</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('poma') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- PMK Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-dark shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-book fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">PMK</h5>
                                    <p class="card-text">Lihat Data Pmk</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('pmk') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- LDK Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4"> <!-- Menyesuaikan ukuran responsif -->
                    <div class="card text-white bg-danger shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fas fa-book fa-3x"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1">LDK</h5>
                                    <p class="card-text">Lihat Data Ldk</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('ldk') }}" class="card-footer text-white text-decoration-none">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
