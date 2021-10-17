<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [];

    public function image()
    {
        if ($this->avatar === null) {
            return "https://res.cloudinary.com/biochar-initiative-of-nigeria/image/upload/v1634449963/Exquisite/133-1332476_crowd-of-users-transparent-user-icon-png-clipart.jpg";
        }

        return json_decode($this->avatar)->secure_url;
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
