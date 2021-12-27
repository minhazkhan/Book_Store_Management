<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 col-md-offset-4">
                <h2>Add New Book</h2><hr>
                <form action="{{ route('admin.create') }}" method="post" autocomplete="off" enctype="multipart/form-data">

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}  
                    </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" name="bookname" placeholder="Enter Book Name" >
                         <span class="text-danger">@error('bookname'){{ $message }} @enderror </span> 
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc" placeholder="Enter Book Description"> </textarea> 
                       <span class="text-danger">@error('desc'){{ $message }} @enderror 
                        </span> 
                    </div>
                    <div class="form-group">
                        <label>Author Name </label>
                        <input type="text" class="form-control" name="author" placeholder="Enter Book Author Name">
                        <span class="text-danger">@error('author'){{ $message }} @enderror </span> 
                    </div>
                    <div class="form-group">
                        <label>Total Page Number</label>
                        <input type="text" class="form-control" name="page" placeholder="Enter Total Book Page">
                         <span class="text-danger">@error('page'){{ $message }} @enderror </span>  
                    </div>
                    <div class="form-group">
                        <label>Upload Book Image</label>
                        <input type="file" class="form-control" name="image">
                        <span class="text-danger">@error('image'){{ $message }} @enderror </span> 
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Save Book Details</button>
                    <br>
                    
                    <a href="{{ route('admin.home') }}">Back to Dashboard Page</a>
                </form>
            </div>
        </div>
    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>