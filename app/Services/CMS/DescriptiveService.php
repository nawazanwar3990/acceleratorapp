<?php

namespace App\Services\CMS;
use App\Models\CMS\Descriptive;
use function __;

class DescriptiveService
{

    public function findById($id)
    {
        return Descriptive::find($id);
    }

    public function listByPagination()
    {
        return Descriptive::orderBy('id', 'ASC')->paginate(20);
    }
}
