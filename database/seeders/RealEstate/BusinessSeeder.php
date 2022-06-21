<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::BUSINESSES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::BUSINESSES)->insert([
            [
                'name' => 'OptimumTech',
                'cell' => '03136650965',
                'landline' => '0415474400',
                'email' => 'info@theoptimumtech.com',
                'website' => 'www.theoptimumtech.com',
                'logo' => 'theme/images/business/ot-logo.png',
                'logo_report' => 'theme/images/business/ot-logo.png',
            ]
        ]);
    }
}
