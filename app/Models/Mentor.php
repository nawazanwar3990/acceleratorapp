<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mentor extends Model
{
    use HasFactory;

    protected $table = TableEnum::MENTORS;
    protected $fillable = [
        'user_id',
        'other_services',
        'm_father_name',
        'm_contact',
        'm_emergency_contact',
        'm_postal_code'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::MENTOR_SERVICE);
    }
}
