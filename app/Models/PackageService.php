<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageService extends Model
{
    use HasFactory;

    protected $table = TableEnum::PACKAGE_SERVICE;
    protected $fillable = [
        'package_id',
        'service_id',
        'limit'
    ];

    public function packages(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
