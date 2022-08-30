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
    public static function getHomePage()
    {
        return Page::whereCode('home')->first();
    }
    public static function getLoginPage()
    {
        return Page::whereCode('login')->first();
    }
    public static function getPagesForMenus()
    {
        return Page::where('parent_id', null)
            ->whereActive(true)
            ->where('code','!=','login')
            ->orderBy('order', 'ASC')
            ->get();
    }

    public function findById($id)
    {
        return Page::with('layout')->find($id);
    }

    public function findByCode($code)
    {
        return Page::with('layout', 'sections')
            ->whereCode($code)
            ->first();
    }

    public function listByPagination(): LengthAwarePaginator
    {
        $pages = Page::with('layout')->orderBy('layout_id', 'ASC');
        if (request()->has('layout_id')) {
            $layout_id = request()->query('layout_id');
            $pages = $pages->where('layout_id', $layout_id);
        }
        return $pages->paginate(20);
    }
}
