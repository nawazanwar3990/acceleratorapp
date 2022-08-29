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

    public function findById($id)
    {
        return Page::find($id);
    }

    public function listByPagination(): LengthAwarePaginator
    {
        return Page::with('layout')
            ->orderBy('layout_id', 'ASC')
            ->paginate(20);
    }
}
