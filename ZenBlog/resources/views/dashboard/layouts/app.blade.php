<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Blog Management Dashboard</title>

  @include('dashboard.layouts.styles')
</head>
<body>
  <div class="container-scroller">
    @include('dashboard.layouts.sidebar')
    <div class="container-fluid page-body-wrapper">
      @include('dashboard.layouts.navbar')

      @yield('main-container')
    </div>
    @include('dashboard.layouts.footer')
  </div>

  @include('frontend.layouts.scripts')
  @yield('scripts')
</body>
</html>
