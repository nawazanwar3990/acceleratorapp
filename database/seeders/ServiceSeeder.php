<?php

namespace Database\Seeders;

use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SERVICES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach (ServiceTypeEnum::getDefaultFreelancerServices() as $service) {
            Service::create($service);
        }
        foreach (ServiceTypeEnum::getDefaultBAServices() as $service) {
            Service::create($service);
        }
        foreach (ServiceTypeEnum::getDefaultParentMentorServices() as $service) {
            Service::create($service);
        }
        foreach (ServiceTypeEnum::getDefaultChildMentorServices() as $service) {
            Service::create($service);
        }
    }
}
