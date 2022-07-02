<?php

namespace App\Models\WorkingSpace;

use App\Enum\TableEnum;
use App\Enum\TableHeadings\ServiceManagement\Service;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use HasFactory, SoftDeletes;
    protected $casts = [
        'general_services' => 'array',
        'security_services' => 'array',
    ];
    protected $fillable = [
        'building_id',
        'type_id',
        'name',
        'number',
        'length',
        'width',
        'area',
        'height',
        'no_of_shops_flats',
        'general_services',
        'security_services',
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
        return $this->belongsTo(FloorType::class,'type_id');
    }
    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class,'building_id');
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::FLOOR_OWNER);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLOOR_SERVICE);
    }
}
