 @php 
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
 @endphp

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
        
         <li class="nav-item {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view') }}"class="nav-link {{($route=='users.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.add') }}"class="nav-link {{($route=='users.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{($prefix=='/students')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Student Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('students.view') }}"class="nav-link {{($route=='students.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('students.add') }}"class="nav-link {{($route=='students.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
            </ul>
          </li>
           {{-- ====Logo========== --}}
          <li class="nav-item {{($prefix=='/logos')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Logo Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logos.view') }}"class="nav-link {{($route=='logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logos List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logos.add') }}"class="nav-link {{($route=='logos.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Logo</p>
                </a>
              </li>
            </ul>
          </li>
           {{-- ====Slider========== --}}
           <li class="nav-item {{($prefix=='/sliders')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Slider Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.view') }}"class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sliders.add') }}"class="nav-link {{($route=='sliders.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
            </ul>
          </li>
                  {{-- ====Principal========== --}}
          <li class="nav-item {{($prefix=='/principals')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Principal Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('principals.view') }}"class="nav-link {{($route=='principals.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Principals List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('principals.add') }}"class="nav-link {{($route=='principals.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Principal</p>
                </a>
              </li>
            </ul>
          </li>

                  {{-- ====College History========== --}}
          <li class="nav-item {{($prefix=='/histories')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                History Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('histories.view') }}"class="nav-link {{($route=='histories.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('histories.add') }}"class="nav-link {{($route=='histories.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add History</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- ====Post========== --}}
          <li class="nav-item {{($prefix=='/posts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Post Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('posts.view') }}"class="nav-link {{($route=='posts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posts List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.add') }}"class="nav-link {{($route=='posts.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
            </ul>
          </li>
    
         
          
        </ul>
      </nav>