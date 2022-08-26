<?php

namespace App\Services\CMS;

use App\Models\CMS\Page;
use function __;

class PageService
{

    public function findById($id)
    {
        return Page::find($id);
    }

    public function listByPagination()
    {
        return Page::orderBy('name', 'ASC')->paginate(20);
    }
}
