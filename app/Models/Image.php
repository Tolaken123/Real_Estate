<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image_path'
    ];
    // public function rents(){
    //     return $this->hasMany(Rent::class,'image_id');
    // }
}
