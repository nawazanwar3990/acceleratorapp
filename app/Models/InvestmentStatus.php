<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvestmentStatus extends Model
{
    use HasFactory;

    protected $table = TableEnum::INVESTMENT_STATUSES;
    protected $fillable = [
        'investment_id',
        'investor_id',
        'investor_type',
        'status',
        'reason'
    ];
}
