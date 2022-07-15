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
            if (!Schema::hasColumn(TableEnum::SUBSCRIPTIONS, 'model_id')) {
                $table->string('model_id')->after('subscription_id')->nullable();
            }
            if (!Schema::hasColumn(TableEnum::SUBSCRIPTIONS, 'model_type')) {
                $table->string('model_type')->after('model_id')->nullable();
            }
        });
    }
    public function down()
    {
    }
};
