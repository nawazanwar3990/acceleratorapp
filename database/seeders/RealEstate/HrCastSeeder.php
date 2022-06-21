<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HR_CASTS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HR_CASTS)->insert([
            ['name' => 'Butt'],
            ['name' => 'Arain'],
            ['name' => 'Malik'],
            ['name' => 'Rajput'],
            ['name' => 'Jutt'],
            ['name' => 'Ansari'],
            ['name' => 'Mughal'],
            ['name' => 'Sheikh'],
            ['name' => 'Awan'],
            ['name' => 'Gujjar'],
        ]);
    }
}
