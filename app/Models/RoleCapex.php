<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleCapex extends Model
{
    //
    protected $table = 'capex_acceptance';

    protected $fillable = [        
        'nopeg',
        'acc',
        'company',
        'ka',
        'year',
        'status',
    ];

}
