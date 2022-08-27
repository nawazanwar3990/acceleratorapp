<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $table = TableEnum::CMS_PAGES;
    protected $fillable = [
        'layout_id',
        'menu_id',
        'page_title',
        'page_description',
        'page_keyword',
        'extra_css',
        'extra_js',
        'active',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function layout(): BelongsTo
    {
        return $this->belongsTo(Layout::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
