@php

function checkrouteactive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="logo-normal pt-3 pl-4 pb-1">
        <a href="index.html"><img src="{{url('public')}}/client/images/logo.png" alt=""></a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle elevation-2" alt="User Image" src="{{url('public')}}/dist/img/user1-128x128.jpg">
        </div>
        <div class="info">
          <a href="{{url('beranda')}}" class="d-block font-weight-bold">
            @if(Auth::check())
              {{request()->user()->nama}}
            @elseif(Auth::guard('pembeli')->check())
              {{Auth::guard('pembeli')->user()->nama}}
              <br>Customer
            @elseif(Auth::guard('penjual')->check())
              {{Auth::guard('penjual')->user()->nama}}
              <br>Supplier
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('admin/beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('admin/produk')}}">
              <i class="fab fa-shopify"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/kategori')}}" class="nav-link {{checkRouteActive('admin/kategori')}}">
              <i class="fas fa-list-ul"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>