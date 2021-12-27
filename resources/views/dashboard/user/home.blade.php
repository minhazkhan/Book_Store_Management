<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Book Store</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2" style="margin-top: 45px">
                <h3>Welcome | {{ Auth::user()->name }}
                <td>
                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                        </td></h3><hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                    <tr>
                      
                      <th scope="col">Book Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Book Author Name</th>
                      <th scope="col">Book Total Page</th>
                      <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                        
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    

</body>

</html>
