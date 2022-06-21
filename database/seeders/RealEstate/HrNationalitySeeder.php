<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HrNationalitySeeder extends Seeder
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
            ['name' => 'Pakistani'],
            ['name' => 'Indian'],
            ['name' => 'Egyptian'],
            ['name' => 'American'],
            ['name' => 'British'],
            ['name' => 'Afghan'],
            ['name' => 'Chinese'],
            ['name' => 'Canadian'],
        ]);
    }
}
