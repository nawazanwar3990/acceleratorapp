<?php

namespace App\Services\CMS;

use App\Models\CMS\FaqTopic;
use function __;

class FaqTopicService
{

    public static function pluckFaqTopics()
    {
        return FaqTopic::pluck('name', 'id');
    }
    public function findById($id)
    {
        return FaqTopic::find($id);
    }

    public function listByPagination()
    {
        return FaqTopic::orderBy('name', 'ASC')->paginate(20);
    }
}
