<?php

namespace Database\Seeders;
use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::ROLE_USER)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::ROLE_USER)->insert([
            [
                'role_id' => Role::whereSlug(RoleEnum::SUPER_ADMIN)->value('id'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => Role::whereSlug(RoleEnum::BUSINESS_ACCELERATOR)->value('id'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => Role::whereSlug(RoleEnum::BUSINESS_ACCELERATOR)->value('id'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => Role::whereSlug(RoleEnum::FREELANCER)->value('id'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => Role::whereSlug(RoleEnum::FREELANCER)->value('id'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => Role::whereSlug(RoleEnum::MENTOR)->value('id'),
                'user_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ]);
    }
}
