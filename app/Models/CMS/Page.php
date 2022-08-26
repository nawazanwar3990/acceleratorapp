<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $table = TableEnum::CMS_PAGES;
    protected $fillable = [

        'menu_id',
        'page_title',
        'page_description',
        'page_keyword',
        'extra_css',
        'extra_js',
        'active'
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
