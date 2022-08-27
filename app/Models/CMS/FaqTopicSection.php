<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FaqTopicSection extends Model
{
    use HasFactory;

    protected $table = TableEnum::CMS_FAQ_TOPIC_SECTIONS;
    protected $fillable = [
        'topic_id',
        'question',
        'answer',
        'order',
        'active',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(FaqTopic::class, 'topic_id');
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
