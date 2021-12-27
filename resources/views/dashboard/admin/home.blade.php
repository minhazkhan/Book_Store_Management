<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Book Store Owner</title>
  
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">


</head>

<body>

    <div class="container">

        <div class="row" >

            <div class="col-md-8 col-md-offset-2" style="margin-top: 45px">

                <h3>Welcome | {{ Auth::guard('admin')->user()->name }}
                <td>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
                    </td>
                </h3><hr>

                <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="btn btn-outline-success"  href="{{ route('admin.addbook') }}">Add Books</a>
                      </li>
                      
                    </ul>
                

                <h2>Books Lists</h2><hr>
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th scope="col">Book Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Book Author Name</th>
                      <th scope="col">Book Total Page</th>
                      <th scope="col">Action</th>
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
