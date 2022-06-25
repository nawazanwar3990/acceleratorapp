<?php

namespace App\Services;

use App\Models\Media;

class EventService
{
    public static function eventType($id = null)
    {
        $data = [
            'free' => __('general.free'),
            'paid' => __('general.paid'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getEventImage($id = null)
    {
        $image = Media::select('filename')->where('record_type','event_image')->where('record_id',$id)->first();
        if (isset($image['filename']))
        {
            return $image['filename'];
        }
        else
        {
            return 'uploads/Event/images/default_event.png';
        }

    }
}
