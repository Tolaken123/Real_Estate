<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id', 'name', 'name_kh'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
