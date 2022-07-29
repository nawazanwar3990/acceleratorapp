<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaExperience extends Model
{
    use HasFactory;

    protected $table = TableEnum::BA_EXPERIENCE;

    protected $fillable=[
        'ba_id',
        'company_name',
        'designation',
        'duration',
        'any_achievement'
    ];

    public function ba(): BelongsTo
    {
        return $this->belongsTo(BA::class, 'ba_id');
    }
}
