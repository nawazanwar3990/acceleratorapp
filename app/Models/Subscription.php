<?php

namespace App\Models;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscription extends Model
{
    use HasFactory;

    protected $table = TableEnum::SUBSCRIPTIONS;
    protected $fillable = [
        'owner_id',
        'subscribed_id',
        'subscription_id',
        'subscription_type',
        'renewal_date',
        'expire_date',
        'price',
        'model_id',
        'model_type',
        'payment_token_number',
        'payment_addition_information',
        'status'
    ];

    public function getExpireDateAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y h:i:s A');
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y h:i:s A');
    }

    public function getCompanyDateOfInitiationAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y');
    }
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
        return $this->belongsTo(Office::class, 'model_id');
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'subscription_id');
    }

    public function receipt(): HasMany
    {
        return $this->hasMany(PaymentReceipt::class, 'subscription_id', 'id');
    }
}
