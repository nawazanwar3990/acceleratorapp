<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::COLONIES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::COLONIES)->insert(['id' =>
            ['id' => 1, 'tehsil_id' => 3, 'name' => 'Eden Garden'],
            ['id' => 2, 'tehsil_id' => 3, 'name' => 'Eden Valley'],
            ['id' => 3, 'tehsil_id' => 3, 'name' => 'Faisal Garden'],
            ['id' => 4, 'tehsil_id' => 3, 'name' => 'Abdullah Garden'],
            ['id' => 5, 'tehsil_id' => 3, 'name' => 'Chibban'],
            ['id' => 8, 'tehsil_id' => 3, 'name' => 'Abdullah Pur'],
            ['id' => 9, 'tehsil_id' => 3, 'name' => 'Afghan Abad No .1'],
            ['id' => 10, 'tehsil_id' => 3, 'name' => 'Al-Masoom Town'],
            ['id' => 11, 'tehsil_id' => 3, 'name' => 'Ali Housing Colony'],
            ['id' => 12, 'tehsil_id' => 3, 'name' => 'Allama Iqbal Town'],
            ['id' => 13, 'tehsil_id' => 3, 'name' => 'Al-Najaf Colony'],
            ['id' => 14, 'tehsil_id' => 3, 'name' => 'Al-Noor Garden'],
            ['id' => 15, 'tehsil_id' => 3, 'name' => 'Amin Town'],
            ['id' => 16, 'tehsil_id' => 3, 'name' => 'Amin Abad No 1'],
            ['id' => 17, 'tehsil_id' => 3, 'name' => 'Asim Town'],
            ['id' => 18, 'tehsil_id' => 3, 'name' => 'Ayub Colony'],
            ['id' => 19, 'tehsil_id' => 3, 'name' => 'Aziz Colony'],
            ['id' => 20, 'tehsil_id' => 3, 'name' => 'Barkat Pura'],
            ['id' => 21, 'tehsil_id' => 3, 'name' => 'Bismillah Colony'],
            ['id' => 22, 'tehsil_id' => 3, 'name' => 'Bismillah Park'],
            ['id' => 23, 'tehsil_id' => 3, 'name' => 'Civil line Division'],
            ['id' => 24, 'tehsil_id' => 3, 'name' => 'Dunia Pur'],
            ['id' => 25, 'tehsil_id' => 3, 'name' => 'Diglus Pura'],
            ['id' => 26, 'tehsil_id' => 3, 'name' => 'D-Type Colony'],
            ['id' => 27, 'tehsil_id' => 3, 'name' => 'D-Type Millat Colony'],
            ['id' => 31, 'tehsil_id' => 3, 'name' => 'Faisal Town'],
            ['id' => 32, 'tehsil_id' => 3, 'name' => 'Fareed Town'],
            ['id' => 33, 'tehsil_id' => 3, 'name' => 'Fariq Town'],
            ['id' => 34, 'tehsil_id' => 3, 'name' => 'Fesco Officer Colony'],
            ['id' => 35, 'tehsil_id' => 3, 'name' => 'G.T.L Colony Wapda'],
            ['id' => 36, 'tehsil_id' => 3, 'name' => 'Garden Colony'],
            ['id' => 37, 'tehsil_id' => 3, 'name' => 'Ghulam Muhammad Abad'],
            ['id' => 38, 'tehsil_id' => 3, 'name' => 'Green Town'],
            ['id' => 39, 'tehsil_id' => 3, 'name' => 'Green View Colony'],
            ['id' => 40, 'tehsil_id' => 3, 'name' => 'Gulberg Colony'],
            ['id' => 41, 'tehsil_id' => 3, 'name' => 'Gulbahar Colony'],
            ['id' => 42, 'tehsil_id' => 3, 'name' => 'Guru Nanak Pura'],
            ['id' => 43, 'tehsil_id' => 3, 'name' => 'Hassan Abad Town'],
            ['id' => 44, 'tehsil_id' => 3, 'name' => 'Haseeb Shaheed Colony'],
            ['id' => 45, 'tehsil_id' => 3, 'name' => 'Hassan Pura'],
            ['id' => 46, 'tehsil_id' => 3, 'name' => 'Islam Nagar'],
            ['id' => 47, 'tehsil_id' => 3, 'name' => 'Islamia Park Chibban'],
            ['id' => 48, 'tehsil_id' => 3, 'name' => 'Jinnah Colony'],
            ['id' => 49, 'tehsil_id' => 3, 'name' => 'Kaleem Shaheed Colony No.2'],
            ['id' => 50, 'tehsil_id' => 3, 'name' => 'Kaleem Shaheed Colony'],
            ['id' => 51, 'tehsil_id' => 3, 'name' => 'Karkhana Bazar'],
            ['id' => 52, 'tehsil_id' => 3, 'name' => 'Kachi Abadi'],
            ['id' => 53, 'tehsil_id' => 3, 'name' => 'Kahkashan Colony'],
            ['id' => 54, 'tehsil_id' => 3, 'name' => 'Kahkashan Colony No 2'],
            ['id' => 55, 'tehsil_id' => 3, 'name' => 'Khalid Abad'],
            ['id' => 56, 'tehsil_id' => 3, 'name' => 'Khawaja Garden'],
            ['id' => 57, 'tehsil_id' => 3, 'name' => 'Khayaban Colony'],
            ['id' => 58, 'tehsil_id' => 3, 'name' => 'Khayaban Colony No 2'],
            ['id' => 59, 'tehsil_id' => 3, 'name' => 'Khushi Town'],
            ['id' => 60, 'tehsil_id' => 3, 'name' => 'Latif Park'],
            ['id' => 61, 'tehsil_id' => 3, 'name' => 'Liaquat Town'],
            ['id' => 62, 'tehsil_id' => 3, 'name' => 'Madina Town'],
            ['id' => 63, 'tehsil_id' => 3, 'name' => 'Malik Pur'],
            ['id' => 64, 'tehsil_id' => 3, 'name' => 'Mansoor Abad'],
            ['id' => 65, 'tehsil_id' => 3, 'name' => 'Millat Colony'],
            ['id' => 66, 'tehsil_id' => 3, 'name' => 'Model Town'],
            ['id' => 67, 'tehsil_id' => 3, 'name' => 'Mughal Pura'],
            ['id' => 68, 'tehsil_id' => 3, 'name' => 'Muhammad Nagar'],
            ['id' => 69, 'tehsil_id' => 3, 'name' => 'Muhammad Abad'],
            ['id' => 70, 'tehsil_id' => 3, 'name' => 'Muhammad Pura'],
            ['id' => 71, 'tehsil_id' => 3, 'name' => 'Muslim Town'],
            ['id' => 72, 'tehsil_id' => 3, 'name' => 'Muslim Town No.1'],
            ['id' => 73, 'tehsil_id' => 3, 'name' => 'Muslim Town No 2'],
            ['id' => 74, 'tehsil_id' => 3, 'name' => 'Nigheban Pura'],
            ['id' => 75, 'tehsil_id' => 3, 'name' => 'New Civil Line'],
            ['id' => 76, 'tehsil_id' => 3, 'name' => 'Nemat Colony No 1'],
            ['id' => 77, 'tehsil_id' => 3, 'name' => 'Nemat Colony No 2'],
            ['id' => 78, 'tehsil_id' => 3, 'name' => 'Nishat Abad'],
            ['id' => 79, 'tehsil_id' => 3, 'name' => 'Noor Pur'],
            ['id' => 80, 'tehsil_id' => 3, 'name' => 'Officers Colony No 1'],
            ['id' => 81, 'tehsil_id' => 3, 'name' => 'Officers Colony No 2'],
            ['id' => 82, 'tehsil_id' => 3, 'name' => 'Peoples Colony No 1'],
            ['id' => 83, 'tehsil_id' => 3, 'name' => 'Qamar Garden'],
            ['id' => 84, 'tehsil_id' => 3, 'name' => 'Rabbani Colony No 1'],
            ['id' => 85, 'tehsil_id' => 3, 'name' => 'Railway Colony'],
            ['id' => 86, 'tehsil_id' => 3, 'name' => 'Rehman Pura'],
            ['id' => 87, 'tehsil_id' => 8, 'name' => 'Labor Colony'],
            ['id' => 88, 'tehsil_id' => 3, 'name' => 'Ismail Green'],
            ['id' => 89, 'tehsil_id' => 9, 'name' => 'Dhodha'],
            ['id' => 90, 'tehsil_id' => 9, 'name' => 'Hassan Abad'],
            ['id' => 91, 'tehsil_id' => 3, 'name' => 'WAPDA City Phase 01'],
            ['id' => 92, 'tehsil_id' => 3, 'name' => 'Lakkar Mandi'],
            ['id' => 93, 'tehsil_id' => 6, 'name' => 'Qasim Abad'],
            ['id' => 94, 'tehsil_id' => 3, 'name' => 'Peoples Colony No.2'],
            ['id' => 95, 'tehsil_id' => 3, 'name' => 'Gulshan-e-Hayat'],
            ['id' => 96, 'tehsil_id' => 3, 'name' => 'Liaquat Abad No.1'],
            ['id' => 97, 'tehsil_id' => 3, 'name' => 'Liaquat Abad No.2'],
            ['id' => 98, 'tehsil_id' => 3, 'name' => 'Johar Colony'],
            ['id' => 99, 'tehsil_id' => 3, 'name' => 'Abdullah Colony'],
            ['id' => 100, 'tehsil_id' => 3, 'name' => 'Samanabad'],
            ['id' => 101, 'tehsil_id' => 3, 'name' => 'Nisar Colony'],
            ['id' => 102, 'tehsil_id' => 3, 'name' => 'Ala Abad'],
        ]);
    }
}
