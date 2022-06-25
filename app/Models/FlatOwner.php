<?php

namespace App\Models;

use App\Models\Authorization\User;
use App\Models\HumanResource\Hr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FlatOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'hr_id',
        'flat_id',
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

    public function flat(): BelongsTo
    {
        return $this->belongsTo(Flat::class);
    }

    public function Hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class);
    }

}
