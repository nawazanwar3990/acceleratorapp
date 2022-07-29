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

        $freelancerServices = array(
            [
                'name' => 'IT Services',
                'slug' => 'it-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true
            ],
            [
                'name' => 'Designing Services',
                'slug' => 'designing-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Manufacturing Services',
                'slug' => 'manufacturing-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Training Services',
                'slug' => 'training-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Electrical & Electronic Services',
                'slug' => 'electrical-and-electronic-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Mason And Labor Class Services',
                'slug' => 'mason-and-labor-class-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Driving Service',
                'slug' => 'driving-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Carpenter Service',
                'slug' => 'carpenter-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Logistic Service',
                'slug' => 'logistic-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
        );
        foreach ($freelancerServices as $service) {
            Service::create($service);
        }

        $baServices = array(
            [
                'name' => 'Incubator',
                'slug' => 'incubator',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true
            ],
            [
                'name' => 'Freelancer',
                'slug' => 'freelancer',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Meeting Room',
                'slug' => 'meeting-room',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'MentorShip with Investment',
                'slug' => 'mentorship-with-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with out Investment',
                'slug' => 'mentorship-with-out-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Only Investment',
                'slug' => 'only-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ]
        );
        foreach ($baServices as $service) {
            Service::create($service);
        }
    }
}
