<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'title', 'description', 'sale_exp', 'active'
    ];
    
    /**
    * The attributes that should be cast.
    *
    * @var array
    */
    protected $casts = [
        'active'      =>    'boolean',
        'sale_exp'    =>    'datetime:Y/m/d h:i:s'
    ];
}
