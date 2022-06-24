<?php

namespace App\Models\location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id', 'name', 'name_kh'
    ];

    /**
     *
     * Get villages's commune by district
     * Sumary a district can get your village directly
     * return array
     *
     */
    public function villages()
    {
        return $this->hasManyThrough(Village::class, Commune::class, 'district_id', 'commune_id', 'id', 'id');
    }

    public function city_province()
    {
        return $this->belongsTo(CityProvince::class, 'province_id');
    }

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
