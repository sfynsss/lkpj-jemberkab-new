<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <title>SIPPD Kabupaten Jember</title>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: url(../backend/img/login-bg.jpg);
            background-size: auto;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 80px;
            height: 95px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 600px;
            height: 260px;
            margin-top: 100px;
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #000;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #1572E8
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 600px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }
    </style>
  </head>
  <body>

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{ asset('backend/img/sippd-bupati.png') }}" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5 mt-4">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2 text-primary"><b>Silahkan masuk untuk melanjutkan</b></h6>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <label for="email" class="col-md-12 col-form-label">Username</label>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                                        </div>
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus placeholder="Masukkan username">
                                    </div>
                                    <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror -->
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-md-12 col-form-label">Password</label>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-unlock-alt"></i></div>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan password">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Badan Perencanaan dan Pembangundan Daerah Kabupaten Jember &copy; 2021</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>