<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BA extends Model
{
    protected $table = TableEnum::BA;
    protected $fillable = [
        'user_id',
        'type',
        'company_name',
        'is_register_company',
        'company_institutes',
        'company_no_of_emp',
        'company_rate_of_initiation',
        'company_address',
        'company_contact_no',
        'company_email',
        'security_question_name',
        'security_question_value',
        'know_about_us'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, TableEnum::BA_SERVICE,'ba_id','service_id')
            ->withTimestamps();
    }

    public function getCompanyInstitutesAttribute($value)
    {
        return json_decode($value, true);
    }
}
