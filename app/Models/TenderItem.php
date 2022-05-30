<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'tender_id','items', 'sow', 'document','document_file'
    ];
}
