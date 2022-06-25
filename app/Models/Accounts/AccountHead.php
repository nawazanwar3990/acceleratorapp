<?php

namespace App\Models\Accounts;

use App\Models\Authorization\User;
use App\Models\Building;
use Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountHead extends Model
{
    use HasFactory, SoftDeletes, Compoships;


    protected $fillable = [
        'HeadCode',
        'HeadName',
        'PHeadName',
        'HeadLevel',
        'HeadType',
        'IsActive',
        'IsTransaction',
        'IsGL',
        'IsBudget',
        'IsDepreciation',
        'account_id',
        'account_type',
        'DepreciationRate',
        'created_by',
        'updated_by',
        'building_id',
    ];

    protected $casts = [
        'account_id' => 'array',
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

    public function pettyCash(): BelongsTo
    {
        return $this->belongsTo(AccountHead::class, ['account_type', 'account_id']);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'COAID', 'HeadCode');
    }

    public function headCode($parent)
    {
        $parent = $parent . "00";
        $headCode =
            $this->where('HeadCode', 'like',  $parent . '%')
                ->max('HeadCode');

        if ($headCode != NULL) {
            $headCode = $headCode + 1;
        } else {
            $headCode = $parent . "1";
        }

        return $headCode;
    }

}
