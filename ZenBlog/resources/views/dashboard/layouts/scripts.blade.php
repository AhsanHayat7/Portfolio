 <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('dashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('dashboard/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('dashboard/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/misc.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/settings.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('dashboard/assets/js/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-full-width", // Ensure this class is defined in your CSS
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
        @if(session('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
