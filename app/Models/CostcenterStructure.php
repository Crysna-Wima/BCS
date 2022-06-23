<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class CostcenterStructure extends Model
{
    
    protected $table = 'm_costcenter_structure';

    protected $fillable = [        
        'directorat',
        'departement',
        'pic',
        'company',
        'created_by',
        'updated_by',
        'status',
        'kadir',
        'unit_kerja',
        'year',
    ];
}
