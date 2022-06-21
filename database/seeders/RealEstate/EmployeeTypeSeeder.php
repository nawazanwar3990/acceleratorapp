<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HR_EMPLOYEE_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HR_EMPLOYEE_TYPES)->insert([
            [
                'name' => 'Bank Employee',
                'parent_id'=>0,
            ],
            [
                'name' => 'Domestic Employee',
                'parent_id'=>0,
            ],
            [
                'name' => 'Government Employee',
                'parent_id'=>0,
            ],
            [
                'name' => 'Bank Cashier',
                'parent_id'=>1,
            ],
            [
                'name' => 'Clerk',
                'parent_id'=>3,
            ],
        ]);
    }
}
