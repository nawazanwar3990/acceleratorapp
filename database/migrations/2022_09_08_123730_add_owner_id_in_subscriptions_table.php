<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::SUBSCRIPTIONS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::SUBSCRIPTIONS, 'owner_id')) {
                $table->string('owner_id')->after('id')->nullable();
            }
        });
    }

    public function down()
    {
    }
};
