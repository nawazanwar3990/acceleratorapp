<div class="card-body inbox-panel">
    <a class="btn btn-danger m-b-20 p-10 w-100 waves-effect waves-light text-white">
        @isset($for)
            {{ $for }}
        @else
            {{  \App\Enum\AcceleratorServiceEnum::getTranslationKeyBy(\App\Enum\KeyWordEnum::CO_WORKING_SPACE) }}
        @endisset
    </a>
    <ul class="list-group list-group-full">
        @foreach(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getAdminWorkingSpaces() as $workingKey=>$workingValue)
            @php
                $currentRoute = \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute($workingKey);
                $url = route(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName());
            @endphp
            <li class="list-group-item d-flex no-block align-items-center  @if($currentRoute==$url) active  @endif">
                <a href="{{ $currentRoute }}"
                   class="d-flex no-block align-items-center  @if($currentRoute==$url) text-white  @endif">
                    <i class="mdi mdi-gmail fs-4 me-2 d-flex align-items-center"></i> {{ $workingValue }}
                </a>
                <span class="badge bg-success ms-auto">
                   {{ \App\Services\GeneralService::get_working_space_count($workingKey) }}
                </span>
            </li>
        @endforeach
    </ul>
</div>
