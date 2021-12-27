<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Book Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Register | User</h4><hr>
                <form action="{{ route('user.create') }}" method="post" autocomplete="off">

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}  
                    </div>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-success">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here"  value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Mail Here" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password Here">
                        <span class="text-danger">@error('password'){{ $message }} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter Your Confirm Password Here">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror </span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                    <br>
                    <a href="{{ route('user.login') }}">I already have an account, Sign in</a>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

</body>

</html>
