<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> ELGAZALA MEDIA CENTER </title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('TempLogin/login.css')}}">
    <script src="{{asset('TempLogin/login.js')}}"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body class="main">
<div class="login-screen"></div>
<div class="login-center">
    <div class="container min-height" style="margin-top: 70px;">
        <div class="row">
            <div class="col-xs-4 col-md-offset-8">
                <div class="login" id="card">
                    <div class="front signin_form">
                        <h1>Admin EMC</h1>
                        <p>Connectez-vous votre compte</p>
                        <form action="{{ route('admin.login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Taper votre email" @if($errors->get('email')) has-error @endif>
                                    @if($errors->get('email'))
                                        @foreach($errors->get('email') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="Taper votre mot de passe" @if($errors->get('password')) has-error @endif>
                                    @if($errors->get('password'))
                                        @foreach($errors->get('password') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">
                                    Se souvenir de moi la prochaine fois.</label>
                            </div>

                            <div class="form-group sign-btn">
                                <input type="submit" class="btn" value="Connexion">
                                <p><a href="#" class="forgot">
                                        Impossible d'accéder à votre compte?</a></p>

                            </div>
                        </form>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>

</body>
</html>