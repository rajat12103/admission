<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
        /*@media(min-width: 768px)
        {
            .card{
                margin-bottom: 20px;
            }
        }*/
        body{
            background-image: url(images/bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
       /* .container{
            margin-top: 50px;
        }*/
    </style>


</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <div class="panel-heading" style=" font-size: 30px;">Student Registration</div>
                    </a>
                </div>
                <div class="login-form">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <div class="form-group">
                            <label>Full Name</label>
                            <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                        </div>

                            <div class="form-group">
                                <label>Email address</label>
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                    <label>Type</label>
                    <select id="type" name="type" class="form-control">
                        <option value="1">Btech BSF</option>
                        <!-- <option value="2">Btech All India</option>
                        <option value="3">MCA</option>
                        <option value="4">BCA</option -->>
                    </select>
                </div>
                 
        
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                                    <label>Confirm Password</label>
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                                <label>Mobile</label>
                               <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group has-feedback">
                            <label>Image</label>
            <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required>
            
               @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
          </div>

                                    <div class="checkbox">
                                        <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Register</button>
                                    
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p><!-- //app.blade.php se url lete h -->
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
