<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'short_description',
        'content',
        'picture',
        'user_id',
        'published_at',
        'slug',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
