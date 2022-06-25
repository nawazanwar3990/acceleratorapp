@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                @include('components.General.form-list-header', ['print' => true])
                <div class="card-body">
                    {!! Form::model($model) !!}
                    <section id="printArea">
                        @if(session()->get('printHeader') !== null)
                            @include(session()->get('printHeader') ,['title' => __('general.print_hr_form') ])
                        @endif
                        @include('dashboard.user-management.human-resource.hr-person.print-components.header')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.personal-detail')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.secondary-person-detail')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.address.permanent-address')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.address.temporary-address')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.employment')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.tax-info')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.govt-service')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.private-job')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.own-business')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.finger-print')
                        @include('dashboard.user-management.human-resource.hr-person.print-components.declaration')
                        @if(session()->get('printFooter') !== null)
                            @include(session()->get('printFooter'))
                        @endif
                    </section>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.user-management.human-resource.hr-person.components.scripts')

