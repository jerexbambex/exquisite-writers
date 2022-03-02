<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userAvatar(): string
    {
        if ($this->image() == null) {
            return '/assets/front/images/exquisite-logo.png';
        }
        return json_decode($this->avatar)->secure_url;
    }

    public function image()
    {
        return $this->avatar;
    }
}
