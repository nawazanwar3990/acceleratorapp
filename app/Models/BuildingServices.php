<?php

namespace App\Models;

use App\Models\Authorization\User;
use App\Models\Definition\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuildingServices extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_id',
        'service_type',
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

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
