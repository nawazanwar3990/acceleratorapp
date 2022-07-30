<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentorQualification extends Model
{
    use HasFactory;

    protected $table = TableEnum::MENTOR_QUALIFICATION;

    protected $fillable=[
        'mentor_id',
        'degree',
        'institute',
        'year_of_passing',
        'grade'
    ];

    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
