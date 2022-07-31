<?php

namespace App\Services;

use App\Models\EventType;
use App\Models\Media;

class EventService
{
    public static function pluck_event_types($id = null)
    {
        return EventType::where('status', true)
            ->where('parent_id', null)
            ->pluck('name', 'name');
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
