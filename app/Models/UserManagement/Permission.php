<?php

namespace App\Models\UserManagement;

use App\Enum\AbilityEnum;
use App\Enum\PermissionEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = TableEnum::PERMISSIONS;
    protected $fillable = [

        'name',
        'slug',
        'function_name'
    ];

    public static function syncPermission()
    {
        foreach (PermissionEnum::getModelPermissions() as $permission) {
            foreach (AbilityEnum::getValues() as $ability) {
                $name = $ability . " " . ucwords(str_replace('_', ' ', $permission));
                $slug = $ability . "_" . strtolower(str_replace(' ', '_', $permission));
                Permission::updateOrCreate([
                    'slug' => $slug
                ], [
                    'name' => $name,
                    'function_name' => str_replace('_', ' ', $permission)
                ]);
            }
        }
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}
