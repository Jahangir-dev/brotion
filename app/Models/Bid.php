<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tender_id', 'price', 'document', 'vat', 'approved', 'created_at', 'updated_at', 'approved_by', 'approved_at'
    ];

    public function bidder()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
