<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Package extends Model
{
    use HasFactory;

    protected $table = TableEnum::PACKAGES;

    protected $fillable = [
        'types',
        'duration_type_id',
        'duration_limit',
        'trail_expire_date',
        'name',
        'slug',
        'price',
        'reminder_days'
    ];
    public function getTypesAttribute($value)
    {
        return json_decode($value);
    }

    public function duration_type(): BelongsTo
    {
        return $this->belongsTo(Duration::class, 'duration_type_id');
    }
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::PACKAGE_SERVICE)
            ->withPivot('limit');
    }
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
