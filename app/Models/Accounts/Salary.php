<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\HumanResource\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salary extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['paid_at'];

    protected $fillable = [
        'salary_no',
        'employee_id',
        'salary_month',
        'total_salary',
        'paid_salary',
        'attendance',
        'present',
        'deduction',
        'deduction_type',
        'deduction_reason',
        'generated_by',
        'type',
        'status',

        'building_id',
        'created_by',
        'updated_by',
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

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class,'VNo','salary_no');
    }

    public function generatedBy(){
        return $this->belongsTo(User::class,'generated_by','id');
    }

    public function paidBy(){
        return $this->belongsTo(User::class,'paid_by','id');
    }

    public function receivedBy(){
        return $this->belongsTo(Employee::class,'received_by','id');
    }
}
