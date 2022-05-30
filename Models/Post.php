<?php

namespace App\Models;

use App\Helpers\FileHelper;
use App\Traits\Notifier;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, Notifier;

    protected $guarded = [''];

    protected $appends = [
        'user',
        'category',
        'likes',
        'dislikes',
        'comments_count',
        'user_like',
        'user_dislike',
    ];

    public function setPdfAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['pdf'] = FileHelper::saveFile($value, 'pdf');
        } else if (!empty($value)) {
            $this->attributes['pdf'] = $value;
        }
    }

    public function getPdfAttribute($value)
    {
        if ($value) {
            return asset(Storage::url($value));
        }
        
    }
    public function getUserAttribute($value)
    {
        return $this->user()->first();
    }
    public function getCreatedAtAttribute()
    {
        return  Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
    public function getCategoryAttribute($value)
    {
        return $this->category()->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }
    public function dislikes()
    {
        return $this->hasMany(PostDislike::class);
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function getLikesAttribute()
    {
        return $this->likes()->count();
    }
    public function getDislikesAttribute()
    {
        return $this->dislikes()->count();
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments()->count();
    }

    public function getUserLikeAttribute($value)
    {
        $found = PostLike::where('post_id', $this->id)->where('user_id', Auth::user()->id)->first();
        return $found != null;
    }
    public function getUserDislikeAttribute($value)
    {
        $found = PostDislike::where('post_id', $this->id)->where('user_id', Auth::user()->id)->first();
        return $found != null;
    }
}
