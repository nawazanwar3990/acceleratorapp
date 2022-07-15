<?php

namespace App\Models\Subscriptions;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Module extends Model
{
    use HasFactory;

    protected $table = TableEnum::MODULES;

    protected $fillable = [
        'name',
        'parent_type',
        'child_type'
    ];
}
