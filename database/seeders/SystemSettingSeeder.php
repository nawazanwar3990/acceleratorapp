<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SYSTEM_SETTINGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::SYSTEM_SETTINGS)->insert([
            [
                'currency_format' => 'PKR',
                'time_zone' => 'Asia/Karachi',
                'language' => 'en',
                'currency_symbol_position' => 'hide',
                'date_format' => 'd-M-Y',
                'print_template' => 'template-1',
            ],
        ]);
    }
}
