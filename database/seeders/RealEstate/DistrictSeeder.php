<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::DISTRICTS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::DISTRICTS)->insert([
            ['id' => 1, 'province_id' => 2, 'name' => 'Chak Jhumra'],
            ['id' => 2, 'province_id' => 2, 'name' => 'Bahawalnagar'],
            ['id' => 3, 'province_id' => 2, 'name' => 'Bahawalpur'],
            ['id' => 4, 'province_id' => 2, 'name' => 'Bhakkar'],
            ['id' => 5, 'province_id' => 2, 'name' => 'Chakwal'],
            ['id' => 6, 'province_id' => 2, 'name' => 'Chiniot'],
            ['id' => 7, 'province_id' => 2, 'name' => 'D.G.Khan'],
            ['id' => 8, 'province_id' => 2, 'name' => 'Faisalabad'],
            ['id' => 9, 'province_id' => 2, 'name' => 'Gujranwala'],
            ['id' => 10, 'province_id' => 2, 'name' => 'Gujrat'],
            ['id' => 11, 'province_id' => 2, 'name' => 'Hafizabad'],
            ['id' => 12, 'province_id' => 2, 'name' => 'Jhang'],
            ['id' => 13, 'province_id' => 2, 'name' => 'Jhelum'],
            ['id' => 14, 'province_id' => 2, 'name' => 'Kasur'],
            ['id' => 15, 'province_id' => 2, 'name' => 'Khanewal'],
            ['id' => 16, 'province_id' => 2, 'name' => 'Khushab'],
            ['id' => 17, 'province_id' => 2, 'name' => 'Lahore'],
            ['id' => 18, 'province_id' => 2, 'name' => 'Layyah'],
            ['id' => 19, 'province_id' => 2, 'name' => 'Lodhran'],
            ['id' => 20, 'province_id' => 2, 'name' => 'Mandi Baha ud din'],
            ['id' => 21, 'province_id' => 2, 'name' => 'Mianwali'],
            ['id' => 22, 'province_id' => 2, 'name' => 'Multan'],
            ['id' => 23, 'province_id' => 2, 'name' => 'Muzaffargarh'],
            ['id' => 24, 'province_id' => 2, 'name' => 'Nankana Sahib'],
            ['id' => 25, 'province_id' => 2, 'name' => 'Narowal'],
            ['id' => 26, 'province_id' => 2, 'name' => 'Okara'],
            ['id' => 27, 'province_id' => 2, 'name' => 'Pakpattan'],
            ['id' => 28, 'province_id' => 2, 'name' => 'Rahim Yar Khan'],
            ['id' => 29, 'province_id' => 2, 'name' => 'Rajanpur'],
            ['id' => 30, 'province_id' => 2, 'name' => 'Rawalpindi'],
            ['id' => 31, 'province_id' => 2, 'name' => 'Sahiwal'],
            ['id' => 32, 'province_id' => 2, 'name' => 'Sargodha'],
            ['id' => 33, 'province_id' => 2, 'name' => 'Sheikhupura'],
            ['id' => 34, 'province_id' => 2, 'name' => 'Sialkot'],
            ['id' => 35, 'province_id' => 2, 'name' => 'Toba Tek Singh'],
            ['id' => 36, 'province_id' => 2, 'name' => 'Vehari'],
            ['id' => 40, 'province_id' => 3, 'name' => 'Bannu'],
            ['id' => 42, 'province_id' => 2, 'name' => 'Attock'],
        ]);
    }
}
