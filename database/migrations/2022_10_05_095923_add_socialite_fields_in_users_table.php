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
            if (!Schema::hasColumn(TableEnum::USERS, 'provider')) {
                $table->string('provider')->after('last_name')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::USERS, 'provider_id')) {
                $table->string('provider_id')->after('provider')->nullable();
            }
        });
    }
    public function down()
    {
    }
};
