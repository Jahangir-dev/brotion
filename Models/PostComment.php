<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $appends = [
        'user',
        'replies_count'
    ];
 
    public function getUserAttribute($value)
    {
        return $this->user()->first();
    }
    public function getRepliesCountAttribute()
    {
        return $this->replies()->count();
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCreatedAtAttribute()
    {
        return  Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
}
