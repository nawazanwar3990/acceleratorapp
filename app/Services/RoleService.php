<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\Province;
use App\Models\Role;

class RoleService
{
    public function findBySlug($slug)
    {
        return Role::where('slug',$slug)->first();
    }
}
