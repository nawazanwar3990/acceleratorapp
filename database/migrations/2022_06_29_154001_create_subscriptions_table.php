<?php

use App\Enum\SubscriptionStatusEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::SUBSCRIPTIONS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribed_id')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('subscription_id')->nullable();
            $table->string('subscription_type')->nullable();
            $table->string('renewal_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('price')->nullable();
            $table->string('payment_token_number')->nullable();
            $table->longText('payment_addition_information')->nullable();
            $table->string('status')->default(SubscriptionStatusEnum::APPROVED);
            $table->longText('reason')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::SUBSCRIPTIONS);
    }
};
