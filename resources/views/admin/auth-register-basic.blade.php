<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Teerka.com</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/admin/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="/admin/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ route('home.index') }}" class="app-brand-link gap-2">
                  
                  <span class="app-brand-text demo text-body fw-bold">Teerka.com</span>
                </a>
              </div>
              <!-- /Logo -->
              
              <p class="mb-4">Register to get started</p>

              <form id="formAuthentication" class="mb-3"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your name" value="{{ old('name') }}"
                    autofocus />

                    @if($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
               
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your Email" value="{{ old('email') }}"
                    autofocus />

                    @if($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="Enter your Phone Number" value="{{ old('phone') }}"
                    autofocus />

                    @if($errors->has('phone'))
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="address"
                    placeholder="Enter your Address" value="{{ old('address') }}"
                    autofocus />

                    @if($errors->has('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />

                     
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                   
                </div>
                @if($errors->has('password'))
                      <p class="text-danger">{{ $errors->first('password') }}</p>
                  @endif
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>

                    @error('terms')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <input type="submit" class="btn btn-primary d-grid w-100" value="Sign up">
                
              </form>

              
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

   

    <script src="/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/admin/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/admin/assets/js/main.js"></script>

    <!-- Page JS -->

   
  </body>
</html>
