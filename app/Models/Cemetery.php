<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;                       
use Illuminate\Database\Eloquent\Relations\HasOne;                       

class Cemetery extends Model
{
    use HasFactory;


    public function cemeteryArea(): BelongsTo
    {
        return $this->belongsTo(CemeteryArea::class);
    }
    
    public function cemeteryGroup(): HasOne
    {
        return $this->hasOne(CemeteryGroup::class);
    }

}
