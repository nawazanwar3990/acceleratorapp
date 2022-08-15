<?php

namespace Database\Seeders;

use App\Enum\EventTypeEnum;
use App\Enum\MeetingParentTypeEnum;
use App\Enum\TableEnum;
use App\Models\EventType;
use App\Models\MeetingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MeetingTypeSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::MEETING_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $parentId = null;
        foreach (MeetingParentTypeEnum::getMeetingTypes() as $array) {
            foreach ($array as $event) {
                if (!is_array($event)) {
                    $parent = MeetingType::create([
                        'name' => $event,
                        'slug' => Str::slug($event, '-'),
                        'status' => true,
                        'created_by' => 1
                    ]);
                    $parentId = $parent->id;
                } else {
                    foreach ($event as $e) {
                        MeetingType::create([
                            'name' => $e,
                            'slug' => Str::slug($e, '-'),
                            'status' => true,
                            'parent_id'=>$parentId,
                            'created_by' => 1
                        ]);
                    }
                }
            }
        }
    }
}
