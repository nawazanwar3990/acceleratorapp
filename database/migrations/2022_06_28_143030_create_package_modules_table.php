<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PACKAGE_MODULE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->nullable()->constrained(TableEnum::PACKAGES);
            $table->foreignId('module_id')->nullable()->constrained(TableEnum::MODULES);
            $table->string('limit')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PACKAGE_MODULE);
    }
};
