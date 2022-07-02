<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'record_id',
        'record_type',
        'created_by',
        'updated_by',
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

    public function building_images(): HasMany
    {
        return $this->hasMany(Building::class, 'record_id', 'id')->where('record_type', MediaTypeEnum::BUILDING_IMAGE);
    }

    public function floor_images(): HasMany
    {
        return $this->hasMany(Floor::class, 'record_id', 'id')->where('record_type', MediaTypeEnum::FLOOR_IMAGE);
    }

    public function flat_images(): HasMany
    {
        return $this->hasMany(Flat::class, 'record_id', 'id')->where('record_type', MediaTypeEnum::FLAT_IMAGE);
    }
}
