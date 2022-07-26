@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <h3 class="text-center fw-bold">{{__('general.pending_subscription')}}</h3>
                <div class="row justify-content-center mt-3 pt-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="card  bg-white">
                                    <div class="card-header">
                                        <h4 class="fw-bold mb-0">{{__('general.package_info')}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>{{__('general.package_name')}}</th>
                                                <td>{{ $subscription->package->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('general.price')}}</th>
                                                <td>{{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('general.payment_token_number')}}</th>
                                                <td>{{ $subscription->payment_token_number }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{__('general.created_date')}}</th>
                                                <td>{{ $subscription->created_at }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="card  bg-white">
                                    <div class="card-header">
                                        <h4 class="fw-bold mb-0">{{__('general.edit_steps')}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>{{ trans('general.company_profile') }}</th>
                                                <td>
                                                    <a class="btn btn-sm  btn-info" href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP2,$user->ba->id]) }}">
                                                        {{ trans('general.edit') }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>{{ trans('general.services_of_business_accelerator') }}</th>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP3,$user->ba->id]) }}">
                                                        {{ trans('general.edit') }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>{{ trans('general.user_info') }}</th>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP4,$user->ba->id]) }}">
                                                        {{ trans('general.edit') }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>{{ trans('general.packages') }}</th>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP5,$user->ba->id]) }}">
                                                        {{ trans('general.edit') }}
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(\Illuminate\Support\Facades\Session::has('upload_receipt_success') OR $media)
                            <div class="alert alert-info alert-dismissible show" role="info">
                                <strong>info!! </strong>
                                @if($media)
                                    Wait, Your Request is under processed and let you while Approving Your Subscription
                                @else
                                    {{ \Illuminate\Support\Facades\Session::get('upload_receipt_success') }}
                                @endif
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @else
                            {!! Form::open(['url' =>route('website.ba.payment-snippet-store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                            {!! Form::hidden('subscription_id',$subscription->id) !!}
                            <div class="card  bg-white">
                                <div class="card-header">
                                    <h4 class="fw-bold">{{__('general.submit_payment_receipt')}}</h4>
                                </div>
                                <div class="card-body">
                                    {!!  Form::file('receipt',['id'=>'receipt','class'=>'form-control dropify']) !!}
                                </div>
                            </div>
                            <div class="col-12 text-right justify-content-center" style="text-align: center;">
                                <button type="submit" id="btn_save"
                                        class="btn btn-purple waves-effect w-md">{{__('general.save')}}</button>
                            </div>
                            {!! Form::close(); !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
