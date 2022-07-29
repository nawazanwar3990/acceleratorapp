<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerCertification extends Model
{
    use HasFactory;
    protected $table = TableEnum::FREELANCER_CERTIFICATION;
    protected $fillable = [
        'freelancer_id',
        'certificate_name',
        'institute',
        'year',
        'any_distinction'
    ];
    public function freelancer(): BelongsTo
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
}
