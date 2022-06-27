<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestType extends Model
{
    //
    protected $table = 'm_invest_type';

    protected $fillable = [        
        'tipe_investasi',
        'description',
        'type_investasi_act',
        'capex_type',
    ];

}
