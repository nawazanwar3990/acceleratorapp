<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerQualification extends Model
{
    use HasFactory;

    protected $table = TableEnum::FREELANCER_QUALIFICATION;

    protected $fillable=[
        'freelancer_id',
        'degree',
        'institute',
        'year_of_passing',
        'grade'
    ];

    public function freelancer(): BelongsTo
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
}
