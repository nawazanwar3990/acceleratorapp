<?php

namespace Database\Seeders;

use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::SERVICES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $services = [
            [
                'name' => 'Gas',
                'slug' => 'gas',
                'type' => ServiceTypeEnum::BASIC_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Electricity',
                'slug' => 'electricity',
                'type' => ServiceTypeEnum::BASIC_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Water',
                'slug' => 'water',
                'type' => ServiceTypeEnum::BASIC_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Smoke Sensor',
                'slug' => 'smoke-sensor',
                'type' => ServiceTypeEnum::ADDITIONAL_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Fire Alarm',
                'slug' => 'fire-alarm',
                'type' => ServiceTypeEnum::ADDITIONAL_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Lift',
                'slug' => 'lift',
                'type' => ServiceTypeEnum::ADDITIONAL_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Incubator',
                'slug' => 'incubator',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ],
            [
                'name' => 'Freelancer',
                'slug' => 'freelancer',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ],
            [
                'name' => 'Meeting Room',
                'slug' => 'meeting-room',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ],
            [
                'name' => 'Mentorship With Investment',
                'slug' => 'mentorship-with-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ],
            [
                'name' => 'Mentorship With Out Investment',
                'slug' => 'mentorship-with-out-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ],
            [
                'name' => 'Only Investment',
                'slug' => 'only-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
                'created_by' => 1,
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
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
    }
}
