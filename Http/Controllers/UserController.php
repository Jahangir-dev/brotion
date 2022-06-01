<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOpportunity;
use Auth;
use App\Models\OpportunityDocument;
use App\Models\User;
use Mail;
use App\Models\OpportunityCount;
use App\Models\OpportunityNotRequired;
use App\Models\OpportunityTitle;
use App\Models\Sector;
use App\Models\City;
use App\Models\OpportunityDetail;
use App\Models\Provinces;
use App\Models\Details;
use App\Models\OpportunityCategory;
use App\Models\FooterSetting;

class UserController extends Controller
{

  public function welcome(Request $request)
  {
     $setting=FooterSetting::first();

    if(Auth::check()){
  $category=OpportunityCategory::get();
     $user_id = Auth::user()->id;
     $opportunity = UserOpportunity::select();

       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }

    $opportunity = $opportunity->orderBy('id', 'Desc')->with('user_opp_title','user','user_detail','opp_category')->take(6)->with(['oppt_not_required' => function ($query) use($user_id) {
    $query->where('user_id', '=',$user_id );
    }])->get();


    $due_date_count=Null;
    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    return view('welcome',compact('opportunity','category','setting'));
    }else{
  $category=OpportunityCategory::get();
    $opportunity = UserOpportunity::select();


       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }
    $opportunity = $opportunity->orderBy('id', 'Desc','user','user_detail','opp_category')->with('user_opp_title')->take(6)->get();
    $due_date_count=Null;
    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    return view('welcome',compact('opportunity','category','setting'));
    }



  }


    public function user_home()
   {
    $setting=FooterSetting::first();

    if(Auth::check()){
    $category=OpportunityCategory::get();
     $user_id = Auth::user()->id;
     $opportunity = UserOpportunity::select();

       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }

    $opportunity = $opportunity->orderBy('id', 'Desc')->with('user_opp_title','user','user_detail','opp_category')->take(6)->with(['oppt_not_required' => function ($query) use($user_id) {
    $query->where('user_id', '=',$user_id );
    }])->get();


    $due_date_count=Null;
    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    return view('welcome',compact('opportunity','category','setting'));
    }else{
       $category=OpportunityCategory::get();

    $opportunity = UserOpportunity::select();

       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }
    $opportunity = $opportunity->orderBy('id', 'Desc','user','user_detail','opp_category')->with('user_opp_title')->take(6)->get();
    $due_date_count=Null;
    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    return view('welcome',compact('opportunity','category','setting'));
    }
}




    public function opportunity_management(Request $request)
    {
         $setting=FooterSetting::first();
         $category=OpportunityCategory::get();
    $opp_count=UserOpportunity::where('user_id',Auth::user()->id)->count();
    $opp_awarded_count=OpportunityDocument::where('user_id',Auth::user()->id)->where('status','=',1)->count();
    $opp_pending_count=OpportunityDocument::where('user_id',Auth::user()->id)->where('status','=',0)->count();

    $opportunity = UserOpportunity::select();

    if($request->has('data') && $request->data=='yes'){
    $opportunity = $opportunity->where('user_id','=',Auth::user()->id);

    }elseif($request->has('data') && $request->data=='no'){
     $opportunity = $opportunity->where('user_id','!=',Auth::user()->id);
    }







    if($request->has('type') && $request->type=='SmallValue'){
    $opportunity = $opportunity->where('opp_type','=',$request->type);

    }elseif($request->has('type') && $request->type=='BigValue'){
     $opportunity = $opportunity->where('opp_type','=',$request->type);
    }
    elseif($request->has('type') && $request->type=='all'){
     $opportunity;
    }



   if($request->has('sortby') && $request->sortby=='date'){
    $opportunity = $opportunity->orderBy('created_at','Asc');

    }




        if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category',function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }

     if(isset($request->opp_title)){
            $search = $request->opp_title;
           $opportunity = $opportunity->whereHas('user_opp_title' ,function ($query) use($search) {
                $query->where('opp_title', 'like', '%' . $search . '%');;
            });
      }


    $opportunity=$opportunity->where('user_id',Auth::user()->id)->orderBy('id','Desc')->with('opp_count','user_opp_title','user_detail','user','opp_category')->paginate(5);




    $due_date_count=Null;
    foreach($opportunity as $opp){

    $now = time();
    $your_date = strtotime($opp->due_date);
    $datediff =$your_date - $now  ;
     $opp->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    return view('userpages.opportunity',compact('opportunity','due_date_count','opp_count','opp_awarded_count','opp_pending_count','setting','category'));
    }






    public function create_new_opportunity()
    {
        $setting=FooterSetting::first();
     $det=Details::first();
     return view('userpages.add_new_opportunity',compact('det','setting'));
    }

    public function create_opportunity($type) {
    $setting=FooterSetting::first();

    if ($type == 'SmallValue') {


        $opp_title=OpportunityTitle::get();
        $province=Provinces::get();
        $det=Details::first();
        $category=OpportunityCategory::get();
        return view('userpages.create_opportunity', compact('type','opp_title','province','det','category','setting'));

    } else if ($type == 'BigValue') {
            $opp_title=OpportunityTitle::get();
            $province=Provinces::get();
            $det=Details::first();
            $category=OpportunityCategory::get();
        return view('userpages.create_opportunity', compact('type','opp_title','province','det','category','setting'));

    }
  }
  public function user_opportunity_save(Request $request)
  {
        // dd($request);


          $input = $request->all();
          $request->validate([
          'opp_type' => 'required',
          'due_date' => 'required',
          'opp_title' => 'required',
          'address' => 'required',
          'instruction' => 'required',
          'category_id' => 'required',
          'bidder_location' => 'required',
          'fav_language' => 'required',

          ]);

     $duedatecheck=$request->due_date;
    $now = time();
    $your_date = strtotime($duedatecheck);
    $datediff =$your_date - $now  ;
     $due_date_count= round($datediff / (60 * 60 * 24)) ;


    if ($due_date_count>=3) {


          $new= new UserOpportunity();
          if($request->opp_type == "SmallValue"){
          $new->opp_type=$request->opp_type;
          $new->current_address=$request->current_address;
          $new->opp_title=$request->opp_title;
          $new->internal_reference=$request->internal_reference;

          if($request->has('general_radio') && $request->general_radio=='due_date_radio'){
          $new->due_date_radio = 1;
          }else{
          $new->due_date_radio = 0;
          }
          if($request->has('general_radio') && $request->general_radio =='bid_limit_radio'){
          $new->bid_limit_radio =1;
          }else{
          $new->bid_limit_radio = 0;
          }
          if($request->has('general_radio') && $request->general_radio=='urgent_opportunity'){
          $new->urgent_opp_radio = 1;
          }else{
          $new->urgent_opp_radio = 0;
          }

          $new->due_date=$request->due_date;
          $new->bid_limit=$request->bid_limit;
          $new->day_to_deliver=$request->day_to_deliver;
          $new->payment_days=$request->payment_day;
          $new->address=$request->address;
          $new->delivery_city=$request->delivery_city;
          $new->instruction=$request->instruction;
          $new->categories=$request->category_id;
          $new->bidder_location=$request->bidder_location;
          $new->province_id=$request->province_id;
          $new->city_id=$request->city_id;
          $new->fav_language=$request->fav_language;
          $new->user_id=Auth::user()->id;
          $new->save();

          }
          elseif($request->opp_type == "BigValue"){
         $new->opp_type=$request->opp_type;
         $new->current_address=$request->current_address;
          $new->opp_title=$request->opp_title;
          $new->internal_reference=$request->internal_reference;
          $new->due_date=$request->due_date;
          $new->address=$request->address;
          $new->delivery_city=$request->delivery_city;
          $new->instruction=$request->instruction;
          $new->categories=$request->category_id;
          $new->bidder_location=$request->bidder_location;
          $new->fav_language=$request->fav_language;
          $new->province_id=$request->province_id;
          $new->city_id=$request->city_id;
          $new->user_id=Auth::user()->id;
          $new->save();

          }
          $opp_id= $new->id;

      foreach($request->item as $key => $i){
        $new1=new OpportunityDetail();
        $new1->opp_id = $opp_id;
        $new1->item=$request->item[$key];
        $new1->description=$request->description[$key];
        $new1->quantity=$request->quantity[$key];
        $new1->user_id=Auth::user()->id;
        $new1->save();
      }




        $user=User::where('id',Auth::user()->id)->first();
        if (!empty($user)) {
          $email = $user->email;
           $token=$user->token;
           $data = ['email'=>$email,'token'=>$token];

           Mail::send('emails.opportunity_verify',['data'=>$data],function($mail) use ($email){
                $mail->to($email,'New Opportunity Created')->from("bidding@brotions.com")->subject("User Created Opportunity Successfully");
                });
        }

          toast('Your Opportunity Is Created Successfully && Kindly Check Your Email For Your Opportunity','success');
          return redirect()->back();
    }else{

    toast('Due Date Must Be Greater Then 3 Days','warning');
    return redirect()->back();



    }




  }



public function market_place(Request $request){
  
    $setting=FooterSetting::first();
    if(Auth::check()){
    $category=OpportunityCategory::get();
    $opportunity = UserOpportunity::select();

    if($request->has('data') && $request->data=='yes'){
    $opportunity = $opportunity->where('user_id','=',Auth::user()->id);

    }elseif($request->has('data') && $request->data=='no'){
     $opportunity = $opportunity->where('user_id','!=',Auth::user()->id);
    }
    elseif($request->has('data') && $request->data=='all'){
     $opportunity;
    }


    if($request->has('type') && $request->type=='SmallValue'){
    $opportunity = $opportunity->where('opp_type','=',$request->type);

    }elseif($request->has('type') && $request->type=='BigValue'){
     $opportunity = $opportunity->where('opp_type','=',$request->type);
    }
    elseif($request->has('type') && $request->type=='all'){
     $opportunity;
    }


    if($request->has('sortby') && $request->sortby=='date'){
    $opportunity = $opportunity->orderBy('created_at','Asc');

    }

     if(isset($request->opp_title)){
            $search = $request->opp_title;
           $opportunity = $opportunity->whereHas('user_opp_title' ,function ($query) use($search) {
                $query->where('opp_title', 'like', '%' . $search . '%');;
            });
      }

       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }

    $user_id = Auth::user()->id;

    $opportunity = $opportunity->orderBy('id', 'Desc')->with('user_opp_title','user_detail','user','opp_category')->with(['oppt_not_required' => function ($query) use($user_id) {
    $query->where('user_id', '=',$user_id );
    }])->paginate(6);

    $due_date_count=Null;

    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }

    return view('userpages.marketplace',compact('opportunity','category','setting'));
    }else{
      $category=OpportunityCategory::get();
      $opportunity = UserOpportunity::select();

       if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('opp_category' ,function ($query) use($search) {
                $query->where('categories', 'like', '%' . $search . '%');;
            });
      }
    $opportunity = $opportunity->orderBy('id', 'Desc')->with('user_opp_title','user_detail','user','opp_category')->paginate(6);
    $due_date_count=Null;
    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }
    
    return view('userpages.marketplace',compact('opportunity','category','setting'));
    }

  }




  public function opportunity_details($id)
  {
    $setting=FooterSetting::first();
    $opp_id=$id;
    if (Auth::check()) {
    $count=OpportunityCount::where('user_id',Auth::user()->id)->where('opp_id',$id)->first();
    if (empty($count)) {
    $count= new OpportunityCount();
    $count->opp_id=$opp_id;
    $count->click_count=1;
    $count->user_id=Auth::user()->id;
    $count->save();
    }
    $opportunity_details=UserOpportunity::where('id',$id)->with('opp_bidding','user_opp_title','user_detail','opp_category')->first();
     //dd($opportunity_details);
    $now = time();
    $your_date = strtotime($opportunity_details->due_date);
    $datediff =$your_date - $now  ;
    $due_date_count= round($datediff / (60 * 60 * 24)) ;


    $document=OpportunityDocument::where('opp_id',$id)->get();
    $user_doc=OpportunityDocument::where('opp_id',$id)->where('bidding_user_id',Auth::user()->id)->first();
    return view('userpages.opportunity_details',compact('opportunity_details','document','due_date_count','user_doc','setting'));
    }
    else{
    toast('For Detail You Have Must Login','warning');
    return redirect()->route('login');
    }



  }
  public function opportunity_details_documents_save(Request $request)
  {

    if (Auth::check()) {


          $input = $request->all();
          $request->validate([
          'document' => 'required',
          ]);

          if(isset($opportunty_details->opp_bidding) && $opportunity_details->bid_limit==$opportunity_details->opp_bidding->count()){
        $opportunity_details=UserOpportunity::where('id',$request->opp_id)->with('opp_bidding')->first();
        toast('Bidding Limit is Full','warning');
        return redirect()->back();
          }


          //same conidition


      if($request->hasfile('document'))
             {
                foreach($request->file('document') as $file)
                {
                $destinationPath = public_path()."/images/images/";
                $extension =  $file->getClientOriginalExtension();
                $filename_original = $file->getClientOriginalName();
                $fileName = time();
                $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                if(!$file->move($destinationPath,$filename_original))
                {
                throw new \Exception("Failed Upload");
                }
                $thumbnail = asset("/images/images/")."/".$filename_original;
                $data[] = asset("images/images")."/".$filename_original;
                $data_original[] = $filename_original;
                }
         }


              $opportunity=UserOpportunity::where('id',$request->opp_id)->first();
              if (!empty($opportunity)) {
                $check=UserOpportunity::where('user_id','=',Auth::user()->id)->first();
                if($check && $check->user_id==$request->user_id) {
                 toast('You are not allowed to bid this Opportunity','warning');
                return redirect()->back();
                }else{


                   $biddocument=OpportunityDocument::where('bidding_user_id','=',Auth::user()->id)->first();
                    if (empty($biddocument)) {

                  $new=new OpportunityDocument();
                  $new->opp_id=$request->opp_id;
                  $new->document_1=serialize($data);
                  $new->document_name_1=serialize($data_original);
                  $new->bidding_user_id=Auth::user()->id;
                  $new->user_id=$request->user_id;
                  $new->price=$request->price;
                  $new->category_id=$request->category_id;
                  $new->save();

                $user=User::where('id',Auth::user()->id)->first();
                $email = $user->email;
                $data = ['email'=>$email];
                Mail::send('emails.opp_bidding',['data'=>$data],function($mail) use ($email){
                $mail->to($email,'New Opportunity Bidding')->from("bidding@brotions.com")->subject("New Opportunity Bidding");
                });

                $bidding_user=UserOpportunity::where('user_id',$request->user_id)->where('id',$request->opp_id)->with('user')->first();
                  if (!empty($bidding_user)) {
                 $email = $bidding_user->user->email;
                 $bidding_title=$bidding_user->opp_title;
                $data = ['email'=>$email,'Bidding Title'=>$bidding_title];
                Mail::send('emails.user_opp_bidding',['data'=>$data],function($mail) use ($email){
                $mail->to($email,'User Bid On Opportunity')->from("bidding@brotions.com")->subject("User Bid On Opportunity");
                });

                  }


                   toast('Your document is saved Successfully For Bidding && Email is Sended To You ','success');
                   return redirect()->back();
                  }
                  else{
                    toast('You have Already Bid The Opportunity','warning');
                    return redirect()->back();
                  }
                }

                }

    else{
      toast('Kindly Please Login For Bidding');
      return redirect()->route('login');
    }

  }
}

  public function user_opportunity_delete($id)
  {

    $opportunity=UserOpportunity::where('id',$id)->where('user_id',Auth::user()->id)->delete();
    toast('Opportunity is Successfully Deleted','success');
    return redirect()->back();
  }

  public function opportunity_details_approve($id)
  {
    $setting=FooterSetting::first();
    $opportunity_details=UserOpportunity::where('id',$id)->where('user_id',Auth::user()->id)->with('user_opp_title','user_detail','opp_category')->first();
      $document=OpportunityDocument::where('opp_id',$id)->with('user')->get();

    $now = time();
    $your_date = strtotime($opportunity_details->due_date);
    $datediff =$your_date - $now  ;
    $date_count= round($datediff / (60 * 60 * 24)) ;

      return view('userpages.opportunity_approve',compact('opportunity_details','document','date_count','setting'));

  }

  public function opportunity_bidding_approve(Request $request)
  {

      $approve_opt=OpportunityDocument::where('opp_id',$request->opp_id)->first();
      if ($approve_opt && $approve_opt->status=='0') {
          $approve_opt->status=1;
          $approve_opt->save();

     $user_email=UserOpportunity::where('id',$request->opp_id)->with('user','user_opp_title')->first();
         $email = $user_email->user->email;
         $title = $user_email->user_opp_title->opp_title;
             $reference = $user_email->internal_reference;
                $data = ['email'=>$email,'title'=>$title,'Reference'=>$reference,];
                Mail::send('emails.verify_mail_bidding',['data'=>$data],function($mail) use ($email){
                $mail->to($email,'Bidding Approved Verification')->from("bidding@brotions.com")->subject("Bidding Approved Verification");
                });

       toast('Bidding is Approved Kindly Check your Email For Bidding Approved Verification','success');

          return redirect()->back();
      }
    else{
   toast('Bidding is Already Awarded To User','warning');
        return redirect()->back();
    }


  }
  public function bid_management(Request $request)
  {
    $setting=FooterSetting::first();
    $user_id=Auth::user()->id;
    $category=OpportunityCategory::get();

    $opportunity = OpportunityDocument::select();

     if(isset($request->category)){
            $search = $request->category;

           $opportunity = $opportunity->whereHas('category' ,function ($query) use($search) {
                $query->where('category_id', 'like', '%' . $search . '%');;
            });
      }
     if(isset($request->opp_title)){
            $search = $request->opp_title;
           $opportunity = $opportunity->whereHas('opp_detail.user_opp_title' ,function ($query) use($search) {
                $query->where('opp_title', 'like', '%' . $search . '%');;
            });
      }



    if($request->has('sortby') && $request->sortby=='date'){
    $opportunity = $opportunity->orderBy('created_at','Asc');

    }



    if($request->has('type') && $request->type=='SmallValue'){
         $search=$request->type;
     $opportunity = $opportunity->whereHas('opp_detail' ,function ($query) use($search) {
                $query->where('opp_type', 'like', '%' . $search . '%');;

            });

    }elseif($request->has('type') && $request->type=='BigValue'){
    $search=$request->type;
    $opportunity = $opportunity->whereHas('opp_detail' ,function ($query) use($search) {
      $query->where('opp_type', 'like', '%' . $search . '%');;
            });
    }






    $opportunity=$opportunity->where('bidding_user_id',Auth::user()->id)->with('user_detail','opp_detail.user','opp_count')->with('opp_detail.user_opp_title','opt_not_required')->orderBy('id','Desc')->paginate(6);




    foreach($opportunity as $o){
    $now = time();
    $your_date = strtotime($o->opp_detail->due_date);
    $datediff =$your_date - $now  ;
    $o->due_date= round($datediff / (60 * 60 * 24)) ;
    }

    $bid_count=OpportunityDocument::where('bidding_user_id',Auth::user()->id)->count();
   $bid_award=OpportunityDocument::where('bidding_user_id',Auth::user()->id)->where('status','=',1)->count();
    if ($bid_award !=0) {
     $average=($bid_award/$bid_count)*100;
     }
     else{
      $average=0;
     }
    return view('userpages.bid_management',compact('opportunity','bid_count','bid_award','average','category','setting'));
  }

  public function bidding_opportunity_details($id,$opp_id)
  {

  $setting=FooterSetting::first();
    $opportunity_details=UserOpportunity::where('id',$opp_id)->with('opp_bidding','user_detail','user_opp_title','opp_category')->first();
    //dd($opportunity_details);
    $document=OpportunityDocument::where('id',$id)->first();

    return view('userpages.bidding_opportunity_details',compact('opportunity_details','document','setting'));
  }


  public function user_business()
  {
    $setting=FooterSetting::first();
    $user=User::where('id',Auth::user()->id)->with('user_detail')->first();
    $det=Details::first();
    return view('userpages.business',compact('user','det','setting'));
  }

  public function profile_update()
  {
    $user=User::where('id',Auth::user()->id)->first();
    return view('userpages.profile_update',compact('user'));
  }
  public function user_profile_update(Request $request)
  {


          $input = $request->all();
          $request->validate([
          'email' => 'required|email|exists:users,email',
          'phone' => 'max:15',
           'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
           'password_confirmation' => 'min:6',
           'gender'=>'required',
           'account_type'=>'required',
           'region'=>'required',
           'city'=>'required',

          ]);
   $user=User::where('id',Auth::user()->id)->where('token',$request->token)->first();
   if (!empty($user)) {
      $user->email=$request->email;
      $user->phone=$request->phone;
      $user->password=bcrypt($request->new_password);
      $user->gender=$request->gender;
      $user->account_type=$request->account_type;
      $user->region=$request->region;
      $user->city=$request->city;
      $user->save();
      toast('Your Profile Is Updated Successfully','success');
      return redirect()->route('user-business');


   }
  }

  public function print_opportunity_detail($id)
  {


    $opportunity_details=UserOpportunity::where('id',$id)->with('opp_bidding','user_opp_title','user_detail')->first();
    $now = time();
    $your_date = strtotime($opportunity_details->due_date);
    $datediff =$your_date - $now  ;
     $due_date_count= round($datediff / (60 * 60 * 24)) ;


    $document=OpportunityDocument::where('opp_id',$id)->get();
    $user_doc=OpportunityDocument::where('opp_id',$id)->where('bidding_user_id',Auth::user()->id)->first();
    return view('userpages.print_opportunity_detail',compact('opportunity_details','document','due_date_count','user_doc'));
  }


  public function opp_not_required($id)
  {
    if (Auth::check()) {

    $opp_id=$id;
    $count=OpportunityNotRequired::where('user_id',Auth::user()->id)->where('opp_id',$id)->first();
    if (empty($count)) {

      $count= new OpportunityNotRequired();
      $count->opp_id=$opp_id;
     $count->not_required=1;
     $count->user_id=Auth::user()->id;
     $count->save();
     toast('You Have Successfully Not Required Opportunity','success');
    }else{
      toast('You Have AllReady Click Not Required Opportunity','warning');
    }

    return redirect()->back();


  }
  else{
     toast('For Not Required Opportunity You Must Be Login','warning');
     return redirect()->route('login');
  }

}



public function opp_change_due_date(Request $request)
{
   if (Auth::check()) {
   $duedatecheck=$request->due_date;

    $now = time();
    $your_date = strtotime($duedatecheck);
    $datediff =$your_date - $now  ;
     $due_date_count= round($datediff / (60 * 60 * 24)) ;
    if ($due_date_count>3) {
        $update=UserOpportunity::where('id',$request->opp_id)->where('user_id',Auth::user()->id)->first();
        if (!empty($update)) {
           $update->due_date=$request->due_date;
           $update->save();
           toast('Due Date is Changed Successfully','success');
           return redirect()->back();
        }
    }else{
      toast('Due Date is Must Greater then 3 Days','warning');
      return redirect()->back();
    }

   }else{
    toast('You Are Not ALlowed To Changed Due Date Kindly Login','warning');
     return redirect()->route('login');
   }
}

public function user_personal_info_save(Request $request)
{
  $user=User::where('id',Auth::user()->id)->first();
  if (!empty($user)) {
    $user->personal_info=$request->personalinfo;
    $user->save();
    toast('Personal Information is Saved Successfully','success');
    return redirect()->route('user-business');
  }
}



}

