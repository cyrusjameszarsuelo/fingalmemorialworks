<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;


    protected $fillable =[
        'code',
        'name',
        'address1',
        'address2',
        'address3',
        'postcode',
        'town',
        'county',
        'phone'

    ];
}
