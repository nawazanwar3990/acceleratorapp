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
        Schema::create(TableEnum::VISITOR_BOOKS, function (Blueprint $table) {
            $table->id();
            $table->string('purpose_id')->nullable()->constrained(TableEnum::PURPOSES);
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->integer('no_person')->nullable();
            $table->string('date')->nullable();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->longText('note')->nullable();

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
        Schema::dropIfExists('visitor_books');
    }
};
