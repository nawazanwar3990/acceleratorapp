<?php

namespace App\Models\SaleManagement;
use App\Models\PlanManagement\InstallmentPlan;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['date'];
    protected $fillable = [
        'date',
        'transfer_no',
        'revision_no',
        'transfer_type',
        'transfer_sub_type',
        'floor_id',
        'flat_id',
        'payment_method',
        'payment_sub_method',
        'total_amount',
        'discount',
        'discount_value',
        'discount_amount',
        'after_discount_amount',
        'down_payment',
        'balance',
        'commodity_type_id',
        'commodity_sub_type_id',
        'installment_plan_id',
        'commodity_units',
        'commodity_unit_value',
        'commodity_adjustment_value',
        'total_broker_percentage',
        'total_broker_amount',
        'status',
        'remarks',
        'transfer_fee',
        'company_brokery',
        'created_by',
        'updated_by',
        'building_id',
    ];

    public function building(): BelongsTo
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

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }

    public function installmentPlan(): BelongsTo
    {
        return $this->belongsTo(InstallmentPlan::class);
    }

    public function purchasers(): HasMany
    {
        return $this->hasMany(Purchaser::class);
    }

    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }
}
