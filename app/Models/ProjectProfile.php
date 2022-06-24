<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class ProjectProfile extends Model
{
    
    protected $table = 'm_project_profile';

    protected $fillable = [        
        'project_profile',
        'description',
        'posting_date',
        // 'create_by',
        // 'last_update',
        // 'update_by',
        'status',
        'company',
        'type_inv',
    ];
}