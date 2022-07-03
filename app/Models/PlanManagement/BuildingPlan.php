<?php

namespace App\Models\PlanManagement;

use App\Enum\TableEnum;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuildingPlan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::BUILDING_PLANS;
    protected $fillable = [
        'building_id',
        'plan_id',
        'created_by',
        'updated_by'
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
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
}
