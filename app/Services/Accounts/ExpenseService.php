<?php
namespace App\Services\Accounts;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\ExpenseHead;
use Illuminate\Support\Facades\Auth;

class ExpenseService
{
    public static function createAccountHead($expenseModel)
    {
        if ($expenseModel->parent_id > 0) {
            $headCode = self::headCode(2);
            $headLevel = 2;
        } else {
            $headCode = self::headCode(1);
            $headLevel = 1;
        }
        $headName = $expenseModel->headName();

        return AccountHead::create([
            'HeadCode'         => $headCode,
            'HeadName'         => $headName,
            'PHeadName'        => 'Expense',
            'HeadLevel'        => $headLevel,
            'IsActive'         => '1',
            'IsTransaction'    => '1',
            'IsGL'             => '0',
            'HeadType'         => 'E',
            'IsBudget'         => '1',
            'IsDepreciation'   => '1',
            'depreciation_rate'=> '1',
            'account_id'       => $expenseModel->id,
            'account_type'     => 'expense',
            'created_by'       => Auth::user()->id,
            'updated_by'       => Auth::user()->id,
        ]);
    }

    private static function headCode($level){
        if ($level == 1) {
            $headCode =
                AccountHead::where('HeadLevel',1)
                    ->where('HeadCode', 'like',  '4000' . '%')
                    ->max('HeadCode');
        } else {
            $headCode =
                AccountHead::where('HeadLevel',2)
                    ->where('HeadCode', 'like',  '6000' . '%')
                    ->max('HeadCode');
        }

        if($headCode != NULL) {
            return ($headCode + 1);
        } else {
            return ($level == 1 ? "4000001" : "6000001");
        }
    }

    public static function getExpenseHeadsForDropdown() {
        $heads = ExpenseHead::with('parent')
            ->orderBy('expense_head_name', 'ASC')->get();

        $expenseHeads = [];
        foreach($heads as $key => $expenseHead) {
            if ($expenseHead->parent()->exists()) {
                $expenseHeads[$expenseHead->parent->expense_head_name][$expenseHead->id] = $expenseHead->expense_head_name;
            } else {
                if (!$expenseHead->hasChilds($expenseHead->id)) {
                    $expenseHeads[__('general.general')][$expenseHead->id] = $expenseHead->expense_head_name;
                }
            }
        }

        return $expenseHeads;
    }
}
