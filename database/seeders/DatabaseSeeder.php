<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(OfficeTypeSeeder::class);
        $this->call(FloorTypeSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(DurationSeeder::class);
       /* $this->call(PackageSeeder::class);*/
        $this->call(ServiceSeeder::class);
        /*$this->call(SubscriptionSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(FloorSeeder::class);*/
    }
}
