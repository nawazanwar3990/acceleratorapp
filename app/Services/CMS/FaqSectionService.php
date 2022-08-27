<?php

namespace App\Services\CMS;
use App\Models\CMS\FaqTopicSection;
use function __;

class FaqSectionService
{

    public function findById($id)
    {
        return FaqTopicSection::find($id);
    }

    public function listByPagination()
    {
        return FaqTopicSection::orderBy('question', 'ASC')->paginate(20);
    }
}
