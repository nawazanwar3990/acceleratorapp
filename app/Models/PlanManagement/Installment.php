<?php

namespace App\Models\Sales;

use App\Models\FlatManagement\Flat;
use App\Models\UserManagement\User;
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
        'plan_id',
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

    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'plan_id');
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
    public function getFullNameAttribute(): string
    {
        return ($this->installment_no . ' [' . $this->installment_serial . ']');
    }
}
