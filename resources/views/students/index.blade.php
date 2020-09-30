@extends('students.layout')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Books You Can borrowed
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                                        <td><a href="{{route("bookDetail",$book->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-eye" aria-hidden="true" style="color: #212c69"></i>&nbsp;Show Detail</a></td>
                                        @if($book->borrowed==null)
                                            <a style="width: 45%;" class="btn btn-success" href="{{route('borrowIT',$book->id)}}"><i class="fa fa-shopping-bag"></i> bowrred it</a>
                                        @endif
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
