<?php

namespace App\Models\Sales;

use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstallmentTerm extends Model
{
    use HasFactory;

    protected $fillable = [
        'installment_text',
        'status',

        'created_by',
        'updated_by',
        'deleted_by',

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
