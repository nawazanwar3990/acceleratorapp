<?php

namespace App\Models\Plans;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = TableEnum::PLANS;
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'type',
        'price',
        'limit',
        'is_featured',
        'is_active',
    ];
}
