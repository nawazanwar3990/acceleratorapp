<?php

use App\Enum\TableEnum;
use App\Enum\TicketTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::EVENTS, function (Blueprint $table) {
            $table->id();
            $table->string('event_type')->nullable();
            $table->string('event_sub_type')->nullable();
            $table->string('event_name')->nullable();
            $table->string('event_description')->nullable();
            $table->string('event_start_date')->nullable();
            $table->string('no_of_days')->nullable();
            $table->string('event_end_date')->nullable();
            $table->string('event_start_time')->nullable();
            $table->string('event_end_time')->nullable();
            $table->string('event_organized_by')->nullable();
            $table->string('event_organized_for')->nullable();

            $table->enum('is_applied_ticker', ['yes', 'no'])->nullable();
            $table->enum('ticket_type', TicketTypeEnum::getValues())->default(TicketTypeEnum::FREE);
            $table->string('per_person_cost')->nullable();

            $table->string('event_image')->nullable();
            $table->string('event_social_media_url')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};
