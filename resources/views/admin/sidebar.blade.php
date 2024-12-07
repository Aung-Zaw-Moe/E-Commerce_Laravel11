 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admincss/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">AungZawMoe</a>
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

          <li class="nav-header text-warning">EXAMPLES</li>
          <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link">
              <i class="nav-icon far fa-solid fa-layer-group text-primary"></i>
              <p>
              Admin Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('view_order') }}" class="nav-link">
              <i class="nav-icon far fa-solid fa-layer-group text-primary"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('view_category') }}" class="nav-link">
              <i class="nav-icon far fa-solid fa-layer-group text-primary"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book text-primary"></i>
              <p>
                Product
                <i class="fas fa-angle-left right text-primary"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('add_product') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('view_product') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Project Detail</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-header text-warning">CONTACTS</li>
            <li class="nav-item">
            <a href="{{ url('/admin/contacts') }}" class="nav-link">
              <i class="nav-icon far fa-solid fa-layer-group text-primary"></i>
              <p>
                Contact Info -<br>
                <i class="nav-icon far"></i>
                "Customer Remark"
              </p>
            </a>
          </li>



          {{-- <li class="nav-header">Note</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
