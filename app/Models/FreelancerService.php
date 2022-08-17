<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FreelancerService extends Model
{
    use HasFactory;

    protected $table = TableEnum::FREELANCER_SERVICE;
    protected $fillable = [
        'freelancer_id',
        'service_id',
        'service_type',
        'service_name'
    ];

    public function freelancers(): BelongsTo
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
