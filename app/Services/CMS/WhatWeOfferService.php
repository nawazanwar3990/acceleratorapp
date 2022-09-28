<?php

namespace App\Services\CMS;
use App\Models\CMS\WhatWeOffer;
use function __;

class WhatWeOfferService
{

    public function findById($id)
    {
        return WhatWeOffer::find($id);
    }

    public function listByPagination()
    {
        return WhatWeOffer::orderBy('id', 'ASC')->paginate(20);
    }
}
