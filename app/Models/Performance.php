<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $table = 'performances';
    protected $fillable =['user_id','student_data'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
