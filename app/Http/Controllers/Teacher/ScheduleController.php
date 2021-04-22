<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Performance;

class ScheduleController extends Controller
{
    public function today_schedule(){
        $pagename = "Schedule of the Day";
        return view('teacher.schedule',compact('pagename'));
    }

    public function update_schedule(Request $request){
        // dd($request->all());
        $status = Schedule::where([['date','=',date("Y-m-d")],['class','=',$request['class']]])->exists();
        if($status ==true) return redirect('today-schedule')->with('schedule_status', 'Schedule already marked for this class Today');
        Schedule::mark_schedule($request);
        return redirect()->route('teacher.dashboard');
    }
    public function mark_performance(Request $request){
        unset($request['_token']);
        $student_data = json_encode($request->all());
        Performance::performance_mark($student_data);
        return redirect()->back()->with('performance_status', 'Performance has been updated to user');
    }
}
