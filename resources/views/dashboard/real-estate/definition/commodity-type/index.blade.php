@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.commodity-type.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\Definition\CommodityType::getTranslationKeys()])
                        <tbody>
                            @include('dashboard.real-estate.definition.commodity-type.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
