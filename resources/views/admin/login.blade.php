<!doctype html>
<html lang="en">

<!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 10:18:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="dashboard_assets/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>


    <title>Administrator</title>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Admin
          </h1>


          <!-- Form -->
          <form  method="POST" action="{{ route('login') }}">
              @csrf

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="email"  placeholder="name@address.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

               @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label>Password</label>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password">

                 @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
              Sign in
            </button>


          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
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

    <!-- Theme JS -->
    <script src="dashboard_assets/assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 10:18:04 GMT -->
</html>
