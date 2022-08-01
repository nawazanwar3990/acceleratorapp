<?php

namespace App\Services;

use App\Models\EventType;
use App\Models\Media;
use Illuminate\Support\Collection;

class EventService
{
    public static function getEventTypes($id = null): Collection
    {
        return EventType::with('children')
            ->where('status', true)
            ->where('parent_id', null)
            ->get();
    }

    public static function getEventImage($id = null)
    {
        $image = Media::select('filename')->where('record_type', 'event_image')->where('record_id', $id)->first();
        if (isset($image['filename'])) {
            return $image['filename'];
        } else {
            return 'uploads/Event/images/default_event.png';
        }

    }
}
