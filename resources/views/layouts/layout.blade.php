<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="admin/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="/admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/admin/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              
              <span class="app-brand-text demo menu-text fw-bold ms-2">Teerka.com</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="{{ route('redirect') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                
              </a>
           
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Authentication</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('login') }}" class="menu-link">
                    <div data-i18n="Basic Inputs">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('register') }}" class="menu-link">
                    <div data-i18n="Input groups"> Register </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.add_product') }}" class="menu-link">
                    <div data-i18n="Input groups"> Forgot Password </div>
                  </a>
                </li>
              </ul>
            </li>
         
        
            <!-- Cards -->
            <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
              </a>
            </li>
           
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Product</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.add_product') }}" class="menu-link">
                    <div data-i18n="Basic Inputs">Add Product</div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="{{ route('admin.show_product') }}" class="menu-link">
                    <div data-i18n="Input groups">All Products </div>
                  </a>
                </li>
               
              </ul>
            </li>
           
            <!-- Form Validation -->
            
            <!-- Tables -->
            <li class="menu-item">
              <a href="{{ route('category') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Category</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('admin.all_bookings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">All Reservation</div>
              </a>
            </li>
            <!-- Data Tables -->
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <form action="{{ route('admin.searchInfoTest') }}" method="get">
                    @csrf
                    <div class="input-group">
                        <input
                            type="text"
                            name="admin_search"
                            class="form-control border-0 shadow-none ps-1 ps-sm-2 " style="width:400px"
                            placeholder="Search..."
                            aria-label="Search..." />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                        @csrf
                      
                        <i class="bx bx-power-off me-2"></i>
                        <button type="submit" class="align-middle">Log Out</button>
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


                @yield('content')



                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                      <div class="mb-2 mb-md-0">
                        ©
                        <script>
                          document.write(new Date().getFullYear());
                        </script>
                        teerka.com
                        
                      </div>
                     
                    </div>
                  </footer>
                  <!-- / Footer -->
      
                  <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>
      
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
          </div>
          <!-- / Layout wrapper -->
      
          
      
          <!-- Core JS -->
          <!-- build:js assets/vendor/js/core.js -->
      
          <script src="/admin/assets/vendor/libs/jquery/jquery.js"></script>
          <script src="/admin/assets/vendor/libs/popper/popper.js"></script>
          <script src="/admin/assets/vendor/js/bootstrap.js"></script>
          <script src="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
          <script src="/admin/assets/vendor/js/menu.js"></script>
      
          <!-- endbuild -->
      
          <!-- Vendors JS -->
          <script src="/admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>
      
          <!-- Main JS -->
          <script src="/admin/assets/js/main.js"></script>
      
          <!-- Page JS -->
          <script src="/admin/assets/js/dashboards-analytics.js"></script>
      
          <!-- Place this tag in your head or just before your close body tag. -->
          
        </body>
      </html>
      