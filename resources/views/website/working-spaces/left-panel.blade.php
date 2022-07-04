<div class="card-body inbox-panel">
    <a class="btn btn-danger m-b-20 p-10 w-100 waves-effect waves-light text-white">
        @isset($for)
            {{ $for }}
        @else
            {{  \App\Enum\AdminServiceEnum::getTranslationKeyBy(\App\Enum\KeyWordEnum::CO_WORKING_SPACE) }}
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
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Search</h5>
        <form role="form">
            <div class="mb-3 has-info">
                <select class="form-control form-select">
                    <option value="" disabled="" selected="">Status</option>
                    <option value="1">Rent</option>
                    <option value="2">Sale</option>
                </select>
            </div>
            <div class="form-group has-info">
                <select class="mb-3 form-select">
                    <option value="" disabled="" selected="">Country</option>
                    <option value="1">India</option>
                    <option value="2">Germany</option>
                    <option value="3">Spain</option>
                    <option value="4">Russia</option>
                    <option value="5">United States</option>
                </select>
            </div>
            <div class="form-group has-info">
                <select class="mb-3 form-select">
                    <option value="" disabled="" selected="">City</option>
                    <option value="1">Moscow</option>
                    <option value="2">Barcelona</option>
                    <option value="3">Mumbai</option>
                    <option value="4">Houston</option>
                    <option value="5">Sokovia</option>
                </select>
            </div>
            <div class="form-group has-info">
                <select class="mb-3 form-select">
                    <option value="" disabled="" selected="">Property Type</option>
                    <option value="1">Apartment</option>
                    <option value="2">Villa/Mansion</option>
                    <option value="3">Cottage</option>
                    <option value="4">Flat</option>
                    <option value="5">House</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark"><i class="bx bx-search m-r-5"></i>Search</button>
            </div>
        </form>
    </div>
</div>
