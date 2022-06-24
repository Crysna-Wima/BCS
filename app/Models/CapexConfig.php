<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class CapexConfig extends Model
{
    
    protected $table = 'm_capex_config';

    protected $fillable = [        
        'status',
        'company',
        'description',
        // 'create_by',
        // 'last_update',
        // 'update_by',
        'year',
        'create_by',
        'create_date',
        'update_by',
        'update_date',
        'type',
    ];
}