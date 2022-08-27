<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqTopic extends Model
{
    use HasFactory;
    protected $table=TableEnum::CMS_FAQ_TOPICS;
    protected $fillable = [
        'name',
        'icon',
        'order',
        'page_id',
        'all_pages',
        'active',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function sections(): HasMany
    {
        return $this->hasMany(FaqTopicSection::class,'topic_id');
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
