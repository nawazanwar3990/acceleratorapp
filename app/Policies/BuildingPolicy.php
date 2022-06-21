<?php

namespace App\Policies;
use App\Enum\KeyWordEnum;

class BuildingPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::BUILDINGS;
}
