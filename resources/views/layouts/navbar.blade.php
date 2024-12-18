<!-- Tambahkan pada bagian <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <!-- Tombol Toggle untuk Sidebar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left Navbar Links -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-home me-2"></i>Home</a>
                </li>
             
            </ul>

          

                <!-- User Dropdown -->
               
                    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="userMenu" data-bs-toggle="dropdown">
                        <img src="{{ asset('foto/' . auth()->user()->profile_picture) }}" 
                             class="rounded-circle shadow me-2" 
                             alt="User Image" width="40" height="40">
                        <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="userMenu">
                        <li class="text-center dropdown-item-text">
                        <img src="{{ asset('foto/' . auth()->user()->profile_picture) }}" class="rounded-circle shadow me-2" 
                        alt="User Image" width="100" height="100">
                        <br>
                            <strong>{{ auth()->user()->name }}</strong>
                            <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                                @csrf
                                <button type="submit" class="btn btn-link text-danger w-100 text-start">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
