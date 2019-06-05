<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use App\Notifications\CustomPasswordReset;
use App\Notifications\CustomVerifyEmail;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmail, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() 
    {
        return $this->hasMany('App\Post')->latest();
    }

    
    public function isAdmin($id = null) {
        $id = ($id) ? $id : $this->id;
        return $id == config('admin_id');
    }
}
