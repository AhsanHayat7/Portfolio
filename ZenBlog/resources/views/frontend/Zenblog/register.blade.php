<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('dashboard/assets/images/favicon.png') }}" type="image/x-icon">

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
  <!-- End plugin css for this page -->

  <!-- End of head -->
</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <!-- Include your scripts here -->
        <!-- plugins:js -->
        <script src="{{ asset('dashboard/assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('dashboard/assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('dashboard/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/misc.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/settings.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('dashboard/assets/js/dashboard.js') }}"></script>

        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="name" class="form-control p_input">
                  @if($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control p_input">
                  @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input">
                  @if($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me
                    </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
                <div class="d-flex justify-content-center mt-3 social">
                  <button class="btn btn-facebook mr-2">
                    <i class="mdi mdi-facebook"></i> Facebook
                  </button>
                  <button class="btn btn-google">
                    <i class="mdi mdi-google-plus"></i> Google plus
                  </button>
                </div>
                <p class="signup text-center">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
                <p class="terms">By creating an account you are accepting our <a href="#">Terms & Conditions</a></p>
              </form>
            </div>
          </div>
        </div><!-- content-wrapper ends -->
      </div><!-- row ends -->
    </div><!-- page-body-wrapper ends -->
  </div><!-- container-scroller -->

</body>

</html>
