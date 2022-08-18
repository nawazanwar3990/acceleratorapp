<?php

use App\Enum\PaymentTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PAYMENT_RECEIPTS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribed_id')->nullable();
            $table->foreignId('subscription_id')->nullable();
            $table->string('payment_type')->default(PaymentTypeEnum::OFFLINE);
            $table->string('payment_for')->default('package_approval');
            $table->string('transaction_id')->nullable();
            $table->string('price')->nullable();
            $table->string('file_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PAYMENT_RECEIPTS);
    }
};
