<?php

namespace App\Models\SaleManagement;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchaser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sales_id',
        'hr_id',
        'percentage',
        'created_by',
        'updated_by',
        'building_id',
    ];

    public function building(): BelongsTo
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

    public function Hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class);
    }

    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
