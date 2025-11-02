<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'post_id'
    ];

    public function image()
    {
        return $this->belongsTo(Like::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
