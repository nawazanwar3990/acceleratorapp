<?php

use App\Enum\MeetingArrangedForEnum;
use App\Enum\MeetingTypeEnum;
use App\Enum\TableEnum;
use App\Enum\TicketTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::MEETINGS, function (Blueprint $table) {
            $table->id();
            $table->string('meeting_arranged_for')->nullable();
            $table->enum('meeting_type', MeetingTypeEnum::getValues())
                ->default(MeetingTypeEnum::ONLINE);
            $table->string('meeting_held_date')->nullable();
            $table->string('meeting_start_time')->nullable();
            $table->string('meeting_name')->nullable();
            $table->string('meeting_description')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::MEETINGS);
    }
};
