<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AllStudent(){
        $students=User::all();
        return view('students.list',compact('students'));
    }

    public function BooksOfStudent($id){
        $student=User::find($id);
        //$books=$student->books;
        return view('admin.dashboard.booksOfStd',compact('student'));
    }


    public function search(Request $request){
        $student=User::find($request->id);
        return view('students.search',compact('student'));
    }


}
