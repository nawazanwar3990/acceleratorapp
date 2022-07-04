@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row" style="position: relative;">
        @include('website.components.home.banner')
        @include('website.components.home.what-you-are')
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row location pb-5">
                    <div class="col-lg-3 col-md-4">
                        <div class="card-body inbox-panel">
                            <a href="{{ route('website.co-working-spaces.index') }}"
                               class="btn btn-danger m-b-20 p-10 w-100 waves-effect waves-light text-white">
                                {{  \App\Enum\AdminServiceEnum::getTranslationKeyBy(\App\Enum\AdminServiceEnum::CO_WORKING_SPACE) }}
                            </a>
                            <ul class="list-group list-group-full">
                                @foreach(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getAdminWorkingSpaces() as $workingKey=>$workingValue)
                                    <li class="list-group-item d-flex no-block align-items-center  @if($loop->first) active  @endif">
                                        <a href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute($workingKey) }}"
                                           class="d-flex no-block align-items-center @if($loop->first) text-white  @endif">
                                            <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> {{ $workingValue }}
                                        </a>
                                        <span class="badge bg-success ms-auto">
                                            {{ \App\Services\GeneralService::get_working_space_count($workingKey) }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="card-body justify-content-end">

                        </div>
                        <div class="card-body p-t-0">
                            <div class="card b-all shadow-none">
                                <div class="inbox-center table-responsive">
                                    <table class="table table-hover no-wrap">
                                        <tbody>
                                        @foreach(\App\Enum\AdminServiceEnum::listAllAdminsByPaginations() as $admin)
                                            <tr class="unread">
                                                <td style="width:40px" class="hidden-xs-down"><i
                                                        class="bx bx-star"></i>
                                                </td>
                                                <td class="hidden-xs-down">
                                                    {{ $admin->getFullName() }}
                                                </td>
                                                <td class="max-texts">
                                                    <a class="btn btn-success btn-sm"
                                                       href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::BUILDING) }}">
                                                        {{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::BUILDING) }}
                                                        (<strong>{{ \App\Services\GeneralService::get_working_space_count(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::BUILDING,$admin) }}</strong>)
                                                        <i class="bx bx-buildings"></i>
                                                    </a>
                                                    <a class="btn btn-info btn-sm"
                                                       href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLOOR) }}">
                                                        {{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLOOR) }}
                                                        (<strong>{{ \App\Services\GeneralService::get_working_space_count(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLOOR,$admin) }}</strong>)
                                                        <i class="bx bxs-building"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm"
                                                       href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLAT) }}">
                                                        {{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLAT) }}
                                                        (<strong>{{ \App\Services\GeneralService::get_working_space_count(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::FLAT,$admin) }}</strong>)
                                                        <i class="bx bxs-building-house"></i>
                                                    </a>
                                                </td>
                                                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-end"> 12:30 PM</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
