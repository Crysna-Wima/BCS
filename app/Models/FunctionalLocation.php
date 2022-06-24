<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunctionalLocation extends Model
{
    //
    protected $table = 'm_functional_location';

    protected $fillable = [        
        'functional_location',
        'description',
        'costcenter',
        'area',
        'company',
        'plant',
        'parenth1',
        'status',
    ];

}
