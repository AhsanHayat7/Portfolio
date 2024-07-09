<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('frontend.layouts.styles')

</head>

<body>

    @include('frontend.layouts.header')

    @include('frontend.Zenblog.navigations')
    @yield('main-container')


    @include('frontend.layouts.footer')
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.layouts.scripts')
    @yield('scripts')

</body>

</html>

