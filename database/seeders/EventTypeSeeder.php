<?php

namespace Database\Seeders;

use App\Enum\EventTypeEnum;
use App\Enum\TableEnum;
use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventTypeSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::EVENT_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $parentId = null;
        foreach (EventTypeEnum::getEventTypesArray() as $array) {
            foreach ($array as $event) {
                if (!is_array($event)) {
                    $parent = EventType::create([
                        'name' => $event,
                        'slug' => Str::slug($event, '-'),
                        'status' => true,
                        'created_by' => 1
                    ]);
                    $parentId = $parent->id;
                } else {
                    foreach ($event as $e) {
                        EventType::create([
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
