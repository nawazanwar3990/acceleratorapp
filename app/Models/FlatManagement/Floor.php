<?php

namespace App\Models\FlatManagement;

use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use HasFactory, SoftDeletes;
    protected $casts = [
        'general_services' => 'array',
        'security_services' => 'array',
    ];

    protected $fillable = [
        'floor_name',
        'floor_number',
        'floor_type_id',
        'length',
        'width',
        'area',
        'height',
        'no_of_shops_flats',
        'general_services',
        'security_services',
        'created_by',
        'updated_by',

    ];



    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function floorType(): BelongsTo
    {
        return $this->belongsTo(FloorType::class);
    }
}
