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
                        {{$message}}
                    <!-- Button -->
                    <a href="/" class="btn btn-lg btn-primary">
                    Return Home
                    </a>

                </div>
            @else


            <div class="text-center">

                    <!-- Subheading -->
                    <h1 class="header-title">
                        Hi {{$user->firstname}},  You requested a password change!
                    </h1>

                    @if(Session::has('error'))
                    <div class="my-4 alert alert-danger" >
                        {{Session::get('message')}}
                    </div>
                    @endif


                @if(Session::has('success'))
                    <div class="alert my-4 alert-success">
                        {{Session::get('message')}}
                    </div>
                     <!-- Button -->
                     <a href="/dashboard" class="btn btn-lg btn-primary">
                        Go To Dashboard
                        </a>
                @else
                <form class="my-4" method="post" action="/password/reset" >
                    @csrf
                            <!-- Password -->
                            <div class="form-group">

                              <!-- Label -->
                              <label>
                                New Password
                              </label>

                              <!-- Input -->
                              <input type="password" name="password" class="form-control" placeholder="new password">

                            </div>

                            <input type="hidden" name="user_id" value="{{$user->id}}" >
                            <input type="hidden" name="token" value="{{$token}}" >

                             <!-- Password -->
                             <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                      Confirm Password
                                    </label>

                                    <!-- Input -->
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="confirm new password">

                                  </div>

                             <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary mb-3" type="submit" >
                                Reset Password
                            </button>

                </form>

                @endif



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
