<?php

namespace App\Policies\FreelancerManagement;


use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class FreelancerPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::FREELANCER;

}
