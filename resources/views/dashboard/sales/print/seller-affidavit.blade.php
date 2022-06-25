@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body" id="printArea">
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-bold text-center text-uppercase">{{ __('general.seller_affidavit') }}</h4>
                            <h6 class="text-center">(For Transfer of Interest)</h6>
                            <h6 class="text-center">(Where required, Please enter name in BLOCK LETTERS with Father's Name. In case of female, enter Husband's Name as well)</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>I,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fw-bold"><u>{{ $owner->Hr->full_name }}&nbsp;
                                        {{ \App\Services\GeneralService::getShortFormOfRelation( $owner->Hr->relation_id ) }}&nbsp;
                                    {{ $owner->Hr->relation_full_name }}</u></span>&nbsp;&nbsp;&nbsp;Resident of&nbsp;&nbsp;&nbsp;<span class="fw-bold"><u>
                                        {{ $owner->Hr->present_linear_address }}</u></span>&nbsp;&nbsp;&nbsp; in possession of my full faculties and senses and of my free will and without
                                any coercion or duress, do hereby solemnly affirm and declare as under:
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table style="width:100%;">
                                <tr>
                                    <td style="width: 10%;vertical-align: text-top;">
                                        1.
                                    </td>
                                    <td style="width:90%;">
                                        That I am bonafide and sole owner of property <span class="fw-bold"><u>{{ $record->flat->flat_name }}</u></span> situated at
                                        <span class="fw-bold"><u>{{ $record->flat->floor->floor_name }}, {{ $record->flat->Building->name }}</u></span>.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;vertical-align: text-top">
                                        2.
                                    </td>
                                    <td style="width:90%;">That I affirm and declare that if the name of <span class="fw-bold"><u>{{ $buyer->Hr->full_name }}&nbsp;
                                        {{ \App\Services\GeneralService::getShortFormOfRelation( $buyer->Hr->relation_id ) }}&nbsp;
                                    {{ $buyer->Hr->relation_full_name }}</u></span></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
