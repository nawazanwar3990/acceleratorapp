<?php

namespace App\Http\Controllers;

use App\Models\PaymentReceipt;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Http\Request;

class PaymentReceiptController extends Controller
{
    use General;

    public function __construct()
    {
        $this->makeDirectory('receipts');
    }

    public function storePaymentReceipt(Request $request)
    {
        $model = PaymentReceipt::create($request->all());
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            $file_name = GeneralService::generateFileName($file);
            $file_path = 'uploads/receipts/' . $file_name;
            $file->move('uploads/receipts/', $file_name);
            $model->file_name = $file_path;
            $model->save();
        }
        session(['info' => trans('general.receipt_uploaded_message')]);
        if ($model) {
            return response()->json([
                'status' => true
            ]);
        }
    }
}
