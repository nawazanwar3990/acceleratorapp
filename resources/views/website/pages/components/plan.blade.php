<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
<style>

    .tab-main{
        text-align: center;
    }
    #tsum-tabs h1 {
        padding: 50px 0;
        font-weight: 400;
        text-align: center;
    }

    #tsum-tabs p {
        margin: 0 0 20px;
        line-height: 1.5;
    }

    #tsum-tabs main {
        padding: 50px;
        margin: 0 auto;
        background: #fff;
    }

    #tsum-tabs section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #ddd;
    }

    #tsum-tabs input {
        display: none;
    }

    #tsum-tabs label {
        background-color: #eee;
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #01023B;
        border: 1px solid transparent;
    }
    #content1,#content2,#content3,#content4{
        border: none!important;
        margin-top: 2rem;
    }

    #tsum-tabs label:before {
        font-weight: normal;
        margin-right: 10px;
    }

    #tsum-tabs label:hover {
        color: #888;
        cursor: pointer;
    }

    #tsum-tabs input:checked + label {
        background-color: transparent;
        color: #01023B;
        border: 2px solid;
        border-image-source: linear-gradient(90deg, rgba(0, 211, 225, 1) 0%, rgba(102, 65, 243, 1) 50%, rgba(247, 132, 178, 1) 90%);;
        border-image-slice: 1;
    }

    #tsum-tabs #tab1:checked ~ #content1,
    #tsum-tabs #tab2:checked ~ #content2,
    #tsum-tabs #tab3:checked ~ #content3,
    #tsum-tabs #tab4:checked ~ #content4 {
        display: block;
    }

    @media screen and (max-width: 650px) {
        main{
            width: 100%;
        }
        #tsum-tabs label {
            font-size: 10px;
        }
        #tsum-tabs label:before {
            margin: 0;
            font-size: 18px;
        }
        #tsum-tabs main{
            padding:10px!important;
        }
    }

    @media screen and (max-width: 400px) {
        main{
            width: 100%;
        }
        #tsum-tabs label {
            padding: 15px;
        }
        #tsum-tabs main{
            padding:10px!important;
        }
    }
</style>



<section>

    <div class="container how-we-are-holder">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h1 class="who-are-you text-uppercase">Pre-Defined Packages</h1>
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
</section>
<div id="tsum-tabs">

    <main class="tab-main">
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">BA Individual</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">BA Company</label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3">Freelancer</label>

        <input id="tab4" type="radio" name="tabs">
        <label for="tab4">Service Provider Company</label>

        <section id="content1">
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

        </section>

        <section id="content2">
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

        </section>

        <section id="content3">
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
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
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
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
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
                                <h4 class="price">SAR : 1000</h4>
                                <div  class="month">Month : 12</div>
                            </div>
                            <ul class="features">
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
                            </ul>
                            <div class="btn-box">
                                <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="content4">
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
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
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
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
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
                                <h4 class="price">SAR : 1000</h4>
                                <div  class="month">Month : 12</div>
                            </div>
                            <ul class="features">
                                <li class="true">IT Services</li>
                                <li class="true">Designing Services</li>
                                <li class="true">Manufacturing Services</li>
                                <li class="true">Training Services</li>
                                <li class="true">Electrical & Electronic Services</li>
                                <li class="true">Mason & Labor Class Services</li>
                                <li class="false">Driving Services</li>
                                <li class="false">Carpenter Services</li>
                                <li class="false">Logistic Services</li>
                            </ul>
                            <div class="btn-box">
                                <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
</div>
<section>
    <section>
        <div class="row mx-1">
            <div class="col-4 border-top"> </div>
            <div class="col-4"> </div>
            <div class="col-4 border-top"> </div>
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
</section>

