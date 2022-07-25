<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon  mt-1">
            <i class="material-symbols-outlined opacity-10"  >
                group
                </i>
        </div>
        <div class="sidebar-brand-text mx-2">Absensi SMKN 46</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <span class="material-symbols-outlined fs-6">
                dashboard
                </span>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <span class="material-symbols-outlined fs-6">
                account_balance
                </span>
            <span class="fs-6">Kelas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('siswa.index') }}">
            <span class="material-symbols-outlined fs-6">
                groups
                </span>

            <span class="fs-6">Siswa</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <span class="material-symbols-outlined fs-6">
                admin_panel_settings
                </span>

            <span class="fs-6">Admin</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="index.html">
            <span class="material-symbols-outlined fs-6">
                report
                </span>

            <span class="fs-6">Laporan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>

