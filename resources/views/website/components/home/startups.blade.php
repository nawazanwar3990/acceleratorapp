<section class="my-5 py-5 counter-back-holder"
         style="background-image: url({{ asset('uploads/counter_back.webp') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center pb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title site-first-btn-color text-white">{{ \App\Services\GeneralService::get_startup_counts(\App\Enum\AccessTypeEnum::BUSINESS_ACCELERATOR) }}+</h4>
                        <p class="card-text site-first-color">Business Accelerator</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center pb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title site-second-btn-color text-white">{{ \App\Services\GeneralService::get_startup_counts(\App\Enum\AccessTypeEnum::FREELANCER) }}+</h4>
                        <p class="card-text text-center site-second-color">Freelancer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center pb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title site-first-btn-color text-white">{{ \App\Services\GeneralService::get_startup_counts(\App\Enum\AccessTypeEnum::SERVICE_PROVIDER_COMPANY) }}+</h4>
                        <p class="card-text site-first-color">Service Provider</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center pb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title site-second-btn-color text-white">{{ \App\Services\GeneralService::get_startup_counts(\App\Enum\AccessTypeEnum::MENTOR) }}+</h4>
                        <p class="card-text text-center site-second-color">Mentor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
