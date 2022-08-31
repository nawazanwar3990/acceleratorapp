<?php

namespace Database\Seeders;

use App\Enum\PaymentTypeProcessEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessSeeder extends Seeder
{
    public function run()
    {
        /*Manage  test ba individual and company */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BA)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BA)->insert([
            array(
                'user_id' => '2',
                'payment_process' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN,
                'company_name' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'user_id' => '3',
                'payment_process' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN,
                'company_name' => 'Test Ba Company',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ]);
        /*Manage  test ba individual and company */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::FREELANCERS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::FREELANCERS)->insert([
            array(
                'user_id' => '4',
                'payment_process' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN,
                'company_name' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'user_id' => '5',
                'payment_process' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN,
                'company_name' => 'Sp Company',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ]);
        /*Manage  test ba individual and company */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::MENTORS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::MENTORS)->insert([
            array(
                'user_id' => '6',
                'payment_process' => PaymentTypeProcessEnum::PRE_DEFINED_PLAN,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
        ]);
    }
}
