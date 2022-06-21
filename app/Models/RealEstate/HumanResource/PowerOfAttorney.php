<?php

namespace App\Models\RealEstate\HumanResource;

use App\Models\Authorization\User;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\Definition\HumanResource\HrRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class PowerOfAttorney extends Model
{
    use HasFactory,SoftDeletes;

    protected $dates = ['reg_date','rso_reg_date','pte_reg_date','attested_date'];

    protected $fillable = [
        'attorney_purpose',
        'reg_date',
        'executant_hr_id',
        'auth_attorney_hr_id',
        'relation_type_id',
        'flat_id',
        'is_attested',
        'attested_by_person_id',
        'attested_date',
        'attested_dairy_number',
        'attested_narration_remark',
        'is_reg_at_sub_reg_office',
        'rso_reg_date',
        'rso_reg_number',
        'rso_narration_remark',
        'is_process_through_embassy',
        'pte_situated_in',
        'pte_by_person_id',
        'pte_dairy_number',
        'pte_reg_date',
        'pte_witness_1_name',
        'pte_witness_1_cnic',
        'pte_witness_1_contact',
        'pte_witness_2_name',
        'pte_witness_2_cnic',
        'pte_witness_2_contact',

        'created_by',
        'updated_by',
        'deleted_by',
        'building_id',
    ];

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

    public function Building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function executent(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'executant_hr_id','id');
    }

    public function attorney(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'auth_attorney_hr_id','id');
    }

    public function attestedBy(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'attested_by_person_id','id');
    }

    public function pteBy(): BelongsTo
    {
        return $this->belongsTo(Hr::class,'pte_by_person_id','id');
    }

    public function relation(): BelongsTo
    {
        return $this->belongsTo(HrRelation::class,'relation_type_id','id');
    }

}
