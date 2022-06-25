<?php

namespace App\Models\Sales;

use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\Flat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuotationInstallment extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['installment_date', 'paid_date'];

    protected $fillable = [
        'flat_id',
        'quotation_id',
        'installment_plan_id',
        'installment_no',
        'installment_date',
        'installment_amount',

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

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }

    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class);
    }

    public function installmentPlan(): BelongsTo
    {
        return $this->belongsTo(InstallmentPlan::class);
    }
}
