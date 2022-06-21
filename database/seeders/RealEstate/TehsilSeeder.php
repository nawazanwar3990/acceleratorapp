<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TehsilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::TEHSILS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::TEHSILS)->insert([
            ['id' => 1, 'district_id' => 8, 'name' => 'Chak Jhumra'],
            ['id' => 3, 'district_id' => 8, 'name' => 'Faisalabad Sadar'],
            ['id' => 4, 'district_id' => 8, 'name' => 'Jaranwala'],
            ['id' => 5, 'district_id' => 8, 'name' => 'Samundri'],
            ['id' => 6, 'district_id' => 8, 'name' => 'Chiniot'],
            ['id' => 7, 'district_id' => 8, 'name' => 'Tandlianwala'],
            ['id' => 8, 'district_id' => 33, 'name' => 'Sheikhupura'],
            ['id' => 9, 'district_id' => 36, 'name' => 'Mailsi'],
            ['id' => 10, 'district_id' => 6, 'name' => 'Bhoana'],
            ['id' => 11, 'district_id' => 35, 'name' => 'Kamalia'],
            ['id' => 12, 'district_id' => 12, 'name' => 'Jhang'],
            ['id' => 13, 'district_id' => 6, 'name' => 'lalian'],
            ['id' => 14, 'district_id' => 32, 'name' => 'Sargodha'],
            ['id' => 15, 'district_id' => 35, 'name' => 'Toba Tek Singh'],
            ['id' => 16, 'district_id' => 12, 'name' => 'Shorkot'],
            ['id' => 17, 'district_id' => 35, 'name' => 'Gojra'],
            ['id' => 18, 'district_id' => 21, 'name' => 'Isakhel'],
            ['id' => 19, 'district_id' => 24, 'name' => 'Shahkot'],
            ['id' => 20, 'district_id' => 32, 'name' => 'Shahpur'],
            ['id' => 21, 'district_id' => 42, 'name' => 'Attock'],
            ['id' => 23, 'district_id' => 8, 'name' => 'Faisalabad'],
        ]);
    }
}
