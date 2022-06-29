<?php

use App\Enum\PaymentTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::SETTINGS, function (Blueprint $table) {
            $table->id();
            $table->string('currency_format')->nullable();
            $table->json('payment_type')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('language')->nullable();
            $table->string('date_format')->nullable();
            $table->string('currency_symbol_position')->nullable();
            $table->string('print_template')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('SETTINGS');
    }
};
