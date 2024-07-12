<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('frontend/assets/img/android-chrome-192x192.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Direktori UMKM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('frontend/assets/img/chefs/bill gates.jpeg')}}" class="img-rounded elevation-2 mt-3" alt="User Image" >
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Dwi Febriyanti</a> -->
          @auth
           @if (Auth::check())
           <div class="info">
            <a class="d-block" href="{{ route('profile.edit') }}">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
            <span class="text-primary">Role: {{ Auth::user()->role }}</span>
           </div>
           @endif
           @endauth
           @guest
           <a href="#" class="d-block">Guest</a>
           @endguest

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
          @auth
          <li class="nav-item">
          
              <a href="{{ url('halaman_utama') }}" class="nav-link">
              <i class="fa-solid fa-house"></i>
                  <p>
                      Halaman Dashboard
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('profil') }}" class="nav-link">
              <i class="fa-regular fa-address-card"></i>
                  <p>
                      Profile
                  </p>
              </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role=='administrator')
              <a href="{{ url('umkm/show') }}" class="nav-link">
              <i class="fa-solid fa-gift"></i>
                  <p>
                      UMKM
                  </p>
              </a>
          </li>
          @endif
          <li class="nav-item">
              <a href="{{ url('pembina/show') }}" class="nav-link">
              <i class="fa-regular fa-comments"></i>
                  <p>
                      Pembina
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('kabkota/show') }}" class="nav-link">
              <i class="fa-regular fa-paper-plane"></i>
                  <p>
                      KabKota
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('provinsi/show') }}" class="nav-link">
              <i class="fa-solid fa-users"></i>
                  <p>
                      Provinsi
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('kategori_umkm/show') }}" class="nav-link">
              <i class="fa-solid fa-users"></i>
                  <p>
                      Kategori UMKM
                  </p>
              </a>
          </li>
          
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa-solid fa-right-from-bracket"></i>
                  <p> Logout </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
          </li>
          
          @endauth
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>