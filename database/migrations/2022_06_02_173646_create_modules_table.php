<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::MODULES, function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('parent_type')->nullable();
            $table->string('child_type')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::MODULES);
    }
};
