<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\slug;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar', 'name', 'slug', 'description', 'email', 'phone', 'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setSlugAttribute($value)
    {
        $unique_slug=Slug::uniqueSlug($value,'profiles');

        $this->attributes['slug']=$unique_slug;
    }

}
