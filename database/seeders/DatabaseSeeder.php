<?php

namespace Database\Seeders;

use Database\Seeders\Accounts\VoucherPrefixSeeder;
use Database\Seeders\Auth\PermissionSeeder;
use Database\Seeders\Auth\RoleSeeder;
use Database\Seeders\Auth\RoleUserSeeder;
use Database\Seeders\Auth\UserSeeder;
use Database\Seeders\Accounts\AccountHeadSeeder;
use Database\Seeders\RealEstate\BrokerSeeder;
use Database\Seeders\RealEstate\BuildingSeeder;
use Database\Seeders\RealEstate\BusinessSeeder;
use Database\Seeders\RealEstate\ColonySeeder;
use Database\Seeders\RealEstate\CommodityTypeSeeder;
use Database\Seeders\RealEstate\CountrySeeder;
use Database\Seeders\RealEstate\DistrictSeeder;
use Database\Seeders\RealEstate\EmployeeTypeSeeder;
use Database\Seeders\RealEstate\FlatTypeSeeder;
use Database\Seeders\RealEstate\FloorTypeSeeder;
use Database\Seeders\RealEstate\HrCastSeeder;
use Database\Seeders\RealEstate\HrDepartmentSeeder;
use Database\Seeders\RealEstate\HrDesignationSeeder;
use Database\Seeders\RealEstate\HrNationalitySeeder;
use Database\Seeders\RealEstate\HrRelationSeeder;
use Database\Seeders\RealEstate\HumanResourceSeeder;
use Database\Seeders\RealEstate\InstallmentPlanSeeder;
use Database\Seeders\RealEstate\NationalitySeeder;
use Database\Seeders\RealEstate\ProvinceSeeder;
use Database\Seeders\RealEstate\ServicesDefinitionSeeder;
use Database\Seeders\RealEstate\TehsilSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(BusinessSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(AccountHeadSeeder::class);
        $this->call(ServicesDefinitionSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(TehsilSeeder::class);
        $this->call(ColonySeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(HrRelationSeeder::class);
        $this->call(HrCastSeeder::class);
        $this->call(HrNationalitySeeder::class);
        $this->call(HrDepartmentSeeder::class);
        $this->call(HrDesignationSeeder::class);
        $this->call(EmployeeTypeSeeder::class);
        $this->call(FloorTypeSeeder::class);
        $this->call(FlatTypeSeeder::class);
        $this->call(VoucherPrefixSeeder::class);
        $this->call(CommodityTypeSeeder::class);
        $this->call(HumanResourceSeeder::class);
        $this->call(BrokerSeeder::class);
        $this->call(InstallmentPlanSeeder::class);
        $this->call(SystemSettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
