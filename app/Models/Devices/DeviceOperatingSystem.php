<?php

namespace App\Models\Devices;

use App\Enum\TableEnum;
use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceOperatingSystem extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = TableEnum::DEVICE_OPERATING_SYSTEMS;
    protected $fillable = [
        'building_id',
        'name',
        'slug'
    ];
    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'building_id');
    }
    public function devices(): HasMany
    {
        return $this->hasMany(Device::class);
    }
    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function deleted_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by', 'id');
    }
}
