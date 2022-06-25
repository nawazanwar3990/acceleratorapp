<?php

namespace App\Models\FixedAssets;

use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\HumanResource\Hr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetsInventory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'asset_code',
        'asset_name',
        'quantity',
        'series_model',
        'assets_unit_id',
        'assets_group_id',
        'hr_id',
        'assets_location_id',
        'date_of_purchase',
        'warranty_period',
        'unit_price',
        'depreciation',
        'description',
        'attachment',

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



    public function assetsUnit(): BelongsTo
    {
        return $this->belongsTo(AssetsUnit::class);
    }

    public function hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class);
    }

    public function assetsLocation(): BelongsTo
    {
        return $this->belongsTo(AssetsLocation::class);
    }
}
