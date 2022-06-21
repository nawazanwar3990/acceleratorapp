<?php

namespace Database\Seeders\Accounts;

use App\Enum\TableEnum;
use App\Services\SeederService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherPrefixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::VOUCHER_PREFIXES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::VOUCHER_PREFIXES)->insert(
            SeederService::getPrefixSeeders(1)
        );
    }
}
