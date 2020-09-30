@extends('admin.dashboard.default')
@section('content')
    <div class="container-fluid" style="margin-top: 5vh">
        <div class="row">
            <div class="col-lg-7">
                <div class="card border-info mb-3">
                    <div style="display: flex; flex: 1 1 auto;">
                        <div class="img-square-wrapper">
                            <img src="{{asset('uploads/'.$book->book_img)}}" width="300px" height="380px">
                        </div>
                        <div class="card-body text-info">
                            <h4 class="card-title">Book Name : <span style="font-size: 20px">{{$book->name}}</span></h4>
                            <h4 class="card-title">Book Author : <span style="font-size: 20px">{{$book->author}}</span></h4>
                            <p class="card-text"><h5 style="margin:0;">Description:</h5>{{$book->description}}</p>
                        </div>
                    </div>
                    <div class="card-footer card-footer bg-transparent border-info text-center">
                        <small class="text-muted">Created at : {{$book->created_at}}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <iframe src="{{asset('uploads/'.$book->book_file)}}" style="width:400px; height:430px;" frameborder="0"></iframe>
            </div>
        </div>

    </div>

    @stop
