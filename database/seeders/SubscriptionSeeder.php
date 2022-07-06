<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SUBSCRIPTIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table(TableEnum::SUBSCRIPTIONS)->insert([
            array('subscribed_id' => '2', 'package_id' => '1', 'renewal_date' => Carbon::now(), 'expire_date' => Carbon::now(), 'price' => '1200', 'is_payed' => '1', 'created_by' => '1', 'updated_by' => NULL, 'deleted_by' => NULL, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SUBSCRIPTION_LOGS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::SUBSCRIPTION_LOGS)->insert([
            array('id' => '1', 'subscribed_id' => '2', 'subscription_id' => '1', 'package_id' => '1', 'price' => '1200', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        ]);
    }
}
