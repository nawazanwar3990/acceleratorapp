<?php

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
            $table->foreignId('package_id')->nullable()->constrained(TableEnum::PACKAGES);
            $table->string('renewal_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('price')->nullable();
            $table->boolean('is_payed')->default(false);
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::SUBSCRIPTIONS);
    }
};
