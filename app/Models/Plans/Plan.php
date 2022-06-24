<?php

namespace App\Models\Plans;

use App\Enum\TableEnum;
use App\Models\Authorization\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plan extends Model
{
    use HasFactory;

    protected $table = TableEnum::PLANS;
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'type',
        'price',
        'limit',
        'is_featured',
        'is_active',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
