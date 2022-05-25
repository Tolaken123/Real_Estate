<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['files','rent_id'];
    public function rent(){
        return $this->belongsTo(Rent::class,'rent_id');
    }
}
