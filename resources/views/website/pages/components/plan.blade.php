<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

<style>
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #333;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    img {
        max-width: 100%;
        height: auto;
    }
    /*--blog----*/

    .sec-title{
        position:relative;
        margin-bottom:70px;
    }

    /*.sec-title .title{*/
    /*    position: relative;*/
    /*    display: block;*/
    /*    font-size: 16px;*/
    /*    line-height: 1em;*/
    /*    color: #ff8a01;*/
    /*    font-weight: 500;*/
    /*    background: rgb(247,0,104);*/
    /*    background: -moz-linear-gradient(to left, rgba(247,0,104,1) 0%, rgba(68,16,102,1) 25%, rgba(247,0,104,1) 75%, rgba(68,16,102,1) 100%);*/
    /*    background: -webkit-linear-gradient(to left, rgba(247,0,104,1) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);*/
    /*    background: linear-gradient(to left, rgba(247,0,104) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);*/
    /*    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F70068', endColorstr='#441066',GradientType=1 );*/
    /*    color: transparent;*/
    /*    -webkit-background-clip: text;*/
    /*    -webkit-text-fill-color: transparent;*/
    /*    text-transform: uppercase;*/
    /*    letter-spacing: 5px;*/
    /*    margin-bottom: 15px;*/
    /*}*/

    .sec-title h2{
        position:relative;
        display: inline-block;
        font-size:35px;
        line-height:1.2em;
        color:#1e1f36;
        font-weight:700;
    }

    .sec-title .text{
        position: relative;
        font-size: 16px;
        line-height: 28px;
        color: #888888;
        margin-top: 30px;
    }

    .sec-title.light h2,
    .sec-title.light .title{
        color: #ffffff;
        -webkit-text-fill-color:inherit;
    }
    .pricing-section {
        position: relative;
        padding: 100px 0 80px;
        overflow: hidden;
    }
    .pricing-section .outer-box{
        max-width: 1100px;
        margin: 0 auto;
    }


    .pricing-section .row{
        margin: 0 -30px;
    }

    .pricing-block{
        position: relative;
        padding: 0 30px;
        margin-bottom: 40px;
    }

    .pricing-block .inner-box{
        position: relative;
        background-color: #ffffff;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        padding: 0 0 30px;
        max-width: 370px;
        margin: 0 auto;
        border-bottom: 10px solid #01023B;
    }

    .pricing-block .icon-box{
        position: relative;
        padding: 50px 30px 0;
        background-color: #01023B;
        text-align: center;
    }

    .pricing-block .icon-box:before{
        position: absolute;
        left: 0;
        bottom: 0;
        height: 75px;
        width: 100%;
        border-radius: 50% 50% 0 0;
        background-color: #ffffff;
        content: "";
    }


    .pricing-block .icon-box .icon-outer{
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 50%;
        margin: 0 auto;
        padding: 10px;
    }

    .pricing-block .icon-box i{
        position: relative;
        display: block;
        height: 130px;
        width: 130px;
        line-height: 120px;
        border: 5px solid #01023B;
        border-radius: 50%;
        font-size: 50px;
        color: #01023B;
        -webkit-transition:all 600ms ease;
        -ms-transition:all 600ms ease;
        -o-transition:all 600ms ease;
        -moz-transition:all 600ms ease;
        transition:all 600ms ease;
    }

    .pricing-block .inner-box:hover .icon-box i{
        transform:rotate(360deg);
    }

    .pricing-block .price-box{
        position: relative;
        text-align: center;
        padding: 10px 20px;
    }

    .pricing-block .title{
        position: relative;
        display: block;
        font-size: 30px;
        line-height: 2em;
        color: #222222;
        font-weight: bold;
        text-transform: uppercase;
    }

    .pricing-block .price{
        display: block;
        font-size: 20px;
        line-height: 2em;
        font-weight: 700;
        color: #01023B;
    }
    .pricing-block .month{
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #01023B;
    }


    .pricing-block .features{
        position: relative;
        max-width: 200px;
        margin: 0 auto 20px;
    }

    .pricing-block .features li{
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 30px;
        color: #848484;
        font-weight: 500;
        padding: 5px 0;
        padding-left: 30px;
        border-bottom: 1px dashed #dddddd;
    }
    .pricing-block .features li:before {
        position: absolute;
        left: 0;
        top: 50%;
        font-size: 16px;
        color: #01023B;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\f058";
        font-family: "Font Awesome 5 Free";
        margin-top: -8px;
    }
    .pricing-block .features li.false:before{
        color: #F684B2;
        content: "\f057";
    }

    .pricing-block .features li a{
        color: #848484;
    }

    .pricing-block .features li:last-child{
        border-bottom: 0;
    }

    .pricing-block .btn-box{
        position: relative;
        text-align: center;
    }

    .pricing-block .btn-box a{
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 25px;
        color: #ffffff;
        font-weight: 500;
        padding: 8px 30px;
        background-color: #01023B;
        /*border-radius: 10px;*/
        border-top:2px solid transparent;
        border-bottom:2px solid transparent;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 300ms ease;
    }

    .pricing-block .btn-box a:hover{
        color: #ffffff;
    }

    .pricing-block .inner-box:hover .btn-box a{
        color: #01023B;
        background:none;
        border-radius:0;
        border-color: #01023B;
    }

    .pricing-block:nth-child(2) .icon-box i,
    .pricing-block:nth-child(2) .inner-box{
        border-color:  #F684B2;
    }

    .pricing-block:nth-child(2) .btn-box a,
    .pricing-block:nth-child(2) .icon-box{
        background-color:  #F684B2;
    }

    .pricing-block:nth-child(2) .inner-box:hover .btn-box a{
        color: #F684B2;
        background:none;
        border-radius:0;
        border-color: #F684B2;
    }

    .pricing-block:nth-child(2) .icon-box i,
    .pricing-block:nth-child(2) .title,
    .pricing-block:nth-child(2) .price,
    .pricing-block:nth-child(2) .month {
        color:  #F684B2;
    }

    .pricing-block:nth-child(3) .icon-box i,
    .pricing-block:nth-child(3) .inner-box{
        border-color:  #01023B;
    }

    .pricing-block:nth-child(3) .btn-box a,
    .pricing-block:nth-child(3) .icon-box{
        background-color:   #01023B;
    }

    .pricing-block:nth-child(3) .icon-box i,
    .pricing-block:nth-child(3) .price{
        color:   #01023B;
    }

    .pricing-block:nth-child(3) .inner-box:hover .btn-box a{
        color: #01023B;
        background:none;
        border-radius:0;
        border-color: #01023B;
    }

</style>

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
