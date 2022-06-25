<?php

namespace App\Models\Devices;

use App\Enum\TableEnum;
use App\Models\Authorization\User;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::DEVICES;
    protected $fillable = [

        'device_class_id',
        'device_location_id',
        'device_make_id',
        'device_model_id',
        'device_operating_system_id',
        'device_type_id',
        'device_name',
        'device_ip_address',
        'device_username',
        'device_password',
        'device_connection_string',
        'device_generation',
        'device_mac_address',
        'device_serial_number',
        'device_admin_login',
        'device_admin_password',
        'device_lot_number',
        'device_lot_date',
        'device_other_info'
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function device_class(): BelongsTo
    {
        return $this->belongsTo(DeviceClass::class, 'device_class_id', 'id');
    }

    public function device_location(): BelongsTo
    {
        return $this->belongsTo(DeviceLocation::class, 'device_location_id', 'id');
    }

    public function device_make(): BelongsTo
    {
        return $this->belongsTo(DeviceMake::class, 'device_make_id', 'id');
    }

    public function device_model(): BelongsTo
    {
        return $this->belongsTo(DeviceModel::class, 'device_model_id', 'id');
    }

    public function device_operating_system(): BelongsTo
    {
        return $this->belongsTo(DeviceOperatingSystem::class, 'device_operating_system_id', 'id');
    }

    public function device_type(): BelongsTo
    {
        return $this->belongsTo(DeviceType::class, 'device_type_id', 'id');
    }

    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function deleted_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by', 'id');
    }
}
