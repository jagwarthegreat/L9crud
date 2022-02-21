<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillables = [
        'user_id',
        'title',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
