<?php

namespace App\Models\WorkingSpace;

use App\Models\Users\Hr;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OfficeOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'hr_id',
        'office_id',
        'percentage',
        'status',
        'sale_id',
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

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    public function Hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class);
    }

}
