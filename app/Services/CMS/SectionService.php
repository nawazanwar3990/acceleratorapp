<?php

namespace App\Services\CMS;
use App\Models\CMS\Section;
use function __;

class SectionService
{

    public function findById($id)
    {
        return Section::find($id);
    }

    public function listByPagination()
    {
        return Section::with('page')->orderBy('order', 'ASC')->paginate(20);
    }
}
