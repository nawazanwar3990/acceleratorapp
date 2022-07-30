<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#basic_info" role="tab" aria-selected="true">
            <span class="hidden-xs-down">{{ trans('general.basic_info') }}</span>
        </a>
    </li>
    @if(isset($model) AND in_array($model->type,[\App\Enum\FreelancerTypeEnum::INDIVIDUAL,\App\Enum\AcceleratorTypeEnum::INDIVIDUAL]))
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#qualifications" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.qualifications') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#experiences" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.experiences') }}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#certifications" role="tab" aria-selected="true">
                <span class="hidden-xs-down">{{ trans('general.certifications') }}</span></a>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#media_tab" role="tab" aria-selected="true">
            <span class="hidden-xs-down">{{ trans('general.media') }}</span></a>
    </li>
</ul>
