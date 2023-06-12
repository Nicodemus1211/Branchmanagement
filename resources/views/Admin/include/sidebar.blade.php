<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('Beranda')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">PEGADAIAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider" />
    <li class="nav-item active">
        <a class="nav-link" href="daftarkantor">
          <i class="fas fa-fw fab fa-building"></i>
          <span>Kantor</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="daftarproduct">
            <i class="fas fa-fw fab fa-shopping-cart"></i>
            <span>Produk</span></a>
        </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{url('daftarproduct')}}" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-folder"></i>
        <span>Produk</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <h6 class="collapse-header">Best Product :</h6>
          <a class="collapse-item" href="">Gadai Emas</a>
          <a class="collapse-item" href="">Gadai non Emas</a>
          <a class="collapse-item" href="">Gadai Kendaraan</a>
          <a class="collapse-item" href="">Tabungan Emas</a>
        </div>
      </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider" />

        <!-- Nav Item - Tables -->
        <li class="nav-item">
{{-- <<<<<<< HEAD --}}
          <a class="nav-link" href="{{route('tableadmin')}}">
{{-- ======= --}}

{{-- >>>>>>> a5fc8261a949260b033c01e86f711a0465cfdbc3 --}}
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a
          >
        </li>

   <hr class="sidebar-divider" />
    <!-- Nav Item - logout -->
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw "></i>
        <span>Logout</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
{{--
<<<<<<< HEAD

{{-- ======= --}}

{{-- >>>>>>> a5fc8261a949260b033c01e86f711a0465cfdbc3 --}}
  </ul>
  <!-- End of Sidebar -->
