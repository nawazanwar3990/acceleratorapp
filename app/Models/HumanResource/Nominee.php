<?php

namespace App\Models\HumanResource;

use App\Models\Building;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nominee extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'owner_hr_id',
        'nominee_hr_id',

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



    public function hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'nominee_hr_id','id');
    }

    public function nominee(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'nominee_hr_id','id');
    }

}