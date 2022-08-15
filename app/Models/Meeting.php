<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meeting extends Model
{
    use HasFactory;

    protected $table = TableEnum::MEETINGS;
    protected $fillable = [
        'meeting_type',
        'meeting_sub_type',
        'meeting_name',
        'meeting_mode',
        'meeting_description',
        'meeting_held_date',
        'meeting_start_time',
        'meeting_end_time',
        'has_meeting_pass',
        'meeting_pass',
        'meeting_organized_by',
        'meeting_organized_for',
        'meeting_organized_location',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
    public function getMeetingHeldDateAttribute($value): string
    {
      return  Carbon::parse($value)->format('d-M-Y');
    }
    public function images(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id','id')
            ->where('record_type',MediaTypeEnum::MEETING_IMAGE);
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
