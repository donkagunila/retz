<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
 <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
          <img src=" {{ asset('assets/img/logo/logo.png') }}" class="navbar-brand-img mx-auto" alt="...">
          
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
              <a href="profile-posts.html" class="dropdown-item">Profile</a>
              <a href="account-general.html" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="sign-in.html" class="dropdown-item">Logout</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
              <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="fe fe-search"></span>
                </div>
              </div>
            </div>
          </form>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('*/home') ? 'active' : ''}}"
                 href="{{ route('admin.home') }}" >
                <i class="fe fe-home"></i> Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('*/categories*') ? 'active' : ''}}"
                 href="{{ route('admin.category.index') }}" >
                <i class="fe fe-life-buoy"></i> Categories
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::is('*/products*') ? 'active' : ''}}" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                <i class="fe fe-file"></i> Products
              </a>
              <div class="collapse " id="sidebarPages">
                <ul class="nav nav-sm flex-column">


                  <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}" class="nav-link ">
                      All Products
                    </a>
                  </li>

                  <li class="nav-item {{ Request::is('*/product*') ? 'active' : ''}}">
                    <a href="{{ route('admin.product.create') }}" class="nav-link ">
                      Create Product
                    </a>
                  </li>

                </ul>
              </div>
            </li>


          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Heading -->
          <h6 class="navbar-heading">
            Reports
          </h6>



          <!-- Push content down -->
          <div class="mt-auto"></div>


          <!-- Customize -->
          <div >
            <a href="{{ route('index') }}"
               target="blank"
               class="btn btn-block btn-primary mb-4">
              <i class="fe fe-sliders mr-2"></i> View Site
            </a>
          </div>

            <!-- User (md) -->
         





        </div> <!-- / .navbar-collapse -->

      </div>
</nav>

