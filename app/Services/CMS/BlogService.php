<?php

namespace App\Services\CMS;
use App\Models\CMS\Blog;
use function __;

class BlogService
{

    public function findById($id)
    {
        return Blog::find($id);
    }

    public function listByPagination()
    {
        return Blog::orderBy('id', 'ASC')->paginate(20);
    }
}
