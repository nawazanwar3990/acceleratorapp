<?php

namespace App\Services\CMS;

use App\Models\CMS\Page;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use function __;

class PageService
{

    public static function pluckPages()
    {
        return Page::pluck('name', 'id');
    }

    public static function getPagesForMenus()
    {
        return Page::where('parent_id', null)
            ->whereActive(true)
            ->orderBy('order', 'ASC')
            ->get();
    }

    public function findById($id)
    {
        return Page::with('layout')->find($id);
    }

    public function findByCode($code)
    {
        return Page::with('layout', 'sections')->whereCode($code)->first();
    }

    public function listByPagination(): LengthAwarePaginator
    {
        return Page::with('layout')
            ->orderBy('layout_id', 'ASC')
            ->paginate(20);
    }
}
