<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::TRANSACTIONS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('fiscal_year_id')->nullable()->constrained(TableEnum::FISCAL_YEARS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->string('vNo')->nullable();
            $table->string('vType')->nullable();
            $table->date('vDate')->nullable();
            $table->string('COAID');
            $table->longText('Narration')->nullable();
            $table->decimal('Debit',30,2)->nullable();
            $table->decimal('Credit',30,2)->nullable();
            $table->boolean('is_posted')->nullable()->default(true);
            $table->boolean('is_opening')->nullable()->default(true);
            $table->boolean('is_approve')->nullable()->default(true);
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::TRANSACTIONS);
    }
};
