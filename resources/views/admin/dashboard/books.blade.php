@extends('admin.dashboard.default')
@section('content')
    <table class="table table-hover" style="text-align: center">
        <thead class=" thead-light">
        <tr>
            <th scope="col">#book</th>
            <th scope="col">#book Cover</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Description</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td><img src="{{asset('uploads/'.$book->book_img)}}" width="70px" height="70px"></td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td><a href="{{route("books.show",$book->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-eye" aria-hidden="true" style="color: #212c69"></i></a></td>
                <td><a href="{{route("edit.book",$book->id)}}" class="btn btn-success btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-edit"></i></a></td>
                <td>
                    <form action="{{route("books.destroy",$book->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times fa"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="9" style="padding: 0"><a href="{{ route('create.book') }}"><button class="btn btn-dark" type="submit" style="width: 100%; border: 0;">Add Book</button></a></td>
        </tr>
        </tbody>
    </table>


    @stop
