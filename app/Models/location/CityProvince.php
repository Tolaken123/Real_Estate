<?php

namespace App\Models\location;

use Illuminate\Database\Eloquent\Model;

class CityProvince extends Model
{
    protected $table = 'city_province';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_kh',
    ];

    public function districs()
    {
        return $this->hasMany(District::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
