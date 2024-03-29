<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
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
        'document_type',
        'document_description',
        'created_by',
        'updated_by',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class, 'record_id', 'id');
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
        return $this->hasMany(Office::class, 'record_id', 'id')->where('record_type', MediaTypeEnum::FLAT_IMAGE);
    }
}
