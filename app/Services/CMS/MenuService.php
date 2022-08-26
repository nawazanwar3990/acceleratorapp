<?php

namespace App\Services\CMS;
use App\Models\CMS\Menu;
use function __;

class MenuService
{

    public function findById($id)
    {
        return Menu::find($id);
    }

    public function listByPagination()
    {
        return Menu::orderBy('name', 'ASC')->paginate(20);
    }
}
