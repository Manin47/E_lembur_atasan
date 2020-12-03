<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="{{ asset('GambarTaro/tps_food.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('GambarTaro/taro.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#"  class="d-block">{{ auth()->user()->name }}, {{ auth()->user()->level}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-bars"></i>
              <p>
               Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ url('beranda') }}" class="nav-link">
                <i class="fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>

              @if (auth()->user()->level == "user")
              <!-- <li class="nav-item">
                <a href="{{ url('beranda') }}" class="nav-link">
                <i class="fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{ route('input-pilih-department') }}" class="nav-link">
                  <i class="fas fa-university"></i>
                       <p> Input Data Lembur Pilih Department </p>
                </a>
              </li> -->

              <li class="nav-item">
                <a href="{{ route('input-data-lembur') }}" class="nav-link">
                <i class="fas fa-keyboard"></i>
                  <p>Input Data Lembur </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('status') }}" class="nav-link">
                  <i class="fas fa-tasks"></i>
                  <p> Status </p>
                </a>
              </li>
              @endif


              @if (auth()->user()->level == "admin")
              <li class="nav-item">
                <a href="{{ route('halaman-dua') }}" class="nav-link">
                <i class="fas fa-list"></i>
                  <p>Data Karyawan</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ route('halaman-tiga') }}" class="nav-link">
                <i class="fas fa-images"></i>
                  <p>Data Iklan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('halaman-empat') }}" class="nav-link">
                <i class="fas fa-user-circle"></i>
                  <p>Informasi Akun </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                      <p>===================</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('input-data-lembur') }}" class="nav-link">
                <i class="fas fa-keyboard"></i>
                  <p>Input Data Lembur </p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="{{ route('input-pilih-department') }}" class="nav-link">
                  <i class="fas fa-university"></i>
                       <p> Input Data Lembur Pilih Department </p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-e') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                       <p> Data Lembur E Unit Procurement </p>
                </a>
              </li> -->


              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-supplay-e') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  E Supplay Chain </p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                      <p>===================</p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-hr-gal-a') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  A HR & GAL </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-hr-gal-b') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  B HR & GAL </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-hr-gal-c') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  C HR & GAL </p>
                </a>
              </li>
              

              <li class="nav-item">
                <a href="{{ route('data-lembur-hr-gal-d') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  D HR & GAL </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-hr-gal-e') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  E HR & GAL </p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                  
                      <p>================= </p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-quality-assurance-a') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  A Quality Assurance </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-quality-assurance-b') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  B Quality Assurance </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-quality-assurance-c') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  C Quality Assurance </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('data-lembur-quality-assurance-d') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur  D Quality Assurance </p>
                </a>
              </li> -->


              @endif

            
              @if (auth()->user()->level == "spv_produksi_g1")
              <li class="nav-item">
                <a href="{{ route('data-lembur-a') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                      <p> Data Lembur   atasan</p>
                </a>
              </li>
              
              @endif

              @if (auth()->user()->level == "spv_produksi_g2")
             

              <li class="nav-item">
                <a href="{{ route('data-lembur-b') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                     <p> Data Lembur  atasan </p>
                </a>
              </li>
              @endif

              @if (auth()->user()->level == "spv_produksi_g3")
              <li class="nav-item">
                <a href="{{ route('data-lembur-c') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                       <p> Data Lembur  atasan   </p>
                </a>
              </li>
             @endif

             @if (auth()->user()->level == "spv_maintenance")
             <li class="nav-item">
                <a href="{{ route('data-lembur-d') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                       <p> Data Lembur atasan </p>
                </a>
              </li>
             @endif

             @if (auth()->user()->level == "spv_logistic")
             <li class="nav-item">
                <a href="{{ route('data-lembur-e') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                       <p> Data Lembur  atasan  </p>
                </a>
              </li>
              @endif
              
             @if (auth()->user()->level == "spv_qc_inline")
             <li class="nav-item">
                <a href="{{ route('data-lembur-f') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                       <p> Data Lembur  atasan  </p>
                </a>
              </li>
             @endif

             @if (auth()->user()->level == "spv_qc_analist")
             <li class="nav-item">
                <a href="{{ route('data-lembur-g') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                       <p> Data Lembur  atasan  </p>
                </a>
              </li>
             @endif

             
             @if (auth()->user()->level == "spv_gal")
             <li class="nav-item">
                <a href="{{ route('data-lembur-h') }}" class="nav-link">
                   <i class="fas fa-database"></i>
                       <p> Data Lembur  atasan  </p>
                </a>
              </li>
             @endif


              
              @if (auth()->user()->level == "Plant Manager Unit Procurement")
              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-c') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                       <p> Data Lembur C Unit Procurement  </p>
                </a>
              </li> -->

              @endif

              @if (auth()->user()->level == "HRD Unit Procurement")
              <!-- <li class="nav-item">
                <a href="{{ route('data-lembur-d') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                       <p> Data Lembur D Unit Procurement </p>
                </a>
              </li> -->
              @endif

             

              @if (auth()->user()->level == "Supervisor Supplay Chain")
                <li class="nav-item">
                  <a href="{{ route('data-lembur-supplay-a') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                        <p> Data Lembur  A Supplay Chain </p>
                  </a>
                </li>
              @endif

              @if (auth()->user()->level == "Manager Supplay Chain")
                <li class="nav-item">
                  <a href="{{ route('data-lembur-supplay-b') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                        <p> Data Lembur  B Supplay Chain </p>
                  </a>
                </li>
              @endif

              @if (auth()->user()->level == "Plant Manager Supplay Chain")
                  <li class="nav-item">
                    <a href="{{ route('data-lembur-supplay-c') }}" class="nav-link">
                      <i class="fas fa-database"></i>
                          <p> Data Lembur  C Supplay Chain </p>
                    </a>
                  </li>
              @endif

              @if (auth()->user()->level == "HRD Supplay Chain")
                <li class="nav-item">
                  <a href="{{ route('data-lembur-supplay-d') }}" class="nav-link">
                    <i class="fas fa-database"></i>
                        <p> Data Lembur  D Supplay Chain </p>
                  </a>
                </li>
              @endif

              
             

              @if (auth()->user()->level == "hrd")

              @endif

            </ul>
                </li>
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                    <p>
                    Logout
                      
                    </p>
                  </a>
                </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
      

      
      </div>
    <!-- /.sidebar -->
  </aside>