<?php

namespace App\Models\RealEstate\HumanResource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PowerOfAttorneyWitness extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'poa_id',
        'witness_hr_id',

        'created_by',
        'updated_by',
        'deleted_by',
        'building_id',
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

    public function Building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'witness_hr_id','id');
    }
}
