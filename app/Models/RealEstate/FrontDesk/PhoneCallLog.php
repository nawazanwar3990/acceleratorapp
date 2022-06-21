<?php

namespace App\Models\RealEstate\FrontDesk;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\CallType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhoneCallLog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'call_duration',
        'call_type_id',
        'date',
        'next_followup_date',
        'description',
        'note',

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

    public function callType(): BelongsTo
    {
        return $this->belongsTo(CallType::class);
    }

}
