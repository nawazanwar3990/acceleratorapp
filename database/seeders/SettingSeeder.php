<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SETTINGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::SETTINGS)->insert([
            [
                'currency_format' => 'PKR',
                'time_zone' => 'Asia/Karachi',
                'language' => 'en',
                'currency_symbol_position' => 'hide',
                'date_format' => 'd-M-Y'
            ],
        ]);
    }
}
