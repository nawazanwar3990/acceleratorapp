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

            $table->enum('arranged_for', MeetingArrangedForEnum::getValues())
                ->default(MeetingArrangedForEnum::INDIVIDUAL);
            $table->enum('type', MeetingTypeEnum::getValues())
                ->default(MeetingTypeEnum::ONLINE);
            $table->string('held_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
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
