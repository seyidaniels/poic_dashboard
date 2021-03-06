<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Professor Ogundipe Innovative Challenge</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- Libs CSS -->
    <link rel="stylesheet" href="dashboard_assets/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/select2/dist/css/select2.min.css">

    <link rel="stylesheet" href="dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme-dark.min.css" id="stylesheetDark">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.1/image-picker.css" />




    <style>
        [v-cloak] {
            display: none;
        }
    </style>

    <style>
        body {
            display: none;
        }
    </style>


</head>

<body>

    <div id="app" v-cloak></div>



    <!-- Libs JS -->
    <script src="dashboard_assets/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="dashboard_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard_assets/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="dashboard_assets/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="dashboard_assets/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="dashboard_assets/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="dashboard_assets/assets/libs/list.js/dist/list.min.js"></script>
    <script src="dashboard_assets/assets/libs/quill/dist/quill.min.js"></script>
    <script src="dashboard_assets/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="dashboard_assets/assets/libs/select2/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.1/image-picker.min.js"></script>

    <!-- Theme JS -->
    <script src="dashboard_assets/assets/js/theme.min.js"></script>

    <script src="/js/app.js?version={{ date('yhmis') }}'"></script>







</body>

</html>
