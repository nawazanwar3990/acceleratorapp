<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::USERS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::USERS, 'google_map_path')) {
                $table->longText('google_map_path')->after('last_name')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::USERS, 'address')) {
                $table->longText('address')->after('google_map_path')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::USERS, 'about_us')) {
                $table->longText('about_us')->after('address')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::USERS, 'social_accounts')) {
                $table->json('social_accounts')->after('about_us')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::USERS, 'office_timings')) {
                $table->json('office_timings')->after('social_accounts')->nullable();
            }
        });
    }
    public function down()
    {
    }
};
