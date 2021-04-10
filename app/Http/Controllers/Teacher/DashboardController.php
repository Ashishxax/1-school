<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\DailyAttendance;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $pagename = "Dashboard - Today's Report";
        $data = Schedule::where('date',date("Y-m-d"))->groupBy('class')->get()->toArray();
        // dd($data);
        return view('teacher.dashboard',compact('pagename','data'));
    }
    public function daily_sheet()
    {
        $pagename = "Daily Sheet";
        return view('teacher.daily_sheet',compact('pagename'));
    }
    public function daily_sheet_update(Request $request){
        $status = DailyAttendance::where([['user_id','=',auth()->user()->id],['date','=',date("Y-m-d")],['class','=',$request['standard']]])->exists();
        if($status ==true) return redirect('daily-sheet')->with('attendance_status', 'Attendance been marked for the day');
        DailyAttendance::mark_attendance($request);
        return redirect()->route('teacher.dashboard');
    }
}
