<?php

namespace App\Traits;

use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Hash;

trait UserMethods
{

    public static function registerRules()
    {
        return [
            'name' => 'max:255|required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:10',            
        ];
    }

    public static function loginRules()
    {
        return [
            'email' => 'email|required',
            'password' => 'required'
        ];
    }

    public function setImageAttribute($value)
    {
        if (!empty($value) && $value != 'null') {
            if (is_file($value)) {
                $this->attributes['image'] = ImageHelper::saveImage($value, 'images/profile');
            } else if (is_string($value)) {
                $this->attributes['image'] = ImageHelper::saveImageFromApi($value, 'images/profile');
            } else {
                $this->attributes['image'] = $value;
            }
        }
    }

    public function getImageAttribute($value)
    {
        return asset($value);
    }

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function withToken()
    {
        return $this->makeVisible(['api_token']);
    }
}