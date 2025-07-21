<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SP Ansietas</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    @if (Auth::user()->is_admin)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-notes-medical"></i>
                <span>Penyakit</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilihan:</h6>
                    <a class="collapse-item" href="{{ route('penyakit.index') }}">Kelola</a>
                    <a class="collapse-item" href="{{ route('penyakit.create') }}">Tambah</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-list"></i>
                <span>Gejala</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilihan:</h6>
                    <a class="collapse-item" href="{{ route('gejala.index') }}">Kelola</a>
                    <a class="collapse-item" href="{{ route('gejala.create') }}">Tambah</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengetahuan"
                aria-expanded="true" aria-controls="collapsePengetahuan">
                <i class="fas fa-user-md"></i>
                <span>Pengetahuan</span>
            </a>
            <div id="collapsePengetahuan" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilihan:</h6>
                    <a class="collapse-item" href="{{ route('pengetahuan.index') }}">Kelola</a>
                    <a class="collapse-item" href="{{ route('pengetahuan.create') }}">Tambah</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePasien">
                <i class="fas fa-users"></i>
                <span>Pasien</span>
            </a>
            <div id="collapsePasien" class="collapse">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilihan:</h6>
                    <a class="collapse-item" href="{{ route('pasien.index') }}">Kelola</a>
                    <a class="collapse-item" href="{{ route('pasien.create') }}">Tambah</a>
                </div>
            </div>
        </li>
    @else
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            Konsultasi
        </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('diagnosis') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Diagnosis</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('riwayatpasien', Auth::user()->pasien->id) }}">
                <i class="fas fa-history"></i>
                <span>Riwayat</span>
            </a>
        </li>
    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
