<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaCertification extends Model
{
    use HasFactory;
    protected $table = TableEnum::BA_CERTIFICATION;
    protected $fillable = [
        'ba_id',
        'certificate_name',
        'institute',
        'year',
        'any_distinction'
    ];
    public function freelancer(): BelongsTo
    {
        return $this->belongsTo(BA::class, 'ba_id');
    }
}
