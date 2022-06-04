<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
use App\Models\User;
use Mail;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Hash;
use App\Models\UserDetails;

class AuthController extends Controller
{

     public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password')->cc('bidding@brotions.com');
          });
         toast('Email is Sended Successfully.Kindly Check your Email','success');
  
          return back()->with('message', 'We have e-mailed your password reset link!');
      }
      
        public function showResetPasswordForm($token) { 
        
         return view('auth.updatepassword', ['token' => $token]);
      }
      
      
       public function submitResetPasswordForm(Request $request)
      {
          //dd($request);
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          toast('Your Password is SuccessFuly Changed','success');
         Auth::logout();
          return redirect()->route('login');
      }
    
    
    
    
    
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
       return view('auth.register');

    }
    public function register_save(Request $request)
    {
       // dd($request);

        $role='user';
        $companylogo='';
        $commercialregistration='';
        $vatcertificate='';

         $token = md5(date('Y-m-d').microtime());
         
         
            $cnic_chk=User::where('email',$request->email)->first();
            if(!empty($cnic_chk)){
            alert()->error('Email Must Be Unique');
            return redirect()->back();
            }

        $input = $request->all();
            $request->validate([
            'name' => 'required',
            'email' => 'required',
            //'confirm_email'=>'required',
            'company_name' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
             'password_confirmation' => 'min:6',
             'company_logo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
             'phone'=>'required',
             
            ]);


      
          if ($request->hasFile('company_logo')) 
        {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('company_logo')->getClientOriginalExtension();
                    $filename = $request->file('company_logo')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('company_logo')->move($destinationPath,$filename))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $companylogo = asset("/images/images/")."/".$filename;
                    

          }
          if ($request->hasFile('commercial_registration')) 
        {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('commercial_registration')->getClientOriginalExtension();
                    $filename = $request->file('commercial_registration')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('commercial_registration')->move($destinationPath,$filename))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $commercialregistration = asset("/images/images/")."/".$filename;
                    

          }
             if ($request->hasFile('vat_certificate')) 
        {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('vat_certificate')->getClientOriginalExtension();
                    $filename = $request->file('vat_certificate')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('vat_certificate')->move($destinationPath,$filename))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $vatcertificate = asset("/images/images/")."/".$filename;
                    

          }

            $std_id=User::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'token' => $token,
            'role'=>$role,
            ]);
            UserDetails::insert([
            'user_id'=>$std_id,
            'company_name'=>$request->company_name,
            'position'=>$request->position,
            'landline_number'=>$request->landline_number,
            'building_number'=>$request->building_number,
            'street_name' => $request->street_number,
            'zip_code'=>$request->zip_code,
            'district_name'=>$request->district_name,
            'city_name'=>$request->city_name,
            'company_logo'=>$companylogo,
            'commerical_registration'=>$commercialregistration,
            'vat_certification'=>$vatcertificate,
            ]);




            $id=User::find($std_id);
            $role=DB::table('roles')->where('name','User')->first();
            $id->roles()->attach($role->id);
            alert()->success('New User is Registered');

                $email = $request->email;
                $token=$token;
                $data = ['email'=>$email,'token'=>$token];
                Mail::send('emails.verify_mail',['data'=>$data],function($mail) use ($email){
                $mail->to($email,'New Registration')->from("bidding@brotions.com")->subject("New Registration Email Verification");
                });
         
                toast('Please confirm your email','success');
                return redirect()->route('home');
    }
    


    public function email_verification($token)
    {

        $user = User::where('token',$token)->first();
        if(empty($user)){

            $type = 'warning';
            $message = 'Token Invalid';

             return redirect()->back();
        }else{
            if($user->login_status==1){

            $type = 'warning';
                    $message = 'Account Already Activated';

             return redirect()->back()->with('warning','Account Already Activated');
            }else{

             $type = 'success';
             $message = 'Congrats! Email Verified Successfully, Please Login';
             $user->login_status = 1;
             $user->save();
             alert()->success("Email Verified Successfully, Please Login");
             return redirect()->back()->with('verify','Email Verified Successfully, Please Login');
            }


        }
    }

    protected function login_post(Request $request)
    {
     // dd($request);

        $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);
               
               $email = $request->input('email');
               $password = $request->input('password');

         

      $user = User::where('email',$request->input('email'))->first();
    // dd($user);

       if($user && $user->login_status == '0'){
          
         alert()->error('You Are Not Allowed To Login && Please Verfiy Your Email.');  

         return redirect()->route('login');
       }

       if(!Auth::attempt($request->only(['email','password']))){
          
          toast('Email and Password Doesnot Match','warning');
          return redirect()->back();
        
        } 

        if(Auth::user()->hasAccess(['admin'])){
          // dd($request);
          alert()->success('Welcome To Admin Dashboard');
          return redirect()->route('admin-home')->with('success','WELCOME'.Auth::user()->username.'...');
        
        }
    

        elseif(Auth::user()->hasAccess(['user'])){

           alert()->success('Welcome To User Dashboard');
         // dd('owner');
          return redirect()->route('user-home')->with('success','WELCOME '.Auth::user()->username.'...'); 
        
        }
        else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 
    }

    public function forgot_password()
    {
       return view('auth.forgot-password');
    }


    public function logout()
    {
        Auth::logout();
        toast('You Have Successfully Logout','success');
        return redirect()->route('welcome');

    }
}
