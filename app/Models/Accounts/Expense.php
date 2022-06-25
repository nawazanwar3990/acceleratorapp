<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['date'];

    protected $fillable = [
        'voucher_no',
        'date',
        'expense_head_id',
        'payment_account',
        'amount',
        'description',
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

    public function expenseHead(): BelongsTo
    {
        return $this->belongsTo(ExpenseHead::class);
    }

    public function paymentAccount(): BelongsTo
    {
        return $this->belongsTo(AccountHead::class, 'payment_account');
    }

    public function transactions(){

        return $this->hasMany(Transaction::class,'vNo','voucher_no');
    }
}
