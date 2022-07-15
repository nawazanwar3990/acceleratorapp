<?php

namespace App\Models\Users;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::ROLES;
    protected $fillable = [
        'name',
        'slug'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, TableEnum::ROLE_USER);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, TableEnum::ROLE_PERMISSION);
    }
}
