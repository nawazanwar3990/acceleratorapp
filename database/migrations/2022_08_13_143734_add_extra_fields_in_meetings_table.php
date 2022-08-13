<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table(TableEnum::MEETINGS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'meeting_parent_type')) {
                $table->string('meeting_parent_type')->nullable()->after('id');
            }
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'meeting_parent_sub_type')) {
                $table->string('meeting_parent_sub_type')->nullable()->after('meeting_parent_type');
            }
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'meeting_end_time')) {
                $table->string('meeting_end_time')->nullable()->after('meeting_start_time');
            }
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'meeting_organized_by')) {
                $table->string('meeting_organized_by')->nullable()->after('meeting_end_time');
            }
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'has_meeting_pass')) {
                $table->string('has_meeting_pass')->nullable()->after('meeting_organized_by');
            }
            if (!Schema::hasColumn(TableEnum::MEETINGS, 'meeting_pass')) {
                $table->string('meeting_pass')->nullable()->after('has_meeting_pass');
            }
        });
    }

    public function down()
    {
        Schema::table('meetings', function (Blueprint $table) {
        });
    }
};
