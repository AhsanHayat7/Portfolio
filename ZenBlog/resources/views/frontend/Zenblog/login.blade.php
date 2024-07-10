<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

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
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              @if($errors->has('error'))
                  <div class="alert alert-danger">
                      {{ $errors->first('error') }}
                  </div>
              @endif
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" name="email" class="form-control p_input">
                  @if($errors->has('email'))
                      <p class="text-danger">{{ $errors->first('email') }}</p>
                  @endif
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password" class="form-control p_input">
                  @if($errors->has('password'))
                      <p class="text-danger">{{ $errors->first('password') }}</p>
                  @endif
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
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mt-3 social">
                  <button class="btn btn-facebook mr-2">
                    <i class="mdi mdi-facebook"></i> Facebook
                  </button>
                  <a href="{{ route('google.auth') }}" class="btn btn-google">
                    <i class="mdi mdi-google-plus"></i> Sign in with Google
                  </a>
                </div>
                <p class="signup text-center">Don't have an account? <a href="#">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
