<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asbab extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $table = 'asbabs';
    protected $fillable = [
        'nip',
        'name',
        'gender',
        'target',
        'hp',
    ];

    public static array $rules = [
        'nip' => 'required',
        'name' => 'required',
        'gender'=>'required',
        'target'=>'required',
        'hp'=>'required',
    ];
}
