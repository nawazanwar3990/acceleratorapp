<?php

namespace Database\Seeders;

use App\Enum\KeyWordEnum;
use App\Enum\TableEnum;
use App\Models\PackageManagement\Module;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PACKAGES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table(TableEnum::PACKAGES)->insert([
            array('type' => 'payed', 'name' => 'Test Package', 'duration_type_id' => '3', 'duration_limit' => '1', 'trail_expire_date' => NULL, 'slug' => 'test-package', 'price' => '1200', 'reminder_days' => '3', 'created_by' => '1', 'updated_by' => '1', 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PACKAGE_MODULE)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $building = Module::whereName(KeyWordEnum::BUILDING)->value('id');
        $floor = Module::whereName(KeyWordEnum::FLOOR)->value('id');
        $flat = Module::whereName(KeyWordEnum::FLAT)->value('id');
        $freelancer = Module::whereName(KeyWordEnum::FREELANCER)->value('id');

        DB::table(TableEnum::PACKAGE_MODULE)->insert([
            array('package_id' => '1', 'module_id' => $building, 'limit' => '3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('package_id' => '1', 'module_id' => $floor, 'limit' => '2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('package_id' => '1', 'module_id' => $flat, 'limit' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('package_id' => '1', 'module_id' => $freelancer, 'limit' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);
    }
}
