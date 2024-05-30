<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CemeteryGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name'
    ];
}
