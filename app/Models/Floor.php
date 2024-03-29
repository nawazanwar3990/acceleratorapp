<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
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
        'name',
        'number',
        'type_id',
        'no_of_offices',
        'length',
        'width',
        'height',
        'area',
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

    public function offices(): HasMany
    {
        return $this->hasMany(Office::class);
    }

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'building_id');
    }
    public function images(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id')
            ->where('record_type', MediaTypeEnum::FLOOR_IMAGE);
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(User::class, TableEnum::FLOOR_OWNER, 'floor_id', 'user_id')
            ->withPivot(
                'created_by',
                'updated_by'
            )
            ->withTimestamps();
    }
    public function getOwnerName(): string
    {
        return $this->owners[0]->getFullName()??'';
    }
    public function getOwnerId(): string
    {
        return $this->owners[0]->id??'';
    }
}
