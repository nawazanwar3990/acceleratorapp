<?php

namespace App\Services\CMS;
use App\Models\CMS\ContactUs;

use function __;

class ContactUsService
{

    public function findById($id)
    {
        return ContactUs::find($id);
    }

    public function listByPagination()
    {
        return ContactUs::orderBy('name', 'ASC')->paginate(20);
    }
}
