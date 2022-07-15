<?php

namespace App\Models\Plans;

use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Services\Service;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::PLANS;
    protected $fillable = [
        'name',
        'no_of_persons',
        'duration',
        'price',
        'reminder_days',
        'created_by',
        'updated_by'
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

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::PLAN_SERVICE)
            ->withTimestamps()
            ->withPivot('type');
    }
    public function basic_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::PLAN_SERVICE)
            ->where('plan_service.type',ServiceTypeEnum::BASIC_SERVICE);
    }
    public function additional_services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::PLAN_SERVICE)
            ->where('plan_service.type',ServiceTypeEnum::ADDITIONAL_SERVICE);
    }
}
