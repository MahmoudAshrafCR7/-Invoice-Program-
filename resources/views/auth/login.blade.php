<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Invoices Login</title>
    <link rel="shortcut icon" href="assetss/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assetss/images/fav.jpg">
    <link rel="stylesheet" href="assetss/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/css/all.min.css">
    <link rel="stylesheet" href="assetss/css/animate.css">
    <link rel="stylesheet" href="assetss/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assetss/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assetss/css/style.css" />
</head>

    <body class="form-login-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto login-desk">
                       <div class="row">
                            <div class="col-md-6 loginform">
                                <div class="log-txt row no-margin text-center">
                                    <h2  style="font-size: 20px; font-weight:800"> Invoice Program </h2>
                                    <p>An invoice program for debt collection by companies responsible for banks. </p>
                                </div>

                                 <div  class="login-det">
                                    <img style="width: 100%;margin-top:20px" src="assetss/images/Whats-an-invoice.WEBP" alt="">
                                 </div>
                            </div>
                             <div class="col-md-6 detail-box">
                                <div class="detailsh col-lg-7 col-md-10 col-sm-7 col-11 mx-auto">
                                      <img class="logo" src="assetss/images/4206443-middle.png" alt="">

                                      <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                           <div class="form-group">
                                           <label> E-Mail</label>
                                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                           </div>

                                        <div class="form-group">
                                         <label> Password</label>

                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                         @error('password')
                                         <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                         </span>
                                         @enderror
                                         <div class="form-group row">
                                             <div class="col-md-6 offset-md-4">
                                                  <div class="form-check">
                                                       <input style="position: relative;right:40px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                       <label style="position: absolute;left:10px" class="form-check-label " for="remember">
                                                              {{ __('remember') }}
                                                       </label>
                                                  </div>
                                              </div>
                                          </div>
                                         </div>
                                           <button type="submit" class="btn btn-main-primary btn-block">
                                           {{ __(' Login') }}
                                           </button>
                                       </form>


                                    </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                    </div>
                </div>
            </div>
    </body>

    <script src="assetss/js/jquery-3.2.1.min.js"></script>
    <script src="assetss/js/popper.min.js"></script>
    <script src="assetss/js/bootstrap.min.js"></script>
    <script src="assetss/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assetss/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assetss/js/script.js"></script>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assetss/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assetss/images/fav.jpg">
    <link rel="stylesheet" href="assetss/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetss/css/all.min.css">
    <link rel="stylesheet" href="assetss/css/animate.css">
    <link rel="stylesheet" href="assetss/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assetss/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assetss/css/style.css" />
</head>


    <script src="assetss/js/jquery-3.2.1.min.js"></script>
    <script src="assetss/js/popper.min.js"></script>
    <script src="assetss/js/bootstrap.min.js"></script>
    <script src="assetss/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assetss/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assetss/js/script.js"></script>
</html>
