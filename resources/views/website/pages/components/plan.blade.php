<section class="pricing-section">
    <div class="container">
        <section class="mb-5">
        <div class="container how-we-are-holder">
            <div class="row">
                <div class="col-6 mx-auto text-center">
                    <h1 class="who-are-you text-uppercase">Per-defined Packages</h1>
                </div>
            </div>
        </div>

            <div class="row mx-1">
                <div class="col-4 border-top"> </div>
                <div class="col-4"> </div>
                <div class="col-4 border-top"> </div>
            </div>
        </section>

        <div class="outer-box">
            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Basics</div>
                            <h4 class="price">SAR : 35.99</h4>
                            <div  class="month">Month : 12</div>
                        </div>
                        <ul class="features">
                            <li class="true">Freelancer</li>
                            <li class="true">Mentor</li>
                            <li class="true">Business Accelerator</li>
                            <li class="false">Incubater</li>
                            <li class="false">Meeting Room</li>
                            <li class="false">Event Management</li>
                        </ul>
                        <div class="btn-box">
                            <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-gem"></i></div>
                        </div>
                        <div class="price-box">

                            <div class="title">Standard</div>
                            <h4 class="price">SAR : 235.99</h4>
                            <div  class="month">Month : 12</div>
                        </div>
                        <ul class="features">
                            <li class="true">Freelancer</li>
                            <li class="true">Mentor</li>
                            <li class="true">Business Accelerator</li>
                            <li class="false">Incubater</li>
                            <li class="false">Meeting Room</li>
                            <li class="false">Event Management</li>
                        </ul>
                        <div class="btn-box">
                            <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-rocket"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Permium</div>
                            <h4 class="price">SAR : 435.99</h4>
                            <div  class="month">Month : 12</div>
                        </div>
                        <ul class="features">
                            <li class="true">Freelancer</li>
                            <li class="true">Mentor</li>
                            <li class="true">Business Accelerator</li>
                            <li class="false">Incubater</li>
                            <li class="false">Meeting Room</li>
                            <li class="false">Event Management</li>
                        </ul>
                        <div class="btn-box">
                            <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container how-we-are-holder">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h1 class="who-are-you text-uppercase">Customized Packages</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="row mx-1">
            <div class="col-4 border-top"> </div>
            <div class="col-4"> </div>
            <div class="col-4 border-top"> </div>
        </div>
    </section>
    <div class="container how-we-are-holder py-3">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h6 class="text-center">If you want to check customized plan then click here.</h6>
                <div class="col-12 mt-1 mb-3 text-center" style="margin-top: -30px!important;">
                    <a onclick="apply_registration('{{ json_encode(\App\Enum\RegisterTypeEnum::getTranslationKeys()) }}')"
                       class="read-more btn py-sm-3 px-sm-5">
                        {{ trans('general.get_started') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
