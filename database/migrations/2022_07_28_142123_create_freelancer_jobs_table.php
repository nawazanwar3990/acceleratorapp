<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FREELANCER_JOB, function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id')->nullable()->constrained(TableEnum::FREELANCERS);
            $table->string('designation')->nullable();
            $table->string('from')->nullable();
            $table->string('till')->nullable();
            $table->string('expertise')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FREELANCER_JOB);
    }
};
