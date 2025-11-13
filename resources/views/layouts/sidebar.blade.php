<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">D'Sewa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Data
    </div>

    <!-- Data Menu (Collapsible) -->
    @php
    $isActiveData = Request::is('user*') || Request::is('renters*') || Request::is('property*');
    @endphp

    <li class="nav-item {{ $isActiveData ? 'active' : '' }}">
        <a class="nav-link {{ $isActiveData ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseData"
            aria-expanded="{{ $isActiveData ? 'true' : 'false' }}" aria-controls="collapseData">
            <i class="fas fa-folder-open"></i>
            <span>Data</span>
        </a>
        <div id="collapseData" class="collapse {{ $isActiveData ? 'show' : '' }}" aria-labelledby="headingData" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Data:</h6>
                <a class="collapse-item {{ Request::is('user') ? 'active' : '' }}" href="{{ route('user') }}">Data Tenant</a>
                <a class="collapse-item {{ Request::is('property') ? 'active' : '' }}" href="{{ route('property') }}">Data Property</a>
                <a class="collapse-item {{ Request::is('renters') ? 'active' : '' }}" href="{{ route('renters') }}">Data Renters</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Transaksi -->
    <li class="nav-item {{ Request::is('transaksi*') ? 'active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-money-bill-wave"></i>
            <span>Transaksi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Laporan
    </div>

    <!-- Laporan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
            aria-expanded="true" aria-controls="collapseReport">
            <i class="fas fa-chart-line"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseReport" class="collapse" aria-labelledby="headingReport" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Laporan:</h6>
                <a class="collapse-item" href="#">Laporan Transaksi</a>
                <a class="collapse-item" href="#">Laporan Property</a>
            </div>
        </div>
    </li>

    <!-- Pengaturan -->
    <li class="nav-item {{ Request::is('settings') ? 'active' : '' }}">
        <a class="nav-link" href="#">
            <i class="fas fa-cogs"></i>
            <span>Seting</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
