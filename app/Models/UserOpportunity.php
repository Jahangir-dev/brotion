<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOpportunity extends Model
{
    use HasFactory;
    protected $table='user_opportunity';
    public function opp_bidding()
    {
        return $this->hasMany('App\Models\OpportunityDocument','opp_id','id');
    }
    public function opp_count()
    {
        return $this->hasMany('App\Models\OpportunityCount','opp_id','id');
    }
   

    public function user()
    {
      return $this->hasOne('App\Models\User','id','user_id');  
    }

    public function oppt_not_required()
    {
      return $this->hasOne('App\Models\OpportunityNotRequired','opp_id','id');  
    }
    public function user_opp_title()
    {
      return $this->hasOne('App\Models\OpportunityTitle','id','opp_title');  
    }
    public function user_detail()
    {
      return $this->hasOne('App\Models\UserDetails','user_id','user_id');  
    }

    public function opp_category()
    {
      return $this->hasOne('App\Models\OpportunityCategory','id','categories');  
    }

}
