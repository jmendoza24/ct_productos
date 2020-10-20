<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class categorias extends Model
{
    

    public $table = 'cat_categorias';
    
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    
}
