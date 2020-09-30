<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $books=Book::all();
        return view('students.index',compact('books'));
    }

    public function showDetail($id)
    {
        $book = Book::find($id);
        return view("students.detailBook", compact('book'));
    }

    public function borrow($id){
        $user_id=Auth::id();
        DB::table('books')->where('id', $id)->update(['borrowed'=>$user_id]);
        return  redirect()->route('bookDetail',$id);
    }


    public function backToShelf($id){
        DB::table('books')->where('id', $id)->update(['borrowed'=>null]);
        return redirect()->back();
    }

    public  function borrowBooks(){
        $user=Auth::user();
        $books=$user->books();
        return view('students.borrowBooks',compact('books'));
    }
}
