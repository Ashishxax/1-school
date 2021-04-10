<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\Performance;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'users';
    
    protected $fillable = [
        'first_name','last_name','company_name', 'email','address', 'city','country','pincode', 'password','role'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function update_profile($request){
        self::where('id', auth()->user()->id)->update(array(
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'company_name' => $request['company_name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'city' => $request['city'],
            'pincode' => $request['pincode']
        ));
        return true;
    }
    public function performances(){
        return $this->hasMany(Performance::class);
      }
}
