<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerFocalPerson extends Model
{
    use HasFactory;

    protected $table = TableEnum::FREELANCER_FOCAL_PERSON;
    protected $fillable = [
        'freelancer_id',
        'fp_name',
        'fp_designation',
        'fp_emp_type',
        'fp_contact',
        'fp_email'
    ];
    public function freelancer(): BelongsTo
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }
}
