<?php

namespace Database\Seeders\Auth;

use App\Enum\ModuleEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PERMISSIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        ModuleEnum::sync_module_permissions();
    }
}
