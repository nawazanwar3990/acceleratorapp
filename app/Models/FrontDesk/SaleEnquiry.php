<?php

namespace App\Models\FrontDesk;

use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\FrontDesk\FrontDeskSetup\Reference;
use App\Models\FrontDesk\FrontDeskSetup\Source;
use App\Models\HumanResource\Hr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleEnquiry extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'date',
        'next_followup_date',
        'assigned',
        'reference_id',
        'source_id',
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



    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }

    public function reference(): BelongsTo
    {
        return $this->belongsTo(Reference::class);
    }

    public function hr(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'assigned','id');
    }

}
