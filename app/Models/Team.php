<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        return $this->id;
    }

    public function fullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function initials(): string
    {
        return strtoupper($this->first_name[0].$this->last_name[0]);
    }

    public function userAvatar(): string
    {
        if ($this->image() == null) {
            return 'https://res.cloudinary.com/dj6bwuwu6/image/upload/v1595346948/fego-placeholder_aokgwg.jpg';
        }
        return json_decode($this->avatar)->secure_url;
    }

    public function image()
    {
        return $this->avatar;
    }

    public function adminAvatar(): string
    {
        if ($this->avatar == null) {
            return $this->initials();
        }
        return json_decode($this->avatar)->secure_url;
    }
}
