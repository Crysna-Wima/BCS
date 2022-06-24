<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Plant extends Model
{
    // use HasFactory;

    protected $table = 'm_plant';

    protected $fillable = [        
        'plant',
        'description',
        'category',
        'type',
        'parenth1',
        'cc1',
        'costcenter',
        'sender_bag',
        'parenth2',
        'status',
        'cc2',
    ];
}

