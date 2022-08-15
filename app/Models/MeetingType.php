<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MeetingType extends Model
{
    use HasFactory;

    protected $table = TableEnum::MEETING_TYPES;
    protected $fillable = [
        'name',
        'slug',
        'slug',
        'parent_id'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MeetingType::class, 'parent_id')
            ->where('parent_id', null);
    }

    public function children(): HasMany
    {
        return $this->hasMany(MeetingType::class, 'parent_id');
    }
}
