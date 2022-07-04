<?php

namespace App\Models\WorkingSpace;

use App\Enum\TableEnum;
use App\Models\ServiceManagement\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BuildingService extends Model
{
    use HasFactory;

    protected $table = TableEnum::BUILDING_SERVICE;
    protected $fillable = [
        'building_id',
        'service_id',
        'type',
        'price'
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
