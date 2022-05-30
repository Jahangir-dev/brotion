<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Validate{

    public static function login($request, $model){

        $validator = Validator::make($request->all(),$model::loginRules());
        
        if($validator->fails()){
            toastr()->error($validator->errors()->first());
            Redirect::to(route('login'))->withInput()->send();
        }
        else
            return[
                'email' => $request->email,
                'password' => $request->password
            ];
    }
    
    public static function register($request, $model, $addVerification = false){

        $validator = Validator::make($request->all(),$model::registerRules());
        
        if($validator->fails()){
            toastr()->error($validator->errors()->first());
            Redirect::to(route('front.register'))->withInput()->send();
            
        }
        else{
            $data = $request->all();
            if($addVerification) $data['email_verify_at'] = Str::random(20);
            return $data;
        }
          
    }

}