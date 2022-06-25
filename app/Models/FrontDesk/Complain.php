<?php

namespace App\Models\FrontDesk;

use App\Models\Building;
use App\Models\FrontDesk\FrontDeskSetup\ComplainType;
use App\Models\FrontDesk\FrontDeskSetup\Source;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complain extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'complain_type_id',
        'source_id',
        'complain_by',
        'phone',
        'action_taken',
        'assigned',
        'date',
        'description',
        'note',
        'attachment',

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

    public function complainType(): BelongsTo
    {
        return $this->belongsTo(ComplainType::class);
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }
}
