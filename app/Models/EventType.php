<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $table = TableEnum::EVENT_TYPES;
    protected $fillable=[
        'name',
        'slug',
        'slug',
        'parent_id'
    ];
}
