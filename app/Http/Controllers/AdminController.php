<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Models\UserOpportunity;
use App\Models\OpportunityTitle;
use Auth;
use App\Models\Sector;
use App\Models\City;
use App\Models\Provinces;
use App\Models\Details;
use App\Models\OpportunityCategory;
use App\Models\FooterSetting;

class AdminController extends Controller
{
    public function admin_home()
    {
      $user=User::where('login_status',1)->paginate(10);
       return view('admin.adminhome',compact('user'));
    }

    public function user_delete($id,$role)
    {
      
          if($role=='admin'){
           toast('Admin Account cannot be Delete','warning');
           return redirect()->back();
          }else{
           $user_delete=User::where('id',$id)->delete();
           $user=DB::table('role_users')->where('user_id', $id)->delete();
           toast('Account Is Deleted Successfully','success');
           return redirect()->back();
          }
    }


    public function user_bidding()
    {
       $opportunity=UserOpportunity::orderBy('id','Desc')->with('user_detail','user_opp_title')->paginate(10);
       return view('admin.user_bidding_list',compact('opportunity'));
    }

    public function admin_user_bidding_delete($id)
    {
       $delete=UserOpportunity::where('id',$id)->delete();
       toast('User Opportunity Is Deleted ','success');
       return redirect()->back();
    }

