<!-- Jquery JS-->
<script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('admin_assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/select2/select2.min.js') }}"></script>
<!-- <script src="{{ asset('admin_assets/js/customize.js') }}"></script> -->


<!-- Vendor JS       -->
@if (isset($config['js']))
    @foreach ($config['js'] as $key => $val)
        {!! '<script src="' . asset($val) . '"></script>' !!}
    @endforeach
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- alert custome -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 10000;
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':

                toastr.options.timeOut = 10000;
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':

                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':

                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
    toastr.options = {
        "positionClass": "toast-top-right",
            "toastClass": "custom-toast"
    };

</script>
<!-- Main JS -->
<script src="{{ asset('admin_assets/js/main.js') }}"></script>
