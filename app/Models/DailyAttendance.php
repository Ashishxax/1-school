<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyAttendance extends Model
{
    protected $table = 'daily_attendance';
    
    protected $fillable = ['user_id','class','status','date','subject','topic'];

     // Insert Query Today's Sheet

     public static function mark_attendance($request){
        self::insert(array(
            'user_id'   => auth()->user()->id,
            'class'       => $request['standard'],
            'status'      => isset($request['Present']) ? 'Present' : 'Absent',
            'date'        => now(),
            'subject'   => $request['subject'],
            'topic'      => $request['topic']
        ));
        return true;
    }
}
