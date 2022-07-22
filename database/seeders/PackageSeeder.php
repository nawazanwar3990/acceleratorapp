<?php

namespace Database\Seeders;
use App\Enum\PackageTypeEnum;
use App\Enum\ServiceTypeEnum;
use App\Enum\TableEnum;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PACKAGES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table(TableEnum::PACKAGES)->insert([
            array(
                'type' => PackageTypeEnum::COMPANY,
                'name' => 'Free',
                'duration_type_id' => '3',
                'duration_limit' => '1',
                'trail_expire_date' => NULL,
                'slug' => 'free',
                'price' => '0',
                'reminder_days' => '3',
                'created_by' => '1',
                'updated_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'type' => PackageTypeEnum::COMPANY,
                'name' => 'Basic',
                'duration_type_id' => '3',
                'duration_limit' => '1',
                'trail_expire_date' => NULL,
                'slug' => 'basic',
                'price' => '2',
                'reminder_days' => '3',
                'created_by' => '1',
                'updated_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'type' => PackageTypeEnum::COMPANY,
                'name' => 'Premium',
                'duration_type_id' => '3',
                'duration_limit' => '1',
                'trail_expire_date' => NULL,
                'slug' => 'premium',
                'price' => '3',
                'reminder_days' => '3',
                'created_by' => '1',
                'updated_by' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::PACKAGE_SERVICE)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $incubator_id = Service::whereSlug('incubator')->whereType(ServiceTypeEnum::PACKAGE_SERVICE)->value('id');
        $freelancer_id = Service::whereSlug('freelancer')->whereType(ServiceTypeEnum::PACKAGE_SERVICE)->value('id');
        $per_week_meeting_id = Service::whereSlug('per-week-meeting')->whereType(ServiceTypeEnum::PACKAGE_SERVICE)->value('id');
        $mentorship_id = Service::whereName('mentorship')->whereType(ServiceTypeEnum::PACKAGE_SERVICE)->value('id');
        $investment_id = Service::whereName('investment')->whereType(ServiceTypeEnum::PACKAGE_SERVICE)->value('id');

        DB::table(TableEnum::PACKAGE_SERVICE)->insert(
           [
               array('package_id' => '1', 'service_id' => $incubator_id, 'limit' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '1', 'service_id' => $freelancer_id, 'limit' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '1', 'service_id' => $per_week_meeting_id, 'limit' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '1', 'service_id' => $mentorship_id, 'limit' => '0', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '1', 'service_id' => $investment_id, 'limit' => '0', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

               array('package_id' => '2', 'service_id' => $incubator_id, 'limit' => '5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '2', 'service_id' => $freelancer_id, 'limit' => '5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '2', 'service_id' => $per_week_meeting_id, 'limit' => '5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '2', 'service_id' => $mentorship_id, 'limit' => '3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '2', 'service_id' => $investment_id, 'limit' => '3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

               array('package_id' => '3', 'service_id' => $incubator_id, 'limit' => '∞', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '3', 'service_id' => $freelancer_id, 'limit' => '∞', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '3', 'service_id' => $per_week_meeting_id, 'limit' => '∞', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '3', 'service_id' => $mentorship_id, 'limit' => '∞', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
               array('package_id' => '3', 'service_id' => $investment_id, 'limit' => '∞', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
           ]
        );
    }
}
