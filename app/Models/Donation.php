<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use SoftDeletes;
    public $table = 'donations';

    public $fillable = [
        'program_id',
        'asbab_id',
        'nominal',
        'gender',
        'name',
        'date'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        
    ];
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%");
    }
    
    public function program()
    {
        return $this->belongsTo(Program::class)->withTrashed();
    }
    public function asbab()
    {
        return $this->belongsTo(Asbab::class)->withTrashed();
    }
}
