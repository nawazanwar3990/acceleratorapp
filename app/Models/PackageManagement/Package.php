<?php

namespace App\Models\PackageManagement;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Package extends Model
{
    use HasFactory;

    protected $table = TableEnum::PACKAGES;

    protected $fillable = [
        'name',
        'slug',
    ];
}
