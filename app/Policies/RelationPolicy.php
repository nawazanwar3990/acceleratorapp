<?php

namespace App\Policies;
use App\Enum\KeyWordEnum;

class RelationPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::RELATIONS;
}
