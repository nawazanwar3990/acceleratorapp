<?php

namespace App\Models\Subscriptions;

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
        'type',
        'duration_type_id',
        'duration_limit',
        'trail_expire_date',
        'name',
        'slug',
        'price',
        'reminder_days'
    ];

    public function duration_type(): BelongsTo
    {
        return $this->belongsTo(Duration::class, 'duration_type_id');
    }
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class, TableEnum::PACKAGE_MODULE)->withPivot('limit');
    }
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
