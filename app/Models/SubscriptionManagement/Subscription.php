<?php

namespace App\Models\SubscriptionManagement;

use App\Enum\TableEnum;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Office;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasFactory;

    protected $table = TableEnum::SUBSCRIPTIONS;

    protected $fillable = [
        'subscribed_id',
        'subscription_id',
        'subscription_type',
        'package_id',
        'renewal_date',
        'expire_date',
        'price'
    ];

    public function subscribed(): BelongsTo
    {
        return $this->belongsTo(User::class, 'subscribed_id');
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'subscription_id');
    }
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'subscription_id');
    }
    public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function deleted_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
