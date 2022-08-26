<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $table = TableEnum::CMS_SECTIONS;
    protected $fillable = [
        'layout_id',
        'page_id',
        'order',
        'html',
        'extra_css',
        'extra_js',
        'active'
    ];

    public function layout(): BelongsTo
    {
        return $this->belongsTo(Layout::class);
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

}
