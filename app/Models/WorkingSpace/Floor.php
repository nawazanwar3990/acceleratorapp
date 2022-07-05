<?php

namespace App\Models\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\ServiceManagement\Service;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'building_id',
        'type_id',
        'name',
        'number',
        'length',
        'width',
        'area',
        'height',
        'price',
        'longitude',
        'latitude',
        'no_of_shops_flats',
        'created_by',
        'updated_by',
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

    public function type(): BelongsTo
    {
        return $this->belongsTo(FloorType::class, 'type_id');
    }
    public function flats(): HasMany
    {
        return $this->hasMany(Flat::class);
    }
    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'building_id');
    }
    public function images(): HasMany
    {
        return $this->hasMany(Media::class,'record_id')
            ->where('record_type',MediaTypeEnum::FLOOR_IMAGE);
    }
    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::FLOOR_OWNER, 'floor_id', 'hr_id')
            ->withPivot(
                'created_by',
                'updated_by'
            )
            ->withTimestamps();
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLOOR_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by',
                'price'
            )
            ->withTimestamps();
    }
    public function all_general_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLOOR_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by',
                'price'
            )
            ->withTimestamps()
            ->where('floor_service.type',ServiceTypeEnum::GENERAL_SERVICE);
    }

    public function all_security_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLOOR_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by',
                'price'
            )
            ->withTimestamps()
            ->where('floor_service.type',ServiceTypeEnum::SECURITY_SERVICE);
    }
}
