<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'address', 'city', 'country', 'zip', 'phone', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* if you wanna change column name of users table
     * set function name is getEmailAttribute() that means change name of email column
     * set result is return $this->user_email that was the true name you wanted to change
     * default: email  --- your database: user_email
    public function getIdAttribute() {
        return $this->user_id;
    }
    */

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        // accessors
        // return full name when call $profile->fullname that has not in your table
        return $this->last_name. ' '. $this->first_name;
    }

    /*
     * return string
     *
    public function setPasswordAttribute($password)
    {
        // mutators 
        // format your password before save it to datable
        $this->attributes['password'] = bcrypt($password);
    }
    */

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
}
