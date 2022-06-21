<?php

namespace App\Models\RealEstate\Sales;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\Flat;
use App\Models\RealEstate\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['date'];

    protected $fillable = [
        'date',
        'quot_no',
        'customer_name',
        'customer_contact',
        'floor_id',
        'flat_id',
        'payment_method',
        'payment_sub_method',
        'total_amount',
        'payment_type',
        'payment_value',
        'payment_amount',
        'installment_plan_id',
        'installment_amount',
        'status',
        'created_by',
        'updated_by',
        'building_id',
    ];

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

    public function installments(): HasMany
    {
        return $this->hasMany(QuotationInstallment::class);
    }
}
