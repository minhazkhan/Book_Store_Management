<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-8 col-md-offset-2">
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
                    @foreach($addbooks as $addbook)
                    <tr>
                      <th scope="row"></th>
                      <td>{{ $addbook['bookname']}}</td>
                      <td>{{ $addbook['desc']}}</td>
                      <td>{{ $addbook['author']}}</td>
                      <td>{{ $addbook['page']}}</td>
                      <!-- <td><a href="crud_delete/{{$abc->id}}" class="btn btn-primary">Delete</a>
                        <a href="crud_edit/{{$abc->id}}" class="btn btn-danger">Edit</a> -->
                    </tr>    
                    @endforeach              
                  </tbody>
                </table>
                   <a href="{{ route('admin.home') }}">Back to Dashboard Page</a>
            </div>
        </div>
    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>