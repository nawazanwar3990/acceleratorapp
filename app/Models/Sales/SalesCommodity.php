<?php

namespace App\Models\Sales;

use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesCommodity extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'sale_id',
        'type',
        'size',
        'unit',
        'construction_status',
        'property_type',
        'price',
        'total_price',
        'in_form_of',
        'model',
        'make',
        'color',
        'chassis_no',
        'reg_no',
        'remarks',
        'created_by',
        'updated_by',
        'deleted_by',
        'building_id',
    ];



    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function sales(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
