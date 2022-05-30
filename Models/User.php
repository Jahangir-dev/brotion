<?php

namespace App\Models;

use App\Helpers\FileHelper;
use App\Helpers\ImageHelper;
use App\Traits\UserMethods;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UserMethods;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'user_followers',
        'user_following',
        'is_following'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setImageAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['image'] = ImageHelper::saveImageFromApi($value, 'images/user');
        } else if (is_file($value)) {
            $this->attributes['image'] = ImageHelper::saveImage($value, 'images/user');
        }
    }
    public function setDocumentAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['document'] = FileHelper::saveFile($value, 'pdf');
        } else if (!empty($value)) {
            $this->attributes['document'] = $value;
        }
    }

    public function getDocumentAttribute($value)
    {
        if ($value) {
            return asset(Storage::url($value));
        }
        else
            return $value;
        
    }
    
    public function setCoverAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['cover'] = ImageHelper::saveImageFromApi($value, 'images/user');
        } else if (is_file($value)) {
            $this->attributes['cover'] = ImageHelper::saveImage($value, 'images/user');
        }
    }
    public function getCoverAttribute($value)
    {
            return asset($value);
        
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function following()
    {
        return $this->hasMany(Follow::class);
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'opponent_id');
    }

    public function getUserFollowersAttribute()
    {
        return $this->followers()->count();
    }
    
    public function getUserFollowingAttribute()
    {
        return $this->following()->count();
    }

    public function getIsFollowingAttribute($value)
    {
        if(auth()->check()){
            $found = Follow::where('opponent_id', $this->id)->where('user_id', Auth::user()->id)->first();
            return $found != null;
        }
    }
}
