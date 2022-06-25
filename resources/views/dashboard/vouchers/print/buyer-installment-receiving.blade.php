@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('dashboard.voucher.buyer-installment-receiving') }}" class="btn btn-primary w-sm"><i class="fas fa-arrow-left"></i> {{ __('general.back') }}</a>
                            <button type="button" class="btn btn-primary w-sm" id="printBtn"><i class="fas fa-print"></i> {{ __('general.print') }}</button>
                        </div>
                    </div>
                    <div id="printArea">
                        @if(session()->get('printHeader') !== null)
                            @include(session()->get('printHeader') ,['title' => __('general.installment_payment_receipt') ])
                            <br>
                        @endif

                            <div class="row">
                                <div style="width: 50%">
                                    <table class="table table-compact">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold" style="width: 50%; border: none;">{{ __('general.account_id') }}</td>
                                                <td style="width: 50%; border: none;">{{ $accountHead->HeadCode }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="width: 50%; border: none;">{{ __('general.customer_account') }}</td>
                                                <td style="width: 50%; border: none;">{{ $accountHead->HeadName }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="width: 50%; border: none;">{{ __('general.installment_plan') }}</td>
                                                <td style="width: 50%; border: none;">{{ $installment->installmentPlan->name }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="width: 50%">
                                    <table class="table table-compact">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold" style="width: 40%; border: none;">{{ __('general.building') }}</td>
                                                <td style="width: 60%; border: none;">{{ $installment->Building->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="width: 40%; border: none;">{{ __('general.floor') }}</td>
                                                <td style="width: 60%; border: none;">{{ $installment->flat->floor->floor_name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold" style="width: 40%; border: none;">{{ __('general.flat_shop') }}</td>
                                                <td style="width: 60%; border: none;">{{ $installment->flat->flat_name }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">

                            </div>

                        @if(session()->get('printFooter') !== null)
                            <br>
                            @include(session()->get('printFooter'))
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

