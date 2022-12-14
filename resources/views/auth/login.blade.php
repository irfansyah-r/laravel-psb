<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB MTs. NU Berbek 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="{{ asset('dist/css/simple-sidebar.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('dist/css/all.min.css') }}" rel="stylesheet">

</head>
<body style="background-color: #f5f5f5">
    <div class="d-flex align-items-center flex-column" style="margin-top: 20px;">
        <div class="p-2"><br><br>
            <img src="img/logo1.png"><br><br><br>
            <!-- <img src="img/LOGO.jpg" style="width: 180px;height: 220px;"> -->
        </div>
        <div class="p-2">
            <div class="card" align="center" style="background-color: #ededed;">
                <div class="card-body">
                    <h2 style="border-bottom: 2px groove white">PPDB<br> MTs. NU Berbek Sidoarjo</h2><br>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group">
                            <input name="email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input name="password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>