<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallmentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::INSTALLMENT_PLANS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::INSTALLMENT_PLANS)->insert([
            [
                'name' => '6 Year Plan (4 Month Installment)',
                'months' => '72',
                'installment_duration' => '4',
                'total_installments' => '18',
                'reminder_days' => '10',
                'down_payment_type' => '1',
                'down_payment_value' => '100000',
                'building_id' => '1',
            ],
        ]);
    }
}
