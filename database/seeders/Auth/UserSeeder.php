<?php

namespace Database\Seeders\Auth;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::USERS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::USERS)->insert([
            [
                'hr_id' => '1',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'user_name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'photo' => 'theme/images/users/1.jpg',
                'password' => Hash::make('admin123'),
                'normal_password' => 'admin123',
                'active' => true,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
