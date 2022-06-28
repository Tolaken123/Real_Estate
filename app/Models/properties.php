<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable =['name','province_id','district_id','commune_id','village_id','listing_type','price','bedroom','bathroom','floor','landsize','dimension','maplocation','description',];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
