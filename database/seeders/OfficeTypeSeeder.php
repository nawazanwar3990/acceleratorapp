<?php

namespace Database\Seeders;

use App\Enum\OfficeTypeEnum;
use App\Enum\TableEnum;
use App\Models\OfficeType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeTypeSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::OFFICE_TYPES)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        foreach (OfficeTypeEnum::getTranslationKeys() as $key => $value) {
            OfficeType::create([
                'name' => $value,
                'status' => 1
            ]);
        }
    }
}
