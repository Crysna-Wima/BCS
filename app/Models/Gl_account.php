<?php

namespace App\Models;
use DB;


use Illuminate\Database\Eloquent\Model;

class Gl_account extends Model
{
    //
    protected $table = 'm_gl_account';

    protected $fillable = [        
        'gl_account',
        'description',
        'account_type',
        'parenth1',
        'parenth2',
        'parenth3',
        'status',
        'costcenter_allocation',
        'parenth4',
    ];

}
