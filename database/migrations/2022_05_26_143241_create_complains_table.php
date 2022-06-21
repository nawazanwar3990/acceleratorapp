<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::COMPLAINS, function (Blueprint $table) {
            $table->id();
            $table->string('complain_type_id')->nullable()->constrained(TableEnum::COMPLAIN_TYPES);
            $table->string('source_id')->nullable()->constrained(TableEnum::SOURCES);
            $table->string('complain_by')->nullable();
            $table->string('phone')->nullable();
            $table->string('action_taken')->nullable();
            $table->string('assigned')->nullable();
            $table->string('date')->nullable();
            $table->longText('description')->nullable();
            $table->longText('note')->nullable();
            $table->string('attachment')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complains');
    }
};
