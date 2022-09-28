<?php

namespace App\Services\CMS;
use App\Models\CMS\HowItWork;
use function __;

class HowItWorkService
{

    public function findById($id)
    {
        return HowItWork::find($id);
    }

    public function listByPagination()
    {
        return HowItWork::orderBy('id', 'ASC')->paginate(20);
    }
}
