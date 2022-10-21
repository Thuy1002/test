<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
  
</head>
<body class="hold-transition login-page">
{{-- @if(Auth::user())
    <script>window.location.href='/';</script>
@endif --}}
<style>
    *{
        width: 340px;
    margin: auto;
}
    
    ::selection {
        background-color: #b5e2e7;
    }

    ::-moz-selection {
        background-color: #8ac7d8;
    }

    body {
        background: #3CC;
    }

    .container {
        display: -webkit-flex;
        display: flex;
        height: 100%;
    }

    #logbox {
        padding: 10px;
        margin: 50px auto;
        width: 340px;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    }

    h1 {
        text-align: center;
        font-size: 175%;
        color: #757575;
        font-weight: 300;
    }

    h1,
    input {
        font-family: "Open Sans", Helvetica, sans-serif;
    }

    .input {
        width: 75%;
        height: 50px;
        display: block;
        margin: 0 auto 15px;
        padding: 0 15px;
        border: none;
        border-bottom: 2px solid #ebebeb;
    }

    .input:focus {
        outline: none;
        border-bottom-color: #3CC !important;
    }

    .input:hover {
        border-bottom-color: #dcdcdc;
    }

    .input:invalid {
        box-shadow: none;
    }

    .pass:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px white inset;
    }

    .inputButton {
        position: relative;
        width: 85%;
        height: 50px;
        display: block;
        margin: 30px auto 30px;
        color: white;
        background-color: #3CC;
        border: none;
        -webkit-box-shadow: 0 5px 0 #2CADAD;
        -moz-box-shadow: 0 5px 0 #2CADAD;
        box-shadow: 0 5px 0 #2CADAD;
    }

    .inputButton:hover {
        top: 2px;
        -webkit-box-shadow: 0 3px 0 #2CADAD;
        -moz-box-shadow: 0 3px 0 #2CADAD;
        box-shadow: 0 3px 0 #2CADAD;
    }

    .inputButton:active {
        top: 5px;
        box-shadow: none;
    }

    .inputButton:focus {
        outline: none;
    }
</style>
<div class="login-box">
    <div class="login-logo">
        <a href="/" style="text-transform: uppercase;font-size: 30px;color:#fff;"><b>Đăng nhập</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form action="{{ url('/login') }}" method="post">
            <div class="form-group has-feedback">
                <input style="padding-left: 10px;" type="text" name="email" class="form-control" placeholder="Username or Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input style="padding-left: 10px;" type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
            {{--<div class="col-xs-8">--}}
            {{--<div class="checkbox icheck">--}}
            {{--<label>--}}
            {{--<input type="checkbox" name="chk_remmember"> <span>Remember Me</span>--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!-- /.col -->
                <div class="col-xs-12">
                    <button style="   margin-left: 15px;" type="submit" class="btn btn-block btn-flat  btn-login">Sign In</button>
                </div>
                <div class="text-center">
                    Bạn chưa có tài khoản? <a style="font-weight: 900;" href="/signup" id="signup_id">Đăng Ký</a>
                </div>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <!-- /.col -->
            </div>
        </form>
        <p class="text-danger text-center login-box-msg">Vui lòng đăng nhập để tiếp tục!
        <?php //Hiển thị thông báo thành công?>
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <?php //Hiển thị thông báo lỗi?>
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('default/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('default/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('default/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{ asset('default/dist/js/spx.js')}}?v=1"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
