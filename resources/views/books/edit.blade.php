@extends('admin.dashboard.default')
@section('content')
    <div class="content" style="box-shadow: 0 0 3px rgba(0,0,0,0.1); border-color: #e9e9e9; margin-bottom: 20px; background-color: #ffffff; border-radius: 4px; -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); box-shadow: 0 1px 1px rgba(0,0,0,.05);">
        <div class="header" style="color: #767676; background-color: #f6f6f6; border-color: #e9e9e9; padding: 10px 15px; border-bottom: 1px solid transparent; border-top-right-radius: 3px; border-top-left-radius: 3px;">
            <h3 style="font-size: 14px; line-height: 20px; height: 20px; margin: 0">Edit Books</h3>
        </div>
        <div class="container" style="padding: 15px">
            <form method="post" action="{{ route('books.update',$book->id) }}" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title Of Book</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{$book->name}}" placeholder="Enter the title of the book here..." class="form-control">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Author Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="author" value="{{$book->author}}" placeholder="Enter the name of author for the book here..." class="form-control">
                    </div>
                </div>
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="basicinput">Description of Book</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" rows="4" placeholder="Enter few lines about the book here">{{$book->description}}</textarea>
                    </div>
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Add the book cover</label>
                    <div class="col-sm-10">
                        <input type="file" name="book_img" class="form-control-file" id="img" name="book_img" value="{{asset('uploads/'.$book->book_img)}}">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark">Edit Books</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
