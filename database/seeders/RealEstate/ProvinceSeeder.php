<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PROVINCES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::PROVINCES)->insert([
            ['id' => 2, 'country_id' => 161, 'name' => 'Punjab'],
            ['id' => 3, 'country_id' => 161, 'name' => 'Khyber Pakhtunkhwa'],
            ['id' => 5, 'country_id' => 161, 'name' => 'Balochistan'],
            ['id' => 6, 'country_id' => 161, 'name' => 'Federally Administered Tribal Areas'],
            ['id' => 7, 'country_id' => 161, 'name' => 'Azad Kashmir'],
            ['id' => 9, 'country_id' => 161, 'name' => 'Gilgit Baltistan'],
        ]);
    }
}
