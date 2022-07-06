<?php

namespace App\Models\UserManagement;
use App\Enum\TableEnum;
use App\Models\Media;
use App\Models\WorkingSpace\Building;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hr extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'date_of_birth'
    ];

    protected $fillable = [
        'hr_no',
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'relation_id',
        'relation_first_name',
        'relation_middle_name',
        'relation_last_name',
        'cnic',
        'passport_number',
        'date_of_birth',
        'gender',
        'marital_status',
        'organization_id',
        'department_id',
        'profession_id',
        'cell_1',
        'cell_2',
        'cell_whats_app',
        'landline',
        'email',
        'facebook',
        'sec_contact_full_name',
        'sec_contact_relation',
        'sec_contact',
        'country_id',
        'province_id',
        'district_id',
        'street_no',
        'house_no',
        'postal_code',
        'post_office',
        'address',
        'left_thumb_code',
        'left_index_code',
        'left_middle_code',
        'left_ring_code',
        'left_little_code',
        'right_thumb_code',
        'right_index_code',
        'right_middle_code',
        'right_ring_code',
        'right_little_code'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'hr_id');
    }

    public function relation(): BelongsTo
    {
        return $this->belongsTo(HrRelation::class);
    }

    public function cast(): BelongsTo
    {
        return $this->belongsTo(HrCast::class);
    }
    public function buildings(): BelongsToMany
    {
        return $this->belongsToMany(Building::class,TableEnum::BUILDING_OWNER,'hr_id');
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(HrNationality::class);
    }
    public function govtOrganization(): BelongsTo
    {
        return $this->belongsTo(HrOrganization::class, 'govt_organization_id');
    }

    public function govtDepartment(): BelongsTo
    {
        return $this->belongsTo(HrDepartment::class, 'govt_department_id');
    }

    public function govtProfession(): BelongsTo
    {
        return $this->belongsTo(HrProfession::class, 'govt_profession_id');
    }

    public function privateOrganization(): BelongsTo
    {
        return $this->belongsTo(HrOrganization::class, 'private_organization_id');
    }

    public function privateDepartment(): BelongsTo
    {
        return $this->belongsTo(HrDepartment::class, 'private_department_id');
    }

    public function privateProfession(): BelongsTo
    {
        return $this->belongsTo(HrProfession::class, 'private_profession_id');
    }
    public function secondaryContactRelation(): BelongsTo
    {
        return $this->belongsTo(HrRelation::class, 'sec_contact_relation');
    }
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }

    public function getRelationFullNameAttribute(): string
    {
        return $this->relation_first_name . ' ' . $this->relation_middle_name . ' ' . $this->relation_last_name;
    }

    public function getHeadName(): string
    {
        return $this->id . '-' . $this->first_name . '-' . $this->middle_name . '-' . $this->last_name;
    }

    public function mediaFirstImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id');
    }

}
