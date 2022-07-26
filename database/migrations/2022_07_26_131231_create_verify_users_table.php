<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::VERIFY_USERS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::VERIFY_USERS);
    }
};
