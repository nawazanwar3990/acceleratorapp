<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentorService extends Model
{
    use HasFactory;

    protected $table = TableEnum::MENTOR_SERVICE;

    protected $fillable = [
        'mentor_id',
        'service_id',
        'service_type',
        'service_name',
        'limit',
        'building_limit',
        'floor_limit',
        'office_limit'
    ];

    public function mentors(): BelongsTo
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
