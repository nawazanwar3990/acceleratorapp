<?php

namespace Database\Seeders;

use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\ServiceManagement\Service;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FreelancerServiceSeeder extends Seeder
{
    public function run()
    {
        $services = Service::whereType(ServiceTypeEnum::FREELANCER_SERVICE)->get();
        foreach ($services as $service) {
            DB::table(TableEnum::HR_SERVICE)->insert([
                'hr_id' => 4,
                'service_id' => $service->id,
                'created_by' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
