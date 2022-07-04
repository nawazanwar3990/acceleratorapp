<?php

namespace Database\Seeders\Auth;

use App\Enum\ModuleEnum;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        ModuleEnum::sync_module_permissions();
    }
}
