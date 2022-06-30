<?php

use App\Enum\PaymentTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PAYMENTS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribed_id')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('subscription_id')->nullable()->constrained(TableEnum::SUBSCRIPTIONS);
            $table->foreignId('package_id')->nullable()->constrained(TableEnum::PACKAGES);
            $table->enum('payment_type', PaymentTypeEnum::getValues())->default(PaymentTypeEnum::OFFLINE);
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PAYMENTS);
    }
};
