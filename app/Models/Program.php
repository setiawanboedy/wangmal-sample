<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    public $table = 'programs';

    public $fillable = [
        'name'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        
    ];

    
}
