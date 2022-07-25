@extends('layouts.message')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card  bg-white">
                <div class="card-header">
                    <h4 class="fw-bold">{{__('general.package_info')}}</h4>
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
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card  bg-white">
                <div class="card-header">
                    <h4 class="fw-bold">{{__('general.submit_payment_receipt')}}</h4>
                </div>
                <div class="card-body">
                    {!!  Form::file('image',['id'=>'image','class'=>'form-control dropify']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
