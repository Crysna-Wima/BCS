<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Company extends Model
{
    
    protected $table = 'm_company';

    protected $fillable = [        
        'company',
        'description',
        'parenth1',
        'parenth2',
        'status',
        'short_description',
        'short_hr',
        'short_desc_inventory',
        'dirut_name',
        'menu',
        'logo',
        // 'created_at',
        // 'updated_at',
    ];
}
