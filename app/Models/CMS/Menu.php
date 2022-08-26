<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;
    protected $table=TableEnum::CMS_MENUS;

    protected $fillable = [
        'layout_id',
        'name',
        'icon',
        'route',
        'parent_id',
        'order',
        'type',
        'active'
    ];

    public function parent(): HasOne
    {
        return $this->hasOne(Menu::class, 'id', 'parent_id')
            ->orderBy('order');
    }

    public function children(): HasMany
    {

        return $this->hasMany(Menu::class, 'parent_id', 'id')
            ->orderBy('order');
    }

    public static function tree(): Collection|array
    {
        return static::with(implode('.', array_fill(0, 100, 'children')))
            ->where('parent_id', '=', '0')
            ->orderBy('order')
            ->get();
    }
}
