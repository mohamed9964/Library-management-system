@extends('admin.dashboard.default')
@section('content')
    <div class="card-group"  style="margin-top: 15px">
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
                    <small class="text-muted">Created at : {{$book->created_at}}</small>
                </div>
            </div>
                </div>
    @endforeach
    </div>
@stop
