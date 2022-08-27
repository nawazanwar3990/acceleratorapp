<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'menu_type',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
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
