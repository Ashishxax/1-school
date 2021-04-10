<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Performance;


class StudentController extends Controller
{
    // Students List
    public function students(){
        $pagename = "Students";
        $students = User::where('role','student')->get();
    //    dd($students)    ;
    return view('teacher.students',compact('pagename'));
    }
    public function search_student(Request $request){
        $students = User::where('role','student')->get();
        return \DataTables::of($students)->editColumn('first_name', function ($data) {
            return $data->first_name.$data->last_name;
        })
        
        ->addColumn('action', function ($data) {
            return '<td><a href="performance-report/' . $data->id . '" title="Edit Product"><button class="btn btn-primary school">Performance</button></a></td>'; 
        })
        ->addIndexColumn()->make(true);
    }
    public function performance_report($id){
        //performance table
        $pagename = "Performance Report";
        
        $performances = User::find($id)->performances()->get();
        $user = User::find($id);
        // dd($performances1);
        return view('teacher.performance',compact('pagename','performances'));

    }
}
