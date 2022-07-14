<?php

namespace App\Models\UserManagement;
use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\ServiceManagement\Service;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hr extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'date_of_birth'
    ];

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'cnic',
        'guardian_name',
        'date_of_birth',
        'gender',
        'marital_status',
        'cell_1',
        'cell_2',
        'web_portfolio',
        'remarks',
        'address',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'hr_id');
    }
    public function cast(): BelongsTo
    {
        return $this->belongsTo(HrCast::class);
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class,TableEnum::HR_SERVICE,'hr_id');
    }
    public function buildings(): BelongsToMany
    {
        return $this->belongsToMany(Building::class,TableEnum::BUILDING_OWNER,'hr_id');
    }
    public function floors(): BelongsToMany
    {
        return $this->belongsToMany(Floor::class,TableEnum::FLOOR_OWNER,'hr_id');
    }
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

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
    public function getHeadName(): string
    {
        return $this->id . '-' . $this->first_name . '-' . $this->middle_name . '-' . $this->last_name;
    }

    public function first_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id')
            ->where('type',MediaTypeEnum::HR_FIRST_IMAGE);
    }
    public function second_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id')
            ->where('type',MediaTypeEnum::HR_SECOND_IMAGE);
    }
    public function third_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id')
            ->where('type',MediaTypeEnum::HR_THIRD_IMAGE);
    }
    public function fourth_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id')
            ->where('type',MediaTypeEnum::HR_FOURTH_IMAGE);
    }
}
