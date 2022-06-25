<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\Building;
use Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseHead extends Model
{
    use HasFactory, SoftDeletes, Compoships;

    protected $fillable = [
        'expense_head_name',
        'parent_id',

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

    public function parent(): BelongsTo
    {
        return $this->belongsTo(ExpenseHead::class, 'parent_id', 'id');
    }

    public function headName(): string
    {
        return $this->id . '-' . $this->expense_head_name;
    }

    public function accountHead()
    {
        return $this->hasOne(AccountHead::class, ['account_id', 'account_type'], ['id', 'type']);
    }

    public function hasChilds($parent_id) {
        return $this->whereParentId($parent_id)->count();
    }
}
