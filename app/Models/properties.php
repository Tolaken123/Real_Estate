<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    use HasFactory;
    protected $filible=
    [
        'name',
        'phone',
        'email',
        'house',
        'street',
        'tourist',
        'hospital',
        'bank',
        'shopping',
        'resturant',
        'datetime',
        'date',
        'month',
        'week',
        'time'
    ];
}
