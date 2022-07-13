<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::ROLES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        foreach (RoleEnum::getTranslationKeys() as $key => $value) {
            DB::table(TableEnum::ROLES)->insert([
                [
                    'name' => $value,
                    'slug' => $key,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ]);
        }
    }
}
