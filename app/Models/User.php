<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Illuminate\Auth\Notifications\VerifyEmail;

use Illuminate\Notifications\Messages\MailMessage;
use App\Notifications\VerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user_profile',
        'zip_code',
        'city',
        'country',
        'phone_number',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class,'uploader','id');
    }
	
    public function applies()
    {
        return $this->hasMany(Apply::class);
    }
	
	
	public function getTotalJobsAttribute()
	{
		return $this->hasMany(Job::class,'uploader','id')->count();
	}
	 
	public function getTotalClosedJobsAttribute()
	{
		return $this->hasMany(Job::class,'uploader','id')->where('closed','1')->count();
	}
	
	
	public function getTotalCompletedJobsAttribute()
	{
		return $this->hasMany(Job::class,'applier_id','id')->where('status','1')->count();
	}
	
	
    public function relContactSupport(){
        return $this->hasMany('App\Models\Support', 'user_id', 'id');
    }
	
	/**
	 * Send the email verification notification.
	 *
	 * @return void
	 */
	public function sendEmailVerificationNotification()
	{
		return $this->notify(new VerifyEmail); // my notification
	}
}
