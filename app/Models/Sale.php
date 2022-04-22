<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $filible=
    [
        'id',
        'name',
        'saleprice',
        'bedroom',
        'bathroom',
        'housesize',
        'dimension',
        'street ',
        'maplocation',
        'description',

        
        
    ];
}
