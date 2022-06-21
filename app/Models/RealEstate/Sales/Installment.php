<?php

namespace App\Models\RealEstate\Sales;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\Flat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Installment extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['installment_date', 'paid_date'];

    protected $fillable = [
        'flat_id',
        'sale_id',
        'installment_plan_id',
        'installment_no',
        'installment_serial',
        'installment_date',
        'installment_amount',
        'first_penalty',
        'first_penalty_amount',
        'second_penalty',
        'second_penalty_amount',
        'third_penalty',
        'third_penalty_amount',
        'penalty_waived_off',
        'penalty_waived_off_amount',
        'paid_date',
        'paid_voucher_no',
        'status',
        'created_by',
        'updated_by',
        'building_id',
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(InstallmentPlan::class, 'installment_plan_id');
    }

    public function Building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
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

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }

    public function sales(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }

    public function installmentPlan(): BelongsTo
    {
        return $this->belongsTo(InstallmentPlan::class);
    }

    public function getFullNameAttribute(): string
    {
        return ($this->installment_no . ' [' . $this->installment_serial . ']');
    }
}
