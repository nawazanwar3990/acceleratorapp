<?php

namespace Database\Seeders\RealEstate;

use App\Enum\TableEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HumanResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HRS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HRS)->insert([
            [
                'user_id' => '1',
                'hr_no' => 'HR-46436',
                'first_name' => 'Super',
                'middle_name' => '',
                'last_name' => 'Admin',
                'email' => 'superadmin@gmail.com',
                'cnic' => '11111-1111111-1',
                'date_of_birth' => '1990-01-01',
                'nationality_id' => 1,
                'gender' => 'male',
                'cell_1' => '00923001234567',
                'cell_whats_app' => '00923001234567',
                'building_id' => 1,
            ],
            [
                'user_id' => null,
                'hr_no' => 'HR-98466',
                'first_name' => 'Dummy',
                'middle_name' => 'Human',
                'last_name' => 'Resource 1',
                'email' => 'dumyhuman1@gmail.com',
                'cnic' => '11111-1111111-1',
                'date_of_birth' => '1990-01-01',
                'nationality_id' => 1,
                'gender' => 'male',
                'cell_1' => '00923001234567',
                'cell_whats_app' => '00923001234567',
                'building_id' => 1,
            ],
            [
                'user_id' => null,
                'hr_no' => 'HR-79841',
                'first_name' => 'Dummy',
                'middle_name' => 'Human',
                'last_name' => 'Resource 2',
                'email' => 'dumyhuman2@gmail.com',
                'cnic' => '22222-2222222-2',
                'date_of_birth' => '1990-01-01',
                'nationality_id' => 1,
                'gender' => 'female',
                'cell_1' => '00923007654321',
                'cell_whats_app' => '00923007654321',
                'building_id' => 1,
            ],
        ]);
    }
}
