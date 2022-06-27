<?php

namespace App\Policies\UserManagement;

use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class DepartmentPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::DEPARTMENT;
}
