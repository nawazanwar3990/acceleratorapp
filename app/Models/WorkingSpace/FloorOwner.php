<?php

namespace App\Models\WorkingSpace;

use App\Enum\TableEnum;
use App\Models\Users\Hr;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FloorOwner extends Model
{
    use HasFactory;

    protected $table = TableEnum::FLAT_OWNER;
    protected $fillable = [
        'hr_id',
        'floor_id',
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

    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class);
    }

    public function Hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class);
    }
}
