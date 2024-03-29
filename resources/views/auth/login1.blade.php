<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>{{env('APP_NAME')}} | Login</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->


    <!--begin::Base Styles -->
    <link href="{{asset('/')}}assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
<!--RTL version:<link href="{{asset('/')}}assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


    <link href="{{asset('/')}}assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}css/app.css" rel="stylesheet" type="text/css"/>
<!--RTL version:<link href="{{asset('/')}}assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <style>
        .m-login__container {
            background-color: #ffffff;
            border: 1px solid #dedede;
            padding: 50px 30px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .m-login.m-login--2.m-login-2--skin-2 .m-login__container .m-login__head .m-login__title {
            color: #454545
        }
    </style>
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/demo/default/media/img/logo/favicon.ico"/>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2"
         id="m_login" style="background-image: url('{{asset('/')}}assets/app/media/img//bg/bg--3.jpg')">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo" style="margin-bottom: 30px">

                    <a href="#">

                   {{--     <img width="100" src="{{asset('/')}}assets/app/media/img//logos/logo-1.png">--}}
                    </a>
                </div>

                <div class="m-login__signin">
                    <div class="m-login__head mb-4">
                        <h3 class="m-login__title">Sign in to Admin Panel</h3>
                    </div>

                    <form class=""  action="{{route('login')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group m-form__group" {{ $errors->has('email') ? 'has-error' : ''}}>

                            <input class="form-control" type="email" placeholder="Email" name="email"
                                   autocomplete="off">
                            {!! $errors->first('email', '<p class="help-block" style="color: red;">:message</p>') !!}

                        </div>
                        <div class="form-group" {{ $errors->has('password') ? 'has-error' : ''}}>
                            <input class="form-control m-login__form-input--last" type="password"
                                   placeholder="Password" name="password">
                            {!! $errors->first('password', '<p class="help-block" style="color: red;">:message</p>') !!}
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--focus">
                                    <input type="checkbox" name="remember"> Remember me
                                    <span></span>
                                </label>
                            </div>
                             <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                            </div>
                        </div>
                        <div class="m-login__form-action text-center mt-4">
                            <button id="m_login_signin_submit"
                                    type="submit" 
                                    class="btn btn-block btn-primary">
                                 Sign In 
                            </button>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->


<!--begin::Base Scripts -->
<script src="{{asset('/')}}assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->


<!--begin::Page Snippets -->
{{--<script src="{{asset('/')}}assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>--}}
<!--end::Page Snippets -->


</body>
<!-- end::Body -->
</html>