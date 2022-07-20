<?php

namespace App\Models\WorkingSpace;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\Plans\Plan;
use App\Models\Subscriptions\Subscription;
use App\Models\Users\Hr;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['creation_date'];
    protected $fillable = [
        'building_id',
        'floor_id',
        'type_id',
        'name',
        'number',
        'status',
        'view',
        'sitting_capacity',
        'furnished',
        'furnished_detail',
        'length',
        'width',
        'area',
        'height',
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

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(OfficeType::class, 'type_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id')
            ->where('record_type', MediaTypeEnum::OFFICE_IMAGE);
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::OFFICE_OWNER)->withTimestamps();
    }

    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class, TableEnum::OFFICE_PLAN)->withTimestamps();
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class, 'model_id', 'id');
    }

    public function getNameNumberAttribute()
    {
        return ($this->name . ' [' . $this->number . ']');
    }
}
