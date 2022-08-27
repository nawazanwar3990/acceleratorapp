<?php

namespace App\Services\CMS;

use App\Models\CMS\Layout;
use function __;

class LayoutService
{

    public static function pluckLayouts()
    {
        return Layout::pluck('name', 'id');
    }

    public function findById($id)
    {
        return Layout::find($id);
    }

    public function listByPagination()
    {
        return Layout::orderBy('name', 'ASC')->paginate(20);
    }
}
