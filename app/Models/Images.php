<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url'
    ];

    public function postImages()
    {
        return $this->hasMany(PostImage::class);
    }
}
