<?php

namespace App\Models;

use App\Enum\MediaTypeEnum;
use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BA extends Model
{
    protected $table = TableEnum::BA;
    protected $fillable = [
        'user_id',
        'payment_process',
        'type',
        'company_name',
        'is_register_company',
        'company_institutes',
        'company_no_of_emp',
        'company_date_of_initiation',
        'company_address',
        'company_contact_no',
        'company_email',
        'services',
        'other_services'
    ];

    public function getServicesAttribute($values)
    {
        return json_decode($values);
    }
    public function getOtherServicesAttribute($values)
    {
        return json_decode($values);
    }

    public function getCompanyDateOfInitiationAttribute($value)
    {
        return Carbon::parse($value)->format('d M Y');
    }

    public function logo(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id', 'id')
            ->where('record_type', MediaTypeEnum::BA_LOGO);
    }

    public function front_id_card(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id', 'id')
            ->where('record_type', MediaTypeEnum::BA_FRONT_ID_CARD);
    }

    public function back_id_card(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id', 'id')
            ->where('record_type', MediaTypeEnum::BA_BACK_ID_CARD);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id', 'id')
            ->where('record_type', MediaTypeEnum::BA_DOCUMENT);
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Media::class, 'record_id', 'id')
            ->where('record_type', MediaTypeEnum::BA_CERTIFICATE);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function qualifications(): HasMany
    {
        return $this->hasMany(BaQualification::class, 'ba_id');
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(BaExperience::class, 'ba_id');
    }

    public function certifications(): HasMany
    {
        return $this->hasMany(BaCertification::class, 'ba_id');
    }

    public function getCompanyInstitutesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
