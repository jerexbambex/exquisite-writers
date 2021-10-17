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

    public function avatar(): string
    {
        if ($this->avatar == null) {
            return 'https://res.cloudinary.com/biochar-initiative-of-nigeria/image/upload/v1633699666/Exquisite/how-to-write-a-good-blog-post.png';
        }
        return json_decode($this->avatar)->secure_url;
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
