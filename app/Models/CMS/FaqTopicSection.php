<?php

namespace App\Models\CMS;

use App\Enum\TableEnum;
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
        'active'
    ];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(FaqTopic::class, 'topic_id');
    }
}
