<?php

namespace App\Models\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\Services\Service;
use App\Models\Users\Hr;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'area',
        'length',
        'width',
        'building_type',
        'entry_gates',
        'no_of_floors',
        'facing',
        'documents',
        'images',
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

    public function flats(): HasMany
    {
        return $this->hasMany(Office::class);
    }

    public function floors(): HasMany
    {
        return $this->hasMany(Floor::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id')
            ->where('record_type', MediaTypeEnum::BUILDING_IMAGE);
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::BUILDING_OWNER)->withTimestamps();
    }
}
