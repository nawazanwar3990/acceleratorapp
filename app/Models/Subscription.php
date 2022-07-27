<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
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
        'renewal_date',
        'expire_date',
        'price',
        'model_id',
        'model_type',

        'payment_token_number',
        'payment_addition_information',
        'status'
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
        return $this->belongsTo(Office::class, 'model_id');
    }
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class, 'subscription_id');
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
    public function receipt(): BelongsTo
    {
        return $this->belongsTo(Media::class,'id','record_id')
            ->where('media.record_type',MediaTypeEnum::SUBSCRIPTION_RECEIPT);
    }
}