    public function opportunity_title_list()
    {
        $opportunity_title_list=OpportunityTitle::paginate(10);
      return view('admin.opportunity_title_list',compact('opportunity_title_list'));   
    }
    public function admin_opportuninty_title()
    {
     return view('admin.admin_opportuninty_title');    
    }
    public function opportunity_title_save(Request $request)
    {
       $new=new OpportunityTitle();
       $new->user_id=Auth::user()->id;
       $new->opp_title=$request->title;
       $new->save();
       toast('Your Opportunity title is Saved Successfully','success');
       return redirect()->route('opportunity-title-list');
    }
    public function admin_opportuninty_title_edit($id)
    {
      $edit=OpportunityTitle::where('id',$id)->first();
      return view('admin.admin_opportuninty_title_edit',compact('edit'));
    }
    public function opportunity_title_update(Request $request)
    {
        $update=OpportunityTitle::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->opp_title=$request->title;
            $update->save();

        }
        toast('Your Opportunity title is Updated Successfully','success');
       return redirect()->route('opportunity-title-list');
    }
    public function admin_opportuninty_title_delete($id)
    {
        $delete=OpportunityTitle::where('id',$id)->delete();
          toast('Your Opportunity title is Deleted Successfully','success');
          return redirect()->back();
    }

    public function sector_list()
    {
      $sector_list=Sector::with('cities')->paginate(10);
      return view('admin.sector_list',compact('sector_list')); 
    }
    public function admin_add_sector()
    {
        $city=City::get();
     return view('admin.admin_add_sector',compact('city'));    
    }
    public function admin_sector_save(Request $request)
    {
        //dd($request);
        $new=new Sector();
       $new->user_id=Auth::user()->id;
       $new->name=$request->name;
       $new->city_id=$request->city_id;
       $new->save();
       toast('Your Sector is Saved Successfully','success');
       return redirect()->route('sector-list');
    }
    public function sector_edit($id)
    {
     $edit=Sector::where('id',$id)->first();
     $cities=City::get();
      return view('admin.sector_edit',compact('edit','cities'));   
    }

    public function admin_sector_update(Request $request)
    {
        
        $update=Sector::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->name=$request->name;
            $update->city_id=$request->city_id;
            $update->save();

        }
        toast('Your Sector Name is Updated Successfully','success');
       return redirect()->route('sector-list');
    }
    public function admin_sector_delete($id)
    {
     
     $delete=Sector::where('id',$id)->delete();
     toast('Your Sector is Deleted Successfully','success');
     return redirect()->back();
         
    }
    public function city_list()
    {
      $city=City::orderBy('id','Desc')->with('province')->paginate(10);  
     return view('admin.city_list',compact('city')); 
    }
    public function admin_add_new_city()
    {
        $province=Provinces::get();
     return view('admin.admin_add_new_city',compact('province'));  
    }
    public function admin_city_save(Request $request)
    {
        $new=new City();
       $new->user_id=Auth::user()->id;
       $new->name=$request->name;
       $new->province_id=$request->province;
       $new->save();
       toast('Your City is Saved Successfully','success');
       return redirect()->route('city-list');

    }
    public function admin_city_edit($id)
    {
       $edit=City::where('id',$id)->first();
       $province=Provinces::get();
       return view('admin.admin_city_edit',compact('edit','province'));
    }
    public function admin_city_update(Request $request)
    {
       $update=City::where('id',$request->id)->first();
       if (!empty($update)) {
        $update->user_id=Auth::user()->id;
       $update->name=$request->name;
       $update->province_id=$request->province_id;
       $update->save();
       }
       toast('Your City is Updated Successfully','success');
       return redirect()->route('city-list');

    }
    public function admin_city_delete($id)
    {
     $delete=City::where('id',$id)->delete();
     toast('Your City is Deleted Successfully','success');
     return redirect()->back();
    }

    public function province_list()
    {
        $province_list=Provinces::paginate(10);
     return view('admin.province_list',compact('province_list'));   
    }

    public function add_new_province()
    {
     return view('admin.add_new_province');
    }


    public function admin_province_save(Request $request)
    {
        $new=new Provinces();
       $new->user_id=Auth::user()->id;
       $new->name=$request->name;
       $new->save();
       toast('Your Province is Saved Successfully','success');
       return redirect()->route('province-list');
    }

    public function province_edit($id)
    {
       $edit=Provinces::where('id',$id)->first();
      // dd($edit);
       return view('admin.province_edit',compact('edit'));
    }

    public function admin_province_update(Request $request)
    {
        
      $update=Provinces::where('id',$request->id)->first();
      if (!empty($update)) {
          $update->name=$request->name;
          $update->save();
      }
      toast('Your Province is Updated Successfully','success');
       return redirect()->route('province-list');
    }

    public function province_delete($id)
    {
        $delete=Provinces::where('id',$id)->delete();
        toast('Your Province is Deleted Successfully','success');
        return redirect()->back();
    }


    public function testing_list()
    {
        $province=Provinces::get();
       return view('admin.testing_list',compact('province'));
    }


     public function getcity(Request $request)
    {
        $city=City::where('province_id',$request->province_id)->get();
         return response()->json($city);
    }
    public function getsector(Request $request)
    {
        $sector=Sector::where('city_id',$request->city_id)->get();
       return response()->json($sector);
    }

    public function admin_details()
    {
     $detail=Details::orderBy('id','Desc')->first();
     return view('admin.admin_details',compact('detail'));   
    }

    public function add_details()
    {
     $det=Details::orderBy('id','Desc')->first();
     return view('admin.add_details',compact('det'));   
    }
    public function admin_details_save(Request $request)
    {
     $new=Details::where('id',$request->id)->first();
     if (empty($new)) {
     $new= new Details();
     $new->details=$request->details;
     $new->save();         
     }else{
     $new->details=$request->details;
      $new->save();
     }

     toast('Your Details is Saved Successfully','success');
     return redirect()->route('admin-details');
    } 

    public function admin_detail_edit($id)
    {
     $edit=Details::where('id',$id)->first();
     return view('admin.admin_detail_edit',compact('edit'));   
    }

    public function admin_detail_update(Request $request)
    {
        $update=Details::where('id',$request->id)->first();
        if (!empty($update)) {
          $update->details=$request->details;
     $update->save();
     toast('Your Details is Updated Successfully','success');
     return redirect()->route('admin-details');    
        }
    }


    public function admin_detail_delete($id)
    {
      $delete=Details::where('id',$id)->delete();
      toast('Your Details is Deleted Successfully','success');
      return redirect()->back();
    }

    public function opportunity_category_list()
    {
        $category=OpportunityCategory::paginate(10);
      return view('admin.opportunity_category_list',compact('category'));
    }

    public function add_new_opp_category()
    {
     return view('admin.add_new_opp_category'); 
    }


    public function admin_category_save(Request $request)
    {

    $new= new OpportunityCategory();
    $new->name=$request->name;
    $new->save();
    toast('Opportunity Cateory is Created Successfully','success');
    return redirect()->route('opportunity-category-list');

    }

    public function opp_category_delete($id)
    {
      $delete=OpportunityCategory::where('id',$id)->delete();
      toast('Opportunity Cateory Is Deleted Successfully','success');
      return redirect()->back();
    }

    public function opp_category_edit($id)
    {
     $edit=OpportunityCategory::where('id',$id)->first();
     
      return view('admin.opp_category_edit',compact('edit'));
    }

    public function admin_category_update(Request $request)
    {
       $update=OpportunityCategory::where('id',$request->id)->first();
       if (!empty($update)) {
        $update->name=$request->name;
        $update->save();
       }
       toast('Opportunity Cateory Is Updated Successfully','success');
       return redirect()->route('opportunity-category-list');
    }

    public function footer_setting()
    {
        $setting=FooterSetting::first();
      return view('admin.footer_setting',compact('setting'));
    }


    public function footer_setting_save(Request $request)
    {
      $new=FooterSetting::where('id',$request->id)->first();
      if (empty($new)) {
        $new=new FooterSetting();
         $new->label1=$request->label1;
         $new->label2=$request->label2;
         $new->label3=$request->label3;
         $new->label4=$request->label4;
         $new->label5=$request->label5;
         $new->label6=$request->label6;
         $new->label7=$request->label7;
         $new->label8=$request->label8;
         $new->label9=$request->label9;
         $new->label10=$request->label10;
         $new->label11=$request->label11;
         $new->label12=$request->label12;
         $new->save();
      }else{
       $new->label1=$request->label1;
         $new->label2=$request->label2;
         $new->label3=$request->label3;
         $new->label4=$request->label4;
         $new->label5=$request->label5;
         $new->label6=$request->label6;
         $new->label7=$request->label7;
         $new->label8=$request->label8;
         $new->label9=$request->label9;
         $new->label10=$request->label10;
         $new->label11=$request->label11;
         $new->label12=$request->label12;
         $new->save();
      }
      toast('FooterSetting Is Saved Successfully','success');
      return redirect()->back();


    }

    public function footer_setting_delete($id)
    {
    $delete=FooterSetting::where('id',$id)->delete();
    toast('Footer Setting Clear Successfully','success');
    return redirect()->back();
    }
}

