<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Schedule;

class IndexController extends Controller
{
    public function schedule(Request $request){
        $validator = Validator::make($request->all(), [
            'class_id' => 'required',
            'date' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $schedule = Schedule::where([['class',$request['id']],['date',$request['date']]])->first();
        $output = 
            [
                'status'                 => 1,
                'Message'                => "Successfully Data Passed",
                'data'                   => $schedule
            ];
        return response()->json($output); 
    }
    public function detail(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $performances = User::find($id)->performances()->get();
        $user = User::find($id);
        $output = 
            [
                'status'                 => 1,
                'Message'                => "Successfully Data Passed",
                'data'                   => $performances
            ];
    }
}
