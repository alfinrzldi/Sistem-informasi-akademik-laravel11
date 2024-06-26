<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/wongkarwai.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="width:40px; height:100px">
      <span class="brand-text font-weight-light">Wong Kar Wai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('dist/img/' . $data['foto'])}}" class="img-circle elevation-2" style="width:200px; height:200px" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $data['nama'] }}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Dashboard
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ url('mahasiswa') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Data Mahasiswa
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
      
          <li class="nav-item">
            <a href="{{ url('prodi') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Data Prodi
              </p>
            </a>
          </li>
         
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>