<?php

namespace Database\Seeders;

use App\Enum\DurationEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::DURATIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        foreach (DurationEnum::getTranslationKeys() as $key => $value) {
            DB::table(TableEnum::DURATIONS)->insert([
                [
                    'name' => $value,
                    'slug' => $key,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'created_by' => 1,
                    'updated_by' => 1
                ]
            ]);
        }

    }
}
