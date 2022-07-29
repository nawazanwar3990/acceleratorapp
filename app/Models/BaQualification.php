<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaQualification extends Model
{
    use HasFactory;

    protected $table = TableEnum::BA_QUALIFICATION;

    protected $fillable=[
        'ba_id',
        'degree',
        'institute',
        'year_of_passing',
        'grade'
    ];

    public function ba(): BelongsTo
    {
        return $this->belongsTo(BA::class, 'ba_id');
    }
}
