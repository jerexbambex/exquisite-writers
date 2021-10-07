<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Generate slug automatically from the $shop->name
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->slug = (string) Str::of($model->title)->slug('-');
        });
    }

    public function path()
    {
        return $this->id. "-" .$this->slug;
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
