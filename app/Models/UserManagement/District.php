<?php

namespace App\Models\UserManagement;

use App\Enum\TableEnum;
use App\Enum\TableHeadings\UserManagement\Province;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::DISTRICTS;
    protected $fillable = [
        'name',
        'province_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',

    ];
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'created_by');
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


}