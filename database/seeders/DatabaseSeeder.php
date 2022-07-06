<?php

namespace Database\Seeders;
use App\Models\WorkingSpace\FloorType;
use Database\Seeders\Auth\PermissionSeeder;
use Database\Seeders\Auth\RoleSeeder;
use Database\Seeders\Auth\RoleUserSeeder;
use Database\Seeders\Auth\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(FlatTypeSeeder::class);
        $this->call(FloorTypeSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(DurationSeeder::class);

        $this->call(ServiceSeeder::class);
        $this->call(BuildingSeeder::class);

    }
}
