<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDislike extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $appends = [
        'user',
    ];

    public function getUserAttribute($value)
    {
        return $this->user()->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
