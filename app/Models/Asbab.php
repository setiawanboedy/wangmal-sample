<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asbab extends Model
{
    use HasFactory;
    public $table = 'asbabs';
    protected $fillable = [
        'nip',
        'name',
        'gender',
        'division',
        'hp',
    ];

    public static array $rules = [
        'nip' => 'required',
        'name' => 'required',
        'gender'=>'required',
        'division'=>'required',
        'hp'=>'required',
    ];
}
