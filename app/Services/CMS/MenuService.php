<?php

namespace App\Services\CMS;
use App\Models\CMS\Menu;
use function __;

class MenuService
{

    public static function getMenuLocations()
    {
        return [
            'header' => 'Header',
            'footer' => 'Footer'
        ];
    }
    public static function pluckMenus()
    {
        return Menu::pluck('name', 'id');
    }
    public function findById($id)
    {
        return Menu::find($id);
    }
    public function listByPagination()
    {
        return Menu::orderBy('name', 'ASC')->paginate(20);
    }
}
