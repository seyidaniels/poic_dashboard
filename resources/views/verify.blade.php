<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Error Page">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/dashboard_assets/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="/dashboard_assets/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="/dashboard_assets/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="/dashboard_assets/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="/dashboard_assets/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="/dashboard_assets/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>


    <title>Email Verification Page</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="/dashboard_assets/assets/img/illustrations/lost.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

            @if ($success == false)

                <div class="text-center">

                    <!-- Subheading -->
                    <h1 class="header-title">
                        {{$error}}
                    <!-- Button -->
                    <a href="/" class="btn btn-lg btn-primary">
                    Return Home
                    </a>

                </div>
            @else


            <div class="text-center">

                    <!-- Subheading -->
                    <h1 class="header-title">
                        {{$message}}
                    </h1>

                    <!-- Button -->
                    <a href="/dashboard" class="btn btn-lg btn-primary mt-4">
                        Dashboard
                    </a>

                </div>



            @endif

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="/dashboard_assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/dashboard_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Theme JS -->
    <script src="/dashboard_assets/assets/js/theme.min.js"></script>

  </body>
</html>
