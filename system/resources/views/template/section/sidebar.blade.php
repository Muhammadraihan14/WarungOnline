<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src=" {{ url('public') }}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" 
      style="opacity: .8">
      <span class="brand-text font-weight-light">WarungOnline</span>
    </a>

    @php

function checkRouteActive($route){
  if (Route::current()->uri == $route) return 'active';
}    

    @endphp 
  
    <!-- Sidebar -->
    <div class="sidebar">
      
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

               <li class="nav-item">
                <a href="{{ url ('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Beranda
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url ('admin/produk')}}" class="nav-link nav-link {{checkRouteActive('admin/produk')}}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Produk
                   
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url ('katagori')}}" class="nav-link nav-link nav-link {{checkRouteActive('katagori')}}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Katagori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/user')}}" class="nav-link nav-link nav-link {{checkRouteActive('admin/user')}} ">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                   User
                  </p>
                </a>
              </li>
          <li class="nav-item menu-open">
            <a href="{{ url ('beranda')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url ('beranda')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suplayer</p>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>