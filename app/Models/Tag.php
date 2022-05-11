<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\slug;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public function setSlugAttribute($value)
    {
        $unique_slug=Slug::uniqueSlug($value,'tags');

        $this->attributes['slug']=$unique_slug;
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
