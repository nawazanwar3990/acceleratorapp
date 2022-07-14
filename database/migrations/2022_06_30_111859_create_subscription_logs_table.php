<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::SUBSCRIPTION_LOGS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribed_id')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('subscription_id')->nullable()->constrained(TableEnum::SUBSCRIPTIONS);
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_logs');
    }
};
