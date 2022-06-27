<?php

namespace App\Policies\UserManagement;
use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class RelationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::RELATION;
}
