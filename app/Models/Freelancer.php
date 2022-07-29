<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Freelancer extends Model
{
    use HasFactory;

    protected $table = TableEnum::FREELANCERS;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function focal_persons(): HasMany
    {
        return $this->hasMany(FreelancerFocalPerson::class, 'freelancer_id','id');
    }
    public function experiences(): HasMany
    {
        return $this->hasMany(FreelancerExperience::class, 'freelancer_id');
    }

    public function qualifications(): HasMany
    {
        return $this->hasMany(FreelancerQualification::class, 'freelancer_id');
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::FREELANCER_SERVICE,'freelancer_id');
    }
}
