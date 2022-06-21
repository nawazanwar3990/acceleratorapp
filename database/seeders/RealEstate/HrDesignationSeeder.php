<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HR_DESIGNATION)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HR_DESIGNATION)->insert([
            ['name' => 'Manager'],
            ['name' => 'Office Boy'],
            ['name' => 'HR Manager'],
            ['name' => 'Driver'],
            ['name' => 'Cleaner'],
            ['name' => 'Watchman'],
        ]);
    }
}
