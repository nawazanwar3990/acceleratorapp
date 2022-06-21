<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\HumanResource\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeLoan extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['date', 'return_date'];

    protected $fillable = [
        'loan_no',
        'employee_id',
        'date',
        'loan_amount',
        'return_type',
        'return_date',
        'deduct_type',
        'deduct_value',
        'deduct_amount',
        'details',
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

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class,'VNo','loan_no');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function requestedBy(): BelongsTo
    {
        return $this->belongsTo(User::class,'requested_by');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class,'approved_by');
    }
}
