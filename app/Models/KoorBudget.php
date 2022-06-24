<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class KoorBudget extends Model
{
    // use HasFactory;

    protected $table = 'm_koor_budget';

    protected $fillable = [        
        'koor_budget',
        'description',
        'costcenter',
        'parenth1',
        'status',
        'company',
        'capex',
    ];
}