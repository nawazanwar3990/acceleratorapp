<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PLANS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table(TableEnum::PLANS)->insert([
            array('plan_for' => 'building', 'name' => 'Test Installment Plan', 'months' => '12', 'installment_duration' => '1', 'total_installments' => '12', 'reminder_days' => '10', 'down_payment_type' => '1', 'down_payment_value' => '12.00', 'penalties' => '0', 'first_penalty' => '0', 'first_penalty_days' => NULL, 'first_penalty_type' => NULL, 'first_penalty_charges' => NULL, 'second_penalty' => '0', 'second_penalty_days' => NULL, 'second_penalty_type' => NULL, 'second_penalty_charges' => NULL, 'third_penalty' => '0', 'third_penalty_days' => NULL, 'third_penalty_type' => NULL, 'third_penalty_charges' => NULL, 'created_by' => '2', 'updated_by' => NULL, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUILDING_PLAN)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUILDING_PLAN)->insert([
            array('building_id' => '1', 'plan_id' => '1', 'created_by' => 2, 'updated_by' => 2, 'deleted_by' => NULL, 'deleted_at' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);
    }
}
