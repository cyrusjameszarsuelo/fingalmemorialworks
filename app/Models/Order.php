<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    // protected $fillable=[
    //                         'order_id',
    //                         'order_type_id ',
    //                         'branch_id ',
    //                         'deceased_name',
    //                         'date_of_death',
    //                         'order_headline',
    //                         'cemetery_id ',
    //                         'plot_grave',
    //                         'inscription_completed',
    //                         'job_was_fixed_on',
    //                         'source_id',
    //                         'category_id',
    //                         'special_instructions',
    //                         'status_id',
    //                         'customer_id',
    //                         'grave_space_id',
    //                         'created_by',
    //                         'updated_by',
    //                         'deleted_by'
    //                     ];
    

    public function orderType(): BelongsTo
    {
        return $this->belongsTo(OrderType::class);
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function cemetery(): BelongsTo
    {
        return $this->belongsTo(Cemetery::class);
    }
    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class);
    }

    public function graveSpace(): BelongsTo
    {
        return $this->belongsTo(GraveSpace::class);
    }


}
