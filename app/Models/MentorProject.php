<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentorProject extends Model
{
    use HasFactory;

    protected $table = TableEnum::MENTOR_PROJECT;
    protected $fillable = [
        'mentor_id',
        'project_title',
        'starting_date',
        'ending_date',
        'type',
        'further_remarks'
    ];

    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
