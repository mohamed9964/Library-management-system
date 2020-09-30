@extends('admin.dashboard.default')
@section('content')
    <h1>Books Of :{{$student->name}}</h1>
    <div class="card-group"  style="margin-top: 15px">
        @foreach ($student->books as $book)
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
    </div>

    @stop
