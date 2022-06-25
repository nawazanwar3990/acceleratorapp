<?php

namespace App\Models\Sales;

use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstallmentPlan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
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
        'updated_by',

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
}
