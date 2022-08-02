<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
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
    public function logo(): HasMany
    {
        return $this->hasMany(Media::class,'record_id','id')
            ->where('record_type',MediaTypeEnum::MENTOR_LOGO);
    }
    public function front_id_card(): HasMany
    {
        return $this->hasMany(Media::class,'record_id','id')
            ->where('record_type',MediaTypeEnum::MENTOR_FRONT_ID_CARD);
    }
    public function back_id_card(): HasMany
    {
        return $this->hasMany(Media::class,'record_id','id')
            ->where('record_type',MediaTypeEnum::MENTOR_BACK_ID_CARD);
    }
    public function documents(): HasMany
    {
        return $this->hasMany(Media::class,'record_id','id')
            ->where('record_type',MediaTypeEnum::MENTOR_DOCUMENT);
    }
    public function certificates(): HasMany
    {
        return $this->hasMany(Media::class,'record_id','id')
            ->where('record_type',MediaTypeEnum::MENTOR_CERTIFICATE);
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::MENTOR_SERVICE);
    }
}
