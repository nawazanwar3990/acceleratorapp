<?php

namespace App\Models;

use App\Models\Definition\General\FlatType;
use App\Models\RealEstate\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['creation_date'];
    protected $casts = [
        'general_services' => 'array',
        'security_services' => 'array',
    ];

    protected $fillable = [
        'floor_id',
        'flat_name',
        'flat_number',
        'flat_type_id',
        'creation_date',
        'status',
        'sales_status',
        'facing',
        'view',
        'accommodation',
        'furnished',
        'furnished_details',
        'general_services',
        'security_services',
        'length',
        'width',
        'area',
        'height',
        'purchase_rate_square_feet',
        'purchase_price',
        'rate_type',
        'rate_square_feet',
        'total_amount',
        'created_by',
        'updated_by',
        'building_id',
    ];



    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function flatType(): BelongsTo
    {
        return $this->belongsTo(FlatType::class);
    }

    public function owners(): HasMany
    {
        return $this->hasMany(FlatOwner::class);
    }

    public function getNameNumberAttribute()
    {
        return ($this->flat_name . ' [' . $this->flat_number . ']');
    }
}
