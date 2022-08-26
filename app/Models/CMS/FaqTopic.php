<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'order',
        'page_id',
        'active'
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(FaqTopicSection::class,'topic_id');
    }
}
