<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'client_name',
        'rating',
        'review_text',
    ];

    public function users(): HasMany
    {
        return $this->belongsTo(Post::class);
    }
}
