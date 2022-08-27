<?php

namespace App\Services\CMS;

use App\Models\CMS\Section;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use function __;

class SectionService
{

    public function findById($id)
    {
        return Section::find($id);
    }

    public function listByPagination(): Collection|array|null
    {
        $page_id = request()->query('page_id');
        $sections = null;
        if ($page_id) {
            $sections = Section::with('page')
                ->orderBy('order', 'ASC')->where('page_id', $page_id)
                ->get();
        }
        return $sections;
    }
}
