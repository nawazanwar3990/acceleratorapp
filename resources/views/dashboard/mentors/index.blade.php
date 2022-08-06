@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'','is_create'=>false])
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach(\App\Enum\PaymentTypeProcessEnum::getTranslationKeys() as  $key=>$value)
                            <li class="nav-item">
                                <a class="nav-link {{$key==$type?'active':''}}"
                                   href="{{ route('dashboard.mentors.index',['type'=>$key]) }}"
                                   aria-selected="true">
                                    {{$value}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active p-3">
                            <table class="table table-bordered table-hover">
                                @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\BATableHeadingEnum::getTranslationKeys()])
                                <tbody>
                                @include('dashboard.mentors.list')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
