<?php

namespace App\Services\CMS;
use App\Models\CMS\Slider;
use function __;

class SliderService
{

    public function findById($id)
    {
        return Slider::find($id);
    }

    public function listByPagination()
    {
        return Slider::orderBy('id', 'ASC')->paginate(20);
    }
}
