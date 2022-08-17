<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BaService extends Model
{
    use HasFactory;

    protected $table = TableEnum::BA_SERVICE;

    protected $fillable = [
        'ba_id',
        'service_id',
        'service_type',
        'service_name'
    ];

    public function ba(): BelongsTo
    {
        return $this->belongsTo(BA::class, 'ba_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
