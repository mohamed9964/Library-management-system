@extends('admin.dashboard.default')
@section('content')
    <div class="container-fluid" style="margin-top: 5vh">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-info mb-4">
                    <div style="display: flex; flex: 1 1 auto;">
                        <div class="card-body text-info">
                            <h4 class="card-title">#ID : <span style="font-size: 20px">{{$student->id}}</span></h4>
                            <h4 class="card-title">Student Name : <span style="font-size: 20px">{{$student->name}}</span></h4>
                            <p class="card-text"><h5 style="margin:0;">E-mail : </h5>{{$student->email}}</p>
                        </div>
                    </div>
                    <div class="card-footer card-footer bg-transparent border-info text-center">
                        <small class="text-muted">Borrowed Books</small>
                        {{--His borrowed Books--}}
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
                            @foreach ($student->books as $book)
                                <tr>
                                    <th scope="row">{{$book->id}}</th>
                                    <td><img src="{{asset('uploads/'.$book->book_img)}}" width="70px" height="70px"></td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->description}}</td>
                                    <td><a href="{{route("books.show",$book->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-eye" aria-hidden="true" style="color: #212c69"></i></a></td>
                                    <td><a href="{{route("books.edit",$book->id)}}" class="btn btn-success btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-edit"></i></a></td>
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
                                <td colspan="9" style="padding: 0"><a href="{{ route('books.create') }}"><button class="btn btn-dark" type="submit" style="width: 100%; border: 0;">Add Book</button></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        {{--His borrowed Books--}}
        {{--<div class="card-group"  style="margin-top: 15px">
            @foreach ($books as $book)
                <div class="col-lg-4" style="margin-bottom: 15px">
                    <div class="card border-info mb-3">
                        <img style="margin: auto; padding: 15px 0" src="{{asset('uploads/'.$book->book_img)}}" width="300px" height="380px">
                        <div class="card-body text-info">
                            <h5 class="card-title">Book Name : <span style="font-size: 20px">{{$book->name}}</span></h5>
                            <h5 class="card-title">Book Author : <span style="font-size: 20px">{{$book->author}}</span></h5>
                            <p class="card-text"><h5 style="margin:0;">Description:</h5>{{$book->description}}</p>
                        </div>
                        <div class="card-footer card-footer bg-transparent border-info">
                            <a style="width: 45%;" class="btn btn-success" href="{{asset('uploads/'.$book->book_file)}}" download><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                            <a style="width: 45%;" class="btn btn-primary" href="{{asset('uploads/'.$book->book_file)}}" onclick="window.open('{{asset('uploads/'.$book->book_file)}}', '_self', 'fullscreen=yes'); return false;"><i class="fas fa-book-open"></i> Open Book</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>--}}

    </div>
@stop
