<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentorCertification extends Model
{
    use HasFactory;
    protected $table = TableEnum::MENTOR_CERTIFICATION;
    protected $fillable = [
        'mentor_id',
        'certificate_name',
        'institute',
        'year',
        'any_distinction'
    ];
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
}
