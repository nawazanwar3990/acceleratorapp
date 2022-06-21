<?php

namespace App\Policies;

use App\Enum\KeyWordEnum;

class TitleTransferPolicy extends AbstractDefaultPolicy
{
    protected const KEYWORD = KeyWordEnum::TITLE_TRANSFER;
}
