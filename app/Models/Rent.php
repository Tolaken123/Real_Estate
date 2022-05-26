<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected  $fillable =['name','rentalprice','bedroom','bathroom','floor','landsize','dimension','houseno','street','maplocation','description',];
   
     public function Image(){
         return $this->hasMany(Image::class);
     }
}
