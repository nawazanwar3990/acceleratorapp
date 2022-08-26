<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layout extends Model
{
    protected $table = TableEnum::CMS_LAYOUTS;
    protected $fillable = [
        'name',
        'page_title',
        'page_description',
        'page_keyword',
        'extra_css',
        'extra_js',
        'active',
        'header_logo',
        'footer_logo',
        'menu_type'
    ];
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
