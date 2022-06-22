<?php

namespace App\Models\Plans;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table=TableEnum::PLANS;
    protected $fillable =[
        'name',
        'slug',
        'active',
        'price',
        'type',
        'limit'
    ];
}
