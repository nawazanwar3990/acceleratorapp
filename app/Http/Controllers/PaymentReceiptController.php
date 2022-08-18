<?php

namespace App\Http\Controllers;

use App\Models\PaymentReceipt;
use Illuminate\Http\Request;

class PaymentReceiptController extends Controller
{
    public function storePaymentReceipt(Request $request)
    {
        $model = PaymentReceipt::create($request->all());
        session(['info' =>trans('general.receipt_uploaded_message')]);
        if ($model) {
            return response()->json([
                'status' => true
            ]);
        }
    }
}
