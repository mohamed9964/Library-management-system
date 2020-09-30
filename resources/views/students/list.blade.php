@extends('admin.dashboard.default')
@section('content')
    <table class="table table-hover" style="text-align: center">
        <thead class=" thead-light">
        <tr>
            <th scope="col">#student</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Email</th>
            <th scope="col">Show borrowed books</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td><a href="{{route('books-of-student',$student->id)}}" class="btn btn-info btn-simple btn-xs" style='color:#fff; text-decoration: none;'><i class="fa fa-info-circle" aria-hidden="true" style="color: #212c69"></i> borrowed books</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
