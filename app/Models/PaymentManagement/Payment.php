<?php

namespace App\Models\PaymentManagement;

use App\Enum\TableEnum;
use App\Models\SubscriptionManagement\Package;
use App\Models\SubscriptionManagement\Subscription;
use App\Models\UserManagement\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $table = TableEnum::PAYMENTS;
    protected $fillable = [
        'subscribed_id',
        'subscription_id',
        'package_id',
        'payment_type',
        'transaction_id'
    ];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class, 'subscription_id');
    }

    public function subscribed(): BelongsTo
    {
        return $this->belongsTo(User::class, 'subscribed_id');
    }

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
