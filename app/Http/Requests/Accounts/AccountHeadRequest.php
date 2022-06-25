<?php

namespace App\Http\Requests\Accounts;

use App\Models\Accounts\AccountHead;
use App\Services\BuildingService;
use Illuminate\Foundation\Http\FormRequest;

class AccountHeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'parent_head' => ['required'],
            'child_account' => ['required'],
        ];
    }

    public function createData() {
        $parentHeadCode = $this->input('parent_head');
        $childAccount = $this->input('child_account');
        $parentAccount = AccountHead::where('HeadCode', $parentHeadCode)->first();
        $headCode = (new AccountHead)->headCode($parentHeadCode);

        $data = AccountHead::create([
            'HeadCode'         => $headCode,
            'HeadName'         => $childAccount,
            'PHeadName'        => $parentAccount->HeadName,
            'HeadLevel'        => ($parentAccount->HeadLevel + 1),
            'IsActive'         => '1',
            'IsTransaction'    => '1',
            'IsGL'             => '0',
            'HeadType'         => $parentAccount->HeadType,
            'IsBudget'         => '0',
            'IsDepreciation'   => '0',
            'DepreciationRate' => '0',
            'building_id'      => BuildingService::getBuildingId(),
        ]);
        $data->HeadName = ($data->id . "-" . $childAccount );
        $data->save();

        return $data;
    }
}
