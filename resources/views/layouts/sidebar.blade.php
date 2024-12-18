<aside class="main-sidebar sidebar-dark-success bg-dark "> <!-- Mengganti kelas jika diperlukan -->
    <!-- Brand Logo -->
    <a class="brand-link" style="text-decoration: none;">
        <img src="{{ asset('assets/dist/img/logo stimik.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="d-none d-md-inline" style="color: white; font-weight: bold;">Prakerim UKM</span>
    </a>
<style>
    p{
        color:white;
        font-weight:bold;
    }
</style>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('foto/' . auth()->user()->profile_picture) }}" 
                     class="rounded-circle shadow me-2" 
                     alt="User Image" width="100" height="100">
                <span class="d-none d-md-inline" style="color: white; font-weight: bold;">{{ auth()->user()->name }}</span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- UKM Dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="ukmDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>UKM</p>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ukmDropdown">
                        <li><a href="{{ url('agrc') }}" class="dropdown-item {{ request()->is('agrc') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> AGRC</a></li>
                        <li><a href="{{ url('pena') }}" class="dropdown-item {{ request()->is('pena') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> PENA</a></li>
                        <li><a href="{{ url('himpunan') }}" class="dropdown-item {{ request()->is('himpunan') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> HIMPUNAN</a></li>
                        <li><a href="{{ url('poma') }}" class="dropdown-item {{ request()->is('poma') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> POMA</a></li>
                        <li><a href="{{ url('pmk') }}" class="dropdown-item {{ request()->is('pmk') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> PMK</a></li>
                        <li><a href="{{ url('ldk') }}" class="dropdown-item {{ request()->is('ldk') ? 'active' : '' }}"><i class="fas fa-user-graduate nav-icon"></i> LDK Al-gazhari</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
