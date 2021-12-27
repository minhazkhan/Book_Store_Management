<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Enact ON</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

    </head>
    <body class="antialiased">
        <a href="crud_create">Add Record</a><br/><br/>
        {{session('msg')}}
        
            <table>
                <tr>
                    <td>Id</td>
                    <td>Book Name</td>
                    <td>Book Description</td>
                    <td>Book Author Name</td>
                    <td>Total Book Page Number</td>
                </tr>
                <!-- @foreach($crudArr as $abc)
                <tr>
                    <td>{{$abc->id}}</td>
                    <td>{{$abc->bookname}}</td>
                    <td>{{$abc->description}}</td>
                    <td>{{$abc->authername}}</td>
                    <td>{{$abc->bookpage}}</td>
                    <td><a href="crud_delete/{{$abc->id}}">Delete</a>
                        <a href="crud_edit/{{$abc->id}}">Edit</a>
                    </td>

                </tr>
                @endforeach -->
            </table>

       
    </body>
</html>



<!-- <tbody>
                    @foreach($addbooks as $addbook)
                    <tr>
                      <th scope="row"></th>
                      <td>{{ $addbook['bookname']}}</td>
                      <td>{{ $addbook['desc']}}</td>
                      <td>{{ $addbook['author']}}</td>
                      <td>{{ $addbook['page']}}</td>
                      <td><a href="crud_delete/{{$abc->id}}" class="btn btn-primary">Delete</a>
                        <a href="crud_edit/{{$abc->id}}" class="btn btn-danger">Edit</a>
                    </tr>    
                    @endforeach              
                  </tbody> -->

                  <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.bookslist') }}">View Books</a>
                      </li>  -->