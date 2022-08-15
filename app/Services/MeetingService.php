<?php

namespace App\Services;

use App\Enum\MediaTypeEnum;
use App\Models\EventType;
use App\Models\Media;
use App\Models\MeetingType;
use Illuminate\Support\Collection;

class MeetingService
{
    public static function getMeetingTypes($id = null): Collection
    {
        return MeetingType::with('children')
            ->where('status', true)
            ->where('parent_id', null)
            ->get();
    }

    public static function getMeetingImage($id = null): string
    {
        $image = Media::select('filename')
            ->where('record_type',MediaTypeEnum::MEETING_IMAGE)
            ->where('record_id', $id)
            ->first();
        if (isset($image['filename'])) {
            return $image['filename'];
        } else {
            return 'uploads/Event/images/default_event.png';
        }

    }
}
