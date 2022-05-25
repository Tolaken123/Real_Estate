<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected  $fillable =['name','rentalprice','bedroom','bathroom','floor','landsize','dimension','houseno','street','maplocation','description','image_id'];
   
     public function Images(){
         return $this->belongsTo(Image::class,'image_id');
     }
}
