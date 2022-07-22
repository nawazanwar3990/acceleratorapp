<?php

namespace Database\Seeders;

use App\Enum\PaymentTypeEnum;
use App\Enum\TableEnum;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SETTINGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Setting::create(
            [
                'currency_format' => 'UAE',
                'payment_type' => PaymentTypeEnum::getValues(),
                'time_zone' => 'Asia/Karachi',
                'language' => 'en',
                'currency_symbol_position' => 'hide',
                'date_format' => 'd-M-Y'
            ]
        );
    }
}
