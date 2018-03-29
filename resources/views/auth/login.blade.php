<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <title>Login | Chinar - Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/client/images/logo1.png') }}">

    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/bootstrap.min.css') }}">

    <!-- Propeller css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/propeller.min.css') }}">

    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/themes/css/propeller-theme.css') }}" />

    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/themes/css/propeller-admin.css') }}">

</head>

<body class="body-custom">
<div class="logincard">
    <div class="pmd-card card-default pmd-z-depth">
        <div class="login-card">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="pmd-card-title card-header-border text-center">
                    <div class="loginlogo">
                        <a href="javascript:void(0);"><img src="{{ url('/client/images/logo1.png') }}" alt="Logo"></a>
                    </div>
                    <h3>Sign In <span><strong>CHINAR</strong></span></h3>
                </div>

                <div class="pmd-card-body">
                    <div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="email" class="form-control" id="exampleInputAmount" name="email" value="{{ old('email') }}" autofocus required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                            <input type="password" class="form-control" name="password" id="exampleInputAmount" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                    <div class="form-group clearfix">
                        <div class="checkbox pull-left">
                            <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                <input type="checkbox"  name="remember" value="" {{ old('remember') ? 'checked' : '' }}>
                                <span class="pmd-checkbox"> Remember me</span>
                            </label>
                        </div>
                        <span class="pull-right forgot-password">
							<a href="{{ route('password.request') }}">Forgot password?</a>
						</span>
                    </div>
                    <button type="submit" class="btn pmd-ripple-effect btn-primary btn-block">Login</button>

                </div>

            </form>
        </div>

    </div>
</div>

<!-- Scripts Starts -->
<script src="{{ url('/admin/assets/js/jquery-1.12.2.min.js') }}"></script>
<script src="{{ url('/admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/admin/assets/js/propeller.min.js') }}"></script>
<!-- login page sections show hide -->

</body>
</html>
