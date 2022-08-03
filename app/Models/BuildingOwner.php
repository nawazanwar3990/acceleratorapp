<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingOwner extends Model
{
    use HasFactory;
    protected $table=TableEnum::BUILDING_OWNER;
    protected $fillable=[
        'user_id',
        'building_id'
    ];
}
