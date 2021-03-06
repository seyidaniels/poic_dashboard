<!doctype html>
<html lang="en">

    @include('includes.admin.header')


  <body>

    @include('includes.admin.navbar')



    @yield('extra-css')


    @yield('content')


    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
   <script src="/dashboard_assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/dashboard_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard_assets/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/dashboard_assets/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="/dashboard_assets/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="/dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/dashboard_assets/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="/dashboard_assets/assets/libs/list.js/dist/list.min.js"></script>
    <script src="/dashboard_assets/assets/libs/quill/dist/quill.min.js"></script>
    <script src="/dashboard_assets/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    {{-- <script src="/dashboard_assets/assets/libs/select2/dist/js/select2.min.js"></script> --}}

    <!-- Theme JS -->
    <script src="/dashboard_assets/assets/js/theme.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.8/vue.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://unpkg.com/vue-select@latest"></script>



    @yield('extra-js')

  </body>

<!-- Mirrored from dashkit.goodthemes.co/components.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 10:22:31 GMT -->
</html>
