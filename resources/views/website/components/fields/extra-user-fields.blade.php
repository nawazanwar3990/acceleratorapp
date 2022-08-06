<div class="accordion accordion-flush" id="userInfoAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-white border"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#media-accordion"
                    aria-expanded="false"
                    aria-controls="media-accordion">
                {{ trans('general.media') }}
            </button>
        </h2>
        <div id="media-accordion"
             class="accordion-collapse collapse bg-white border"
             aria-labelledby="media-accordion">
            <div class="accordion-body">
                @include('website.components.fields.media')
            </div>
        </div>
    </div>
</div>
@if(in_array($extra_field_for,['individual','mentor']))
    <div class="accordion accordion-flush mt-3" id="userInfoAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-white border"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#certificates-accordion"
                        aria-expanded="false"
                        aria-controls="media-accordion">
                    {{ trans('general.certificates') }}
                </button>
            </h2>
            <div id="certificates-accordion"
                 class="accordion-collapse collapse bg-white border"
                 aria-labelledby="media-accordion">
                <div class="accordion-body">
                    @include('website.components.fields.certifications')
                </div>
            </div>
        </div>
    </div>
@endif
@if(in_array($extra_field_for,['individual','mentor']))
    <div class="accordion accordion-flush mt-3" id="userInfoAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-white border"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#qualification-accordion"
                        aria-expanded="false"
                        aria-controls="media-accordion">
                    {{ trans('general.qualification') }}
                </button>
            </h2>
            <div id="qualification-accordion"
                 class="accordion-collapse collapse bg-white border"
                 aria-labelledby="media-accordion">
                <div class="accordion-body">
                    @include('website.components.fields.qualification')
                </div>
            </div>
        </div>
    </div>
@endif
@if($extra_field_for=='individual')
    <div class="accordion accordion-flush mt-3" id="userInfoAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-white border"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#experiences-accordion"
                        aria-expanded="false"
                        aria-controls="media-accordion">
                    {{ trans('general.experiences') }}
                </button>
            </h2>
            <div id="experiences-accordion"
                 class="accordion-collapse collapse bg-white border"
                 aria-labelledby="experiences-accordion">
                <div class="accordion-body">
                    @include('website.components.fields.experience')
                </div>
            </div>
        </div>
    </div>
@endif
@if($extra_field_for=='mentor')
    <div class="accordion accordion-flush mt-3" id="userInfoAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-white border"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#projects-accordion"
                        aria-expanded="false"
                        aria-controls="media-accordion">
                    {{ trans('general.projects') }}
                </button>
            </h2>
            <div id="projects-accordion"
                 class="projects-collapse collapse bg-white border"
                 aria-labelledby="experiences-accordion">
                <div class="accordion-body">
                    @include('website.components.fields.projects')
                </div>
            </div>
        </div>
    </div>
@endif
