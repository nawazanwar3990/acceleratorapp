<?php

namespace Database\Seeders;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::HRS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::HRS)->insert([
            [
                'user_id' => '1',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'superadmin@gmail.com',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'user_id' => '2',
                'first_name' => 'Business',
                'last_name' => 'Accelerator',
                'email' => 'business-accelerator@gmail.com',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => '3',
                'first_name' => 'Test',
                'last_name' => 'Customer',
                'email' => 'customer@gmail.com',
                'created_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::USERS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::USERS)->insert([
            [
                'hr_id' => '1',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'user_name' => uniqid(),
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'hr_id' => '2',
                'first_name' => 'Business',
                'last_name' => 'Accelerator',
                'user_name' => uniqid(),
                'email' => 'ba@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'hr_id' => '3',
                'first_name' => 'Test',
                'last_name' => 'Customer',
                'user_name' => uniqid(),
                'email' => 'customer@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ]
        ]);
    }
}
