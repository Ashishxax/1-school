<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    
    protected $fillable = ['class','user_id','10-11','11-12','12-1','1-2','2-3','3-4','date'];

     // Insert Query Daily Schedule

     public static function mark_schedule($request){
        self::insert(array(
            'user_id'    => auth()->user()->id,
            'class'        => $request['class'],
            '10-11'      => $request['10-11'],
            '11-12'      => $request['11-12'],
            '12-1'        =>$request['12-1'],
            '1-2'          =>$request['1-2'],
            '2-3'          =>$request['2-3'],
            '3-4'          =>$request['3-4'],
            'date'         => now(),
        ));
        return true;
    }
}
