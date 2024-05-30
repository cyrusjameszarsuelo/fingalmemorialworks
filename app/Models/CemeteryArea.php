<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CemeteryArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name'
    ];
}
