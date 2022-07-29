<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerExperience extends Model
{
    use HasFactory;

    protected $table = TableEnum::FREELANCER_EXPERIENCE;

    protected $fillable=[
        'freelancer_id',
        'company_name',
        'designation',
        'duration',
        'any_achievement'
    ];

    public function freelancer(): BelongsTo
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
}
