<?php

namespace Database\Seeders\Auth;

use App\Enum\ModuleEnum;
use App\Enum\PermissionEnum;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModuleEnum::sync_module_permissions();
    }
}
