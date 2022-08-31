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
        DB::table(TableEnum::USERS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::USERS)->insert([
            [
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
                'first_name' => 'BA',
                'last_name' => 'Individual',
                'user_name' => uniqid(),
                'email' => 'baindividual@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'first_name' => 'BA',
                'last_name' => 'Company',
                'user_name' => uniqid(),
                'email' => 'bacompany@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'first_name' => 'Freelancer',
                'last_name' => 'Individual',
                'user_name' => uniqid(),
                'email' => 'freelancer@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'first_name' => 'Service',
                'last_name' => 'Provider',
                'user_name' => uniqid(),
                'email' => 'sp@gmail.com',
                'password' => Hash::make('user123'),
                'normal_password' => 'user123',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'created_by' => '1',
                'email_verified_at' => Carbon::now()
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'Mentor',
                'user_name' => uniqid(),
                'email' => 'mentor@gmail.com',
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
