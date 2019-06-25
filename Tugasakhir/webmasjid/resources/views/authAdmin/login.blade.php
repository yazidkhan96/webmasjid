<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Ummat</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/import.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/material-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.css')}}">
<style type="text/css">
body{
    background: #f2f2f2;
}
</style>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>
    <div class="form-login-app">
        <div class="text-center mb-5">
            <img src="{{asset('img/masjid.jpg')}}" style="max-height: 110px">
            <div class="font-34 text-bold color-app">Masjid Ummat</div>
        </div>
        <form class="form-horizontal" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}

            <div class="m-0 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="mb-5">
                    <input id="email" type="email" class="form-control form-login" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="m-0 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="">
                    <input id="password" type="password" class="form-control form-login" name="password" required placeholder="Password">

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-app col-12 p-3">
                    Login
                </button>
                <!-- <div class="text-center mt-3">
                    <a href="{{url('/register')}}">Belum punya akun ?</a>
                </div> -->
            </div>
        </form>       
    </div>
</body>
</html>