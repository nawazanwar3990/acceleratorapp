<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FISCAL_YEARS, function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->date('period_start_date')->nullable();
            $table->date('period_end_date')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('fiscal_years');
    }
};