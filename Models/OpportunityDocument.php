<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityDocument extends Model
{
    use HasFactory;
    protected $table='user_opportunity_documents';

   public function user()
   {
      return $this->hasOne('App\Models\User','id','bidding_user_id');
   }

   public function user_detail()
   {
      return $this->hasOne('App\Models\UserDetails','user_id','user_id');
   }
   public function opp_detail()
   {
    return $this->hasOne('App\Models\UserOpportunity','id','opp_id');  
   }
   public function opp_count()
    {
        return $this->hasMany('App\Models\OpportunityCount','opp_id','opp_id');
    }

     public function category()
    {
        return $this->hasMany('App\Models\OpportunityCategory','id','category_id');
    }

    public function opt_not_required()
    {
      return $this->hasOne('App\Models\OpportunityNotRequired','opp_id','opp_id');  
    }


    public function opp_value()
    {
      return $this->hasMany('App\Models\UserOpportunity','id','opp_id');
    }

    
    
}
