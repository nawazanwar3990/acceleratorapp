<?php

namespace App\Policies\Users;
use App\Enum\KeyWordEnum;
use App\Policies\AbstractDefaultPolicy;

class RelationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::RELATION;
}
