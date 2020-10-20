<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class tallas extends Model
{
    

    public $table = 'tallas';
    
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    
}
