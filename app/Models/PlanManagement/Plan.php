<?php

namespace App\Models\PlanManagement;

use App\Enum\TableEnum;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::PLANS;
    protected $fillable = [
        'plan_for',
        'building_id',
        'floor_id',
        'flat_id',
        'name',
        'months',
        'installment_duration',
        'total_installments',
        'reminder_days',
        'down_payment_type',
        'down_payment_value',
        'penalties',
        'first_penalty',
        'first_penalty_days',
        'first_penalty_type',
        'first_penalty_charges',
        'second_penalty',
        'second_penalty_days',
        'second_penalty_type',
        'second_penalty_charges',
        'third_penalty',
        'third_penalty_days',
        'third_penalty_type',
        'third_penalty_charges',
        'created_by',
        'updated_by'
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
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
