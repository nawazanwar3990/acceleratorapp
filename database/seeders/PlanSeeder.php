<?php

namespace Database\Seeders;

use App\Enum\PlanEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (PlanEnum::getTranslationKeys() as $key => $value) {
            DB::table(TableEnum::PLANS)->insert([
                [
                    'name' => $value,
                    'slug' => Str::slug($key, '-'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ]);

        }


    }
}
