<?php

namespace App\Models\WorkingSpace;

use App\Enum\TableEnum;
use App\Models\ServiceManagement\Service;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'general_services' => 'array',
        'security_services' => 'array',
    ];

    protected $fillable = [
        'name',
        'area',
        'length',
        'width',
        'building_corners',
        'building_type',
        'entry_gates',
        'property_type',
        'no_of_floors',
        'facing',
        'general_services',
        'security_services',
        'status',
        'd1',
        'd2',
        'd3',
        'd4',
        'd5',
        'd6',
        'street1',
        'street2',
        'street3',
        'street4',
        'street5',
        'street6',
        'x1',
        'x2',
        'x3',
        'x4',
        'x5',
        'x6',
        'y1',
        'y2',
        'y3',
        'y4',
        'y5',
        'y6',
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
        return $this->hasMany(Flat::class);
    }
    public function floors(): HasMany
    {
        return $this->hasMany(Floor::class);
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::BUILDING_OWNER);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::BUILDING_SERVICE);
    }

}
