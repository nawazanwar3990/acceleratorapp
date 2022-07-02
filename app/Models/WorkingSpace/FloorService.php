<?php

namespace App\Models\WorkingSpace;

use App\Models\ServiceManagement\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FloorService extends Model
{
    use HasFactory;
    protected $fillable = [
        'building_id',
        'floor_id',
        'service_id',
        'type'

    ];
    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class,'building_id');
    }
    public function floor(): BelongsTo
    {
        return $this->belongsTo(Floor::class,'floor_id');
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
