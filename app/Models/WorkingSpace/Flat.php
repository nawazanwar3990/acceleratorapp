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

class Flat extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['creation_date'];
    protected $fillable = [
        'building_id',
        'floor_id',
        'type_id',
        'name',
        'number',
        'creation_date',
        'status',
        'sales_status',
        'facing',
        'view',
        'accommodation',
        'furnished',
        'furnished_details',
        'length',
        'width',
        'area',
        'height',
        'purchase_rate_square_feet',
        'purchase_price',
        'rate_type',
        'rate_square_feet',
        'total_amount',
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
        return $this->belongsTo(FlatType::class,'type_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Media::class,'record_id')
            ->where('record_type',MediaTypeEnum::FLAT_IMAGE);
    }

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Hr::class, TableEnum::FLAT_OWNER)
            ->withPivot(
                'created_by',
                'updated_by'
            )
            ->withTimestamps();
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLAT_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by'
            )
            ->withTimestamps();
    }
    public function getNameNumberAttribute()
    {
        return ($this->name . ' [' . $this->number . ']');
    }

    public function all_general_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLAT_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by'
            )
            ->withTimestamps()
            ->where('flat_service.type',ServiceTypeEnum::GENERAL_SERVICE);
    }

    public function all_security_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FLAT_SERVICE)
            ->withPivot(
                'type',
                'created_by',
                'updated_by'
            )
            ->withTimestamps()
            ->where('flat_service.type',ServiceTypeEnum::SECURITY_SERVICE);
    }
}
