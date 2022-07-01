<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FLAT_PRICE_LOGS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->decimal('price', 30, 2)->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FLAT_PRICE_LOGS);
    }
};
