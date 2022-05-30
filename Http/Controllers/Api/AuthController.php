<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Helpers\ApiValidate;
use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials =  ApiValidate::login($request, User::class);
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->status == true) {
                $user->update([
                    'firebase_token' => $request->firebase_token,
                ]);
                return Api::setResponse('user', $user->withToken());
            } else {
                return Api::setError('You Are Blocked by Admin');
            }
        } else {
            return Api::setError('Invalid credentials');
        }
    }

    public function register(Request $request)
    {
        $credentials = ApiValidate::register($request, User::class);
        $create = User::create($credentials);
        $user = User::find($create->id);
        return Api::setResponse('user', $user->withToken());
    }

    public function sendVerificationRequest(Request $request){
        $user=Auth::user();
        if($user->badge_status == 0 || $user->badge_status == 1 || $user->badge_status == 2 || $user->badge_status == 3){
            $user->update(['badge_status'=>1,'email_verify'=>false]+$request->all());
            Mail::send('verify', ['user' => $user], function ($mail) use ($user){
                $mail->from('support@briefify.com', 'Briefify');
                $mail->to($user->email, $user->name)
                ->subject('Verify Email');
            });
            return Api::setMessage('Badge Request is Sent Successfully');
        }

        else{
            return Api::setMessage('Badge Request Already Sent');
        }
    }
    public function checkVerificationRequest(Request $request){
        $user=Auth::user();
        if($user->badge_status == 0){
            $response = new Api();
            if($user->badge_status == 0)
            $response->add('badge_status','Not Sent');
            $response->add('document', null);

            return $response->json();
        }elseif($user->badge_status == 1){
            $response = new Api();
            if($user->badge_status == 1)
            $response->add('badge_status','Pending');
            if($user->document)
            $response->add('document',$user->document);

            return $response->json();
        }elseif($user->badge_status == 2){
            $response = new Api();
            if($user->badge_status == 2)
            $response->add('badge_status','Approved');
            if($user->document)
            $response->add('document',$user->document);

            return $response->json();
        }elseif($user->badge_status == 3){
            $response = new Api();
            if($user->badge_status == 3)
            $response->add('badge_status','Denied');
            if($user->document)
            $response->add('document',$user->document);

            return $response->json();
        }
    }

    public function ResetPassword(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        try{
            $user->code = Str::random(30);
            $user->save();
            Mail::send('mail', ['user' => $user], function ($mail) use ($user){
                $mail->from('support@briefify.com', 'Briefify');
                $mail->to($user->email, $user->name)
                ->subject('Password Reset');
            });

            return Api::setMessage('Password Reset Link Sent to Your Mail');
        }
        catch(Exception $e){
            return Api::setError('Email Not Registered');
        }
    }
}
