@extends('students.layout')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Your Books
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card-group"  style="margin-top: 15px">
                        @foreach (Auth::user()->books as $book)
                            <div class="col-lg-4" style="margin-bottom: 15px">
                                <div class="card border-info mb-3">
                                    <img style="margin: auto; padding: 15px 0" src="{{asset('uploads/'.$book->book_img)}}" width="300px" height="380px">
                                    <div class="card-body text-info">
                                        <h5 class="card-title">Book Name : <span style="font-size: 20px">{{$book->name}}</span></h5>
                                        <h5 class="card-title">Book Author : <span style="font-size: 20px">{{$book->author}}</span></h5>
                                        <p class="card-text"><h5 style="margin:0;">Description:</h5>{{$book->description}}</p>
                                        <p class="card-text"><h5 style="margin:0;">Description:</h5>Return Date-time: {{$book->created_at->format('m d y')}}</p>
                                    </div>
                                    <div class="card-footer card-footer bg-transparent border-info">
                                        <td><a href="{{route("bookDetail",$book->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-eye" aria-hidden="true" style="color: #212c69"></i>&nbsp;Show Detail</a></td>

                                        <td>
                                            <form action="{{route("back",$book->id)}}" method="GET" style="display:inline;">

                                                <input type="submit" value="Back To the Shelf" class="btn btn-danger btn-simple btn-xs"/>
                                            </form>
                                            {{--<a href="{{route("back",$book->id)}}" class="btn btn-danger btn-simple btn-xs" style='color:#fff; text-decoration: none;'>Back To the Shelf</a>--}}
                                        </td>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


        </div>
    </div>
    </x-app-layout>

@stop
