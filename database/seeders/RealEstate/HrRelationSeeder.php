<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HR_RELATIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HR_RELATIONS)->insert([
            ['name' => 'Father'],
            ['name' => 'Mother'],
            ['name' => 'Brother'],
            ['name' => 'Sister'],
            ['name' => 'Son'],
            ['name' => 'Daughter'],
            ['name' => 'Wife'],
            ['name' => 'Husband'],

        ]);
    }
}
