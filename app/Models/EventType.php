<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventType extends Model
{
    use HasFactory;

    protected $table = TableEnum::EVENT_TYPES;
    protected $fillable = [
        'name',
        'slug',
        'slug',
        'parent_id'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(EventType::class, 'parent_id')
            ->where('parent_id', null);
    }

    public function children(): HasMany
    {
        return $this->hasMany(EventType::class, 'parent_id');
    }
}
