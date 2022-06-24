<?php

namespace App\Models\location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = [
        'commune_id', 'name', 'name_kh'
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
