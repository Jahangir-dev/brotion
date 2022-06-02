<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','services', 'tender_category', 'tender_title','ref_no','payment_method','payment_days','due_date',
        'purchase_cond','delivery_city','complete'
    ];

    public function city()
   {
      return $this->hasOne('App\Models\city','id','delivery_city');
   }

   public function user()
    {
        return $this->belongsTo(User::class);
    }

   public function category()
   {
      return $this->hasOne('App\Models\OpportunityCategory','id','tender_category');
   }

   public function items()
   {
      return $this->hasOne('App\Models\TenderItem','tender_id','id');
   }

   public function bids()
    {
        return $this->hasMany(Bid::class);
        // return $this->hasMany('App\Models\Tender','user_id','id');
    }
}
