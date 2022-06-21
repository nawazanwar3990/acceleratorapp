<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class SalesEnquiryPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::SALES_ENQUIRY;
}
