<?php

namespace App\Models;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Package extends Model
{
    use HasFactory;

    protected $table = TableEnum::PACKAGES;
    protected $casts = [
    ];
    protected $fillable = [
        'package_type',
        'payment_process',
        'duration_type_id',
        'duration_limit',
        'trail_expire_date',
        'name',
        'slug',
        'price',
        'status',
        'reminder_days',
    ];

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::PACKAGE_SERVICE)
            ->withTimestamps()
            ->withPivot('limit','building_limit','floor_limit','office_limit');
    }

    public function duration_type(): BelongsTo
    {
        return $this->belongsTo(Duration::class, 'duration_type_id');
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
