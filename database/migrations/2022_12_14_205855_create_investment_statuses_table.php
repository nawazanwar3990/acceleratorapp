<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::INVESTMENT_STATUSES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('investment_id')->nullable();
            $table->foreignId('investor_id')->nullable();
            $table->string('investor_type')->nullable();
            $table->string('status')->nullable();
            $table->string('reason')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::INVESTMENT_STATUSES);
    }
};
