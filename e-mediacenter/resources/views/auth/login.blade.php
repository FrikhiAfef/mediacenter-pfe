<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="{{asset('templconnexion/css/style.css')}}">
</head>

<body>

<div class="login">
    <header class="header">
        <span class="text">Connexion</span>
        <span class="loader"></span>
    </header>
    <form class="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <div class="col-md-6">
                <input id="username" name="email" required="required"  class="input" type="email", placeholder="E-Mail"  value="{{ old('email') }}"equired autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <div class="col-md-6">

                <input id="password" name="password" required="required" class="input" type="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <br>

        <p class="keeplogin">
            <input type="checkbox" name="remember" id="loginkeeping" value="loginkeeping" {{ old('remember') ? 'checked' : '' }} />
            <label for="loginkeeping">Rester connecté
            </label>
        </p>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button class="btn" type="submit"></button>
            </div>
        </div>
    </form>
</div>
<button c type= "reset">
</button>
<script src=http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="{{asset('templconnexion/js/index.js')}}"></script>

</body>

</html>
