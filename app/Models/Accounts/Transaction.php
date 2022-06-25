<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\Flat;
use Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes, Compoships;

    protected $dates = ['vDate'];

    protected $fillable = [
        'vNo',
        'vType',
        'vDate',
        'COAID',
        'Narration',
        'Debit',
        'Credit',
        'is_posted',
        'is_opening',
        'is_approve',
        'building_id',
        'created_by',
        'updated_by',
        'flat_id',
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

    public function accountHead(): BelongsTo
    {
        return $this->belongsTo(AccountHead::class,'COAID','HeadCode');
    }

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }
}
