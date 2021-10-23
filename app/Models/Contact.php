<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function initials()
    {
        return strtoupper($this->firstname[0].$this->lastname[0]);
    }
}
