<?php

namespace Database\Seeders;

use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\ServiceManagement\Service;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'type' => 'general_service',
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Electricity',
                'slug' => 'electricity',
                'type' => 'general_service',
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Water',
                'slug' => 'water',
                'type' => 'general_service',
                'status' => true,
            ],
            [
                'name' => 'Smoke Sensor',
                'slug' => 'smoke-sensor',
                'type' => 'security_service',
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Fire Alarm',
                'slug' => 'fire-alarm',
                'type' => 'security_service',
                'status' => true,
                'created_by' => 2,
            ],
            [
                'name' => 'Lift',
                'slug' => 'lift',
                'type' => 'general_service',
                'status' => true,
                'created_by' => 2,
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        $parentService = Service::create(
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
                'created_by' => 2,
            ]
        );
        $childServices = array(
            [
                'parent_id' => $parentService->id,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'parent_id' => $parentService->id,
                'name' => 'Node Js',
                'slug' => 'nodejs',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
                'created_by' => 2,
            ],
            [
                'parent_id' => $parentService->id,
                'name' => 'Express Js',
                'slug' => 'express-js',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
                'created_by' => 2,
            ]
        );
        foreach ($childServices as $service){
            Service::create($service);
        }
    }
}
