<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    protected $table=TableEnum::EVENTS;
    protected $fillable = [
        'event_type',
        'event_sub_type',
        'event_name',
        'event_description',
        'event_start_date',
        'no_of_days',
        'event_end_date',
        'event_start_time',
        'event_end_time',
        'event_organized_by',
        'event_organized_for',
        'is_applied_ticker',
        'ticket_type',
        'per_person_cost',
        'event_image',
        'event_social_media_url',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
    public function getEventStartDateAttribute($value): string
    {
        return  Carbon::parse($value)->format('d-M-Y');
    }
    public function getEventEndDateAttribute($value): string
    {
        return  Carbon::parse($value)->format('d-M-Y');
    }
    public function images(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id','id')
            ->where('record_type',MediaTypeEnum::EVENT_IMAGE);
    }
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
}
