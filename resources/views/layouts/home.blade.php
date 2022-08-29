<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page->page_title }}</title>
    <meta name="description" content="{{ $page->page_description }}">
    <meta name="keywords" content="{{ $page->page_keyword }}">
    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/yellow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/website.min.css') }}">
</head>
<body class="is-theme-yellow">
<div class="pageloader"></div>
<div class="hero type-1 parallax is-cover is-relative is-fullheight" data-background="/assets/img/demo/hero-17.jpeg"
     data-color="#545375" data-color-opacity="0.6" data-demo-background="/assets/img/demo/hero-17.jpeg"
     data-page-theme="yellow"
     style="background-image: url(&quot;/assets/img/demo/hero-17.jpeg&quot;); background-attachment: fixed; background-position: 50% 0px;">
    <div class="parallax-overlay" style="background-color: rgb(84, 83, 117); opacity: 0.6;"></div>
    <img class="hero-shape-commerce" src="assets/img/graphics/legacy/cut-circle.svg" alt="">
    <x-web-header :cPage="$page"></x-web-header>
    <!-- Hero caption -->
    <div id="main-hero" class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="
                column
                is-6 is-offset-6 is-centered-tablet-portrait is-centered-mobile
              ">
                    <h1 class="parallax-hero-title is-smaller light-text">
                        {{ $page->page_title }}
                    </h1>
                    <h2 class="subtitle is-5 light-text mt-4 no-padding">
                        {{ $page->page_description }}
                    </h2>
                    <br>
                    <p class="buttons is-flex-center-mobile">
                        <a href="#start" class="
                    button button-cta
                    btn-align
                    primary-btn
                    z-index-2
                    scroll-link
                  ">
                            Get Started
                        </a>
                        <a href="#" class="button button-cta btn-align z-index-2">
                            Learn More
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Benefit Boxes-->
<div id="start" class="section">
    <div class="container">
        <div class="columns is-multiline is-flex-portrait">
            <!-- Benefit box -->
            <div class="column is-one-fifth flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <!-- Icon -->
                    <div class="icon-container is-first is-icon-reveal">
                        <img src="assets/img/graphics/icons/time-yellow.svg"
                             data-base-url="assets/img/graphics/icons/time" data-extension=".svg" alt="">
                    </div>
                    <!-- Content -->
                    <div class="content-container has-text-centered pb-4">
                        <h3>Optimize Time</h3>
                        <p>
                            Duplexque isdem diebus acciderat malum, quod et Theophilum
                            insontem atrox interceperat casus.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit box -->
            <div class="column is-one-fifth flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <!-- Icon -->
                    <div class="icon-container is-second is-icon-reveal">
                        <img src="assets/img/graphics/icons/diamond-yellow.svg"
                             data-base-url="assets/img/graphics/icons/diamond" data-extension=".svg" alt="">
                    </div>
                    <!-- Content -->
                    <div class="content-container has-text-centered pb-4">
                        <h3>Money</h3>
                        <p>
                            Duplexque isdem diebus acciderat malum, quod et Theophilum
                            insontem atrox interceperat casus.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit box -->
            <div class="column is-one-fifth flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <!-- Icon -->
                    <div class="icon-container is-third is-icon-reveal">
                        <img src="assets/img/graphics/icons/learn-yellow.svg"
                             data-base-url="assets/img/graphics/icons/learn" data-extension=".svg" alt="">
                    </div>
                    <!-- Content -->
                    <div class="content-container has-text-centered pb-4">
                        <h3>Relationships</h3>
                        <p>
                            Duplexque isdem diebus acciderat malum, quod et Theophilum
                            insontem atrox interceperat casus.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit box -->
            <div class="column is-one-fifth flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <!-- Icon -->
                    <div class="icon-container is-third is-icon-reveal">
                        <img src="assets/img/graphics/icons/aquire-yellow.svg"
                             data-base-url="assets/img/graphics/icons/aquire" data-extension=".svg" alt="">
                    </div>
                    <!-- Content -->
                    <div class="content-container has-text-centered pb-4">
                        <h3>Risks</h3>
                        <p>
                            Duplexque isdem diebus acciderat malum, quod et Theophilum
                            insontem atrox interceperat casus.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Benefit box -->
            <div class="column is-one-fifth flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <!-- Icon -->
                    <div class="icon-container is-third is-icon-reveal">
                        <img src="assets/img/graphics/icons/study-yellow.svg"
                             data-base-url="assets/img/graphics/icons/study" data-extension=".svg" alt="">
                    </div>
                    <!-- Content -->
                    <div class="content-container has-text-centered pb-4">
                        <h3>Data</h3>
                        <p>
                            Duplexque isdem diebus acciderat malum, quod et Theophilum
                            insontem atrox interceperat casus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--How It Works-->
<div id="solution" class="section">
    <div class="container">
        <div class="section-title-wrapper py-4">
            <div class="bg-number">1</div>
            <h2 class="title section-title has-text-centered dark-text text-bold">
                How it Works
            </h2>
        </div>

        <!-- Feature -->
        <div class="columns is-vcentered">
            <div class="column is-6 is-offset-1 has-text-centered">
                <div class="masked-image">
                    <img class="main-image" src="assets/img/demo/business/1.jpg"
                         data-demo-src="assets/img/demo/business/1.jpg" alt="">
                    <img class="image-mask" src="assets/img/graphics/shapes/mask-1.svg" alt="">
                    <!--Dots-->
                    <div class="dot dot-primary dot-1 levitate"></div>
                    <div class="dot dot-success dot-2 levitate delay-3"></div>
                    <div class="dot dot-info dot-3 levitate delay-2"></div>
                </div>
            </div>

            <div class="column is-4">
                <div class="icon-subtitle"><i class="im im-icon-Note"></i></div>
                <h2 class="title quick-feature is-smaller text-bold no-margin">
                    Choose a review template
                    <span class="bg-number">1</span>
                </h2>
                <div class="title-divider"></div>
                <span class="section-feature-description">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
              inermis iudicabit.</span>
                <div class="pt-10 pb-10">
                    <a href="#" class="button btn-align btn-more is-link color-primary">
                        Learn more about this <i class="sl sl-icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Feature -->
        <div class="columns is-vcentered">
            <div class="column is-6 has-text-centered is-hidden-tablet is-hidden-desktop">
                <div class="masked-image">
                    <img class="main-image" src="assets/img/demo/business/2.jpg"
                         data-demo-src="assets/img/demo/business/2.jpg" alt="">
                    <img class="image-mask" src="assets/img/graphics/shapes/mask-2.svg" alt="">
                    <!--Dots-->
                    <div class="dot dot-primary dot-4 levitate"></div>
                    <div class="dot dot-success dot-5 levitate delay-3"></div>
                    <div class="dot dot-info dot-3 levitate delay-2"></div>
                </div>
            </div>

            <div class="column is-4 is-offset-1">
                <div class="icon-subtitle"><i class="im im-icon-Professor"></i></div>
                <h2 class="title quick-feature is-smaller text-bold no-margin">
                    Invite the team to submit a review
                    <span class="bg-number">2</span>
                </h2>
                <div class="title-divider"></div>
                <span class="section-feature-description">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
              inermis iudicabit.</span>
                <div class="pt-10 pb-10">
                    <a href="#" class="button btn-align btn-more is-link color-primary">
                        Learn more about this <i class="sl sl-icon-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="column is-6 is-offset-1 has-text-centered is-hidden-mobile">
                <div class="masked-image">
                    <img class="main-image" src="assets/img/demo/business/2.jpg"
                         data-demo-src="assets/img/demo/business/2.jpg" alt="">
                    <img class="image-mask" src="assets/img/graphics/shapes/mask-2.svg" alt="">
                    <!--Dots-->
                    <div class="dot dot-primary dot-4 levitate"></div>
                    <div class="dot dot-success dot-5 levitate delay-3"></div>
                    <div class="dot dot-info dot-3 levitate delay-2"></div>
                </div>
            </div>
        </div>

        <!-- Feature -->
        <div class="columns is-vcentered">
            <div class="column is-6 is-offset-1 has-text-centered">
                <div class="masked-image">
                    <img class="main-image" src="assets/img/demo/business/3.jpg"
                         data-demo-src="assets/img/demo/business/3.jpg" alt="">
                    <img class="image-mask" src="assets/img/graphics/shapes/mask-3.svg" alt="">
                    <!--Dots-->
                    <div class="dot dot-primary dot-6 levitate"></div>
                    <div class="dot dot-success dot-5 levitate delay-3"></div>
                    <div class="dot dot-info dot-3 levitate delay-2"></div>
                </div>
            </div>

            <div class="column is-4">
                <div class="icon-subtitle"><i class="im im-icon-Yes"></i></div>
                <h2 class="title quick-feature is-smaller text-bold no-margin">
                    Get a fully processed review result
                    <span class="bg-number">3</span>
                </h2>
                <div class="title-divider"></div>
                <span class="section-feature-description">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum
              inermis iudicabit.</span>
                <div class="pt-10 pb-10">
                    <a href="#" class="button btn-align btn-more is-link color-primary">
                        Learn more about this <i class="sl sl-icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card Testimonials section -->
<div class="section is-relative is-app-grey">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper my-6">
            <div class="bg-number">2</div>
            <h2 class="title section-title has-text-centered dark-text text-bold">
                From Our Customers
            </h2>
            <!--Colored Shapes-->
            <svg class="blob-1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M37.1,-25.2C47.4,-16.7,54.5,-1.3,50,8.6C45.5,18.5,29.3,23,15.4,28.2C1.5,33.5,-10.2,39.5,-22.6,37.3C-35,35,-48,24.5,-51.2,11.4C-54.5,-1.7,-48,-17.4,-37.8,-25.9C-27.7,-34.3,-13.8,-35.6,-0.2,-35.4C13.4,-35.2,26.8,-33.7,37.1,-25.2Z"
                      transform="translate(100 100)"></path>
            </svg>

            <svg class="blob-2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M48,-10.8C56.2,9.7,52.8,38.8,37.8,49C22.8,59.2,-3.8,50.5,-24.2,35.2C-44.7,19.9,-59,-2,-53.9,-18.2C-48.9,-34.4,-24.4,-45,-2.3,-44.2C19.9,-43.5,39.7,-31.4,48,-10.8Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-3" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M45.3,-16.1C52.1,6.1,46.3,31,31.3,41.5C16.3,52,-8,48.2,-30,33.9C-52.1,19.6,-72,-5.1,-66.6,-25.4C-61.2,-45.7,-30.6,-61.5,-5.7,-59.7C19.3,-57.9,38.5,-38.3,45.3,-16.1Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-4" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M49.2,-14.2C58.8,13.6,58.2,46.5,43.2,56.7C28.2,66.9,-1.2,54.6,-18.6,38.8C-35.9,23.1,-41.1,4,-36,-17.5C-30.9,-39.1,-15.4,-63.1,2.2,-63.8C19.8,-64.5,39.6,-41.9,49.2,-14.2Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-5" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M54.1,-26.7C58.3,-4.9,41.5,14.6,23.8,25.8C6.1,37,-12.6,40,-27.3,30.9C-42.1,21.8,-52.9,0.5,-47.7,-22.7C-42.5,-46,-21.2,-71.2,1.9,-71.8C25,-72.4,50,-48.4,54.1,-26.7Z"
                      transform="translate(100 100)"></path>
            </svg>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column is-hidden-mobile"></div>

                <div class="column is-6">
                    <!-- Carousel wrapper -->
                    <div class="testimonials slick-initialized slick-slider slick-dotted">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous
                        </button>
                        <!-- Testimonial item -->
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 3962px; transform: translate3d(-1132px, 0px, 0px);">
                                <div class="testimonial-item slick-slide slick-cloned" data-slick-index="-1" id=""
                                     aria-hidden="true" tabindex="-1" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/marge.jpg" alt=""
                                                 data-demo-src="assets/img/avatars/marge.jpg">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Stella Daniels</h3>
                                            <span>Head of Marketing</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide" data-slick-index="0" aria-hidden="true"
                                     tabindex="-1" role="tabpanel" id="slick-slide00"
                                     aria-describedby="slick-slide-control00" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/carolin.png" alt=""
                                                 data-demo-src="assets/img/avatars/carolin.png">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Marjory Cambell</h3>
                                            <span>CEO</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide slick-current slick-active"
                                     data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel"
                                     id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/terry.jpg" alt=""
                                                 data-demo-src="assets/img/avatars/terry.jpg">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Terry Holmes</h3>
                                            <span>Software Engineer</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide" data-slick-index="2" aria-hidden="true"
                                     tabindex="-1" role="tabpanel" id="slick-slide02"
                                     aria-describedby="slick-slide-control02" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/marge.jpg" alt=""
                                                 data-demo-src="assets/img/avatars/marge.jpg">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Stella Daniels</h3>
                                            <span>Head of Marketing</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide slick-cloned" data-slick-index="3" id=""
                                     aria-hidden="true" tabindex="-1" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/carolin.png" alt=""
                                                 data-demo-src="assets/img/avatars/carolin.png">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Marjory Cambell</h3>
                                            <span>CEO</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide slick-cloned" data-slick-index="4" id=""
                                     aria-hidden="true" tabindex="-1" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/terry.jpg" alt=""
                                                 data-demo-src="assets/img/avatars/terry.jpg">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Terry Holmes</h3>
                                            <span>Software Engineer</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item slick-slide slick-cloned" data-slick-index="5" id=""
                                     aria-hidden="true" tabindex="-1" style="width: 486px;">
                                    <div class="flex-card card-overflow raised mb-40">
                                        <div class="testimonial-avatar">
                                            <img src="assets/img/avatars/marge.jpg" alt=""
                                                 data-demo-src="assets/img/avatars/marge.jpg">
                                        </div>
                                        <div class="testimonial-name">
                                            <h3>Stella Daniels</h3>
                                            <span>Head of Marketing</span>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                                                harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed
                                                stet periculis ut. Vis in probo decore labitur. Unum simul
                                                an vis, tale patrioque eos ad, dicunt percipit ea nam. Vis
                                                dolor quidam assentior te, atomorum posidonium qui an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial item -->


                        <!-- Testimonial item -->

                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                        <ul class="slick-dots" style="" role="tablist">
                            <li class="" role="presentation">
                                <button type="button" role="tab" id="slick-slide-control00"
                                        aria-controls="slick-slide00" aria-label="1 of 3" tabindex="-1">1
                                </button>
                            </li>
                            <li role="presentation" class="slick-active">
                                <button type="button" role="tab" id="slick-slide-control01"
                                        aria-controls="slick-slide01" aria-label="2 of 3" tabindex="0"
                                        aria-selected="true">2
                                </button>
                            </li>
                            <li role="presentation" class="">
                                <button type="button" role="tab" id="slick-slide-control02"
                                        aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="column is-hidden-mobile"></div>
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div id="use-cases" class="section my-6">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper has-text-centered">
            <div class="bg-number">3</div>
            <h2 class="section-title-landing">What we can do for you</h2>
            <h4>A quick glimpse at our services</h4>
        </div>

        <div class="content-wrapper tabbed-features">
            <!-- Navigation pills -->
            <div class="columns is-vcentered">
                <div class="column">
                    <div class="navigation-tabs outlined-pills animated-tabs">
                        <div class="tabs is-centered">
                            <ul>
                                <li class="tab-link is-active" data-tab="procurement">
                                    <a>Procurement</a>
                                </li>
                                <li class="tab-link" data-tab="diversity"><a>Diversity</a></li>
                                <li class="tab-link" data-tab="business-units">
                                    <a>Business Units</a>
                                </li>
                                <li class="tab-link" data-tab="boards">
                                    <a>C-Suite and Boards</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Pill content -->
                        <div id="procurement" class="navtab-content is-active">
                            <div class="columns is-vcentered">
                                <div class="column is-6">
                                    <figure class="image">
                                        <img class="has-light-shadow" src="assets/img/demo/business/procurement.jpeg"
                                             data-demo-src="assets/img/demo/business/procurement.jpeg" alt="">
                                    </figure>
                                </div>
                                <div class="column is-6">
                                    <div class="inner-content">
                                        <h2 class="feature-headline is-clean">
                                            Procurement Services
                                        </h2>
                                        <p class="body-color">
                                            Lorem ipsum dolor sit amet, vim quidam blandit voluptaria
                                            no, has eu lorem convenire incorrupte. Sound like a dream?
                                            It’s possible.
                                        </p>
                                        <div class="solid-list">
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Get off the QBR treadmill and measure the right things
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Elevate procurement’s status internally
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Move to strategic vs. transactional supplier
                                                    relationships
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Negotiate contracts with real leverage
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-wrap mt-4">
                                            <a href="kit15-contact.html"
                                               class="button btn-align btn-more is-link color-primary">
                                                Talk about our procurement services
                                                <i class="sl sl-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pill content -->
                        <div id="diversity" class="navtab-content">
                            <div class="columns is-vcentered">
                                <div class="column is-6">
                                    <figure class="image">
                                        <img class="has-light-shadow" src="assets/img/demo/business/diversity.jpeg"
                                             data-demo-src="assets/img/demo/business/diversity.jpeg" alt="">
                                    </figure>
                                </div>
                                <div class="column is-6">
                                    <div class="inner-content">
                                        <h2 class="feature-headline is-clean">
                                            Diversity Services
                                        </h2>
                                        <p class="body-color">
                                            Lorem ipsum dolor sit amet, vim quidam blandit voluptaria
                                            no, has eu lorem convenire incorrupte.
                                        </p>
                                        <div class="solid-list">
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Supplier development – help diverse suppliers improve
                                                    and thrive within your organization
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Automated feedback and clear ROI on development
                                                    programs
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    See how your suppliers perform on diversity (supplier
                                                    diversity, gender inequality, etc.)
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Customers should mirror your supplier base
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-wrap mt-4">
                                            <a href="kit15-contact.html"
                                               class="button btn-align btn-more is-link color-primary">
                                                Learn more about diversity services
                                                <i class="sl sl-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pill content -->
                        <div id="business-units" class="navtab-content">
                            <div class="columns is-vcentered">
                                <div class="column is-6">
                                    <figure class="image">
                                        <img class="has-light-shadow" src="assets/img/demo/business/business-units.jpeg"
                                             data-demo-src="assets/img/demo/business/business-units.jpeg" alt="">
                                    </figure>
                                </div>
                                <div class="column is-6">
                                    <div class="inner-content">
                                        <h2 class="feature-headline is-clean">Business Units</h2>
                                        <p class="body-color">
                                            Get the best out of the suppliers who help you get your
                                            job done, in any department:
                                        </p>
                                        <div class="solid-list">
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Marketing and media
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Legal, Consulting
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">IT Companies</div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Energy, Transportation
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    …And whatever else makes your department go
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-wrap mt-4">
                                            <a href="kit15-contact.html"
                                               class="button btn-align btn-more is-link color-primary">
                                                Have some suppliers to rank?
                                                <i class="sl sl-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pill content -->
                        <div id="boards" class="navtab-content">
                            <div class="columns is-vcentered">
                                <div class="column is-6">
                                    <figure class="image">
                                        <img class="has-light-shadow" src="assets/img/demo/business/boards.jpeg"
                                             data-demo-src="assets/img/demo/business/boards.jpeg" alt="">
                                    </figure>
                                </div>
                                <div class="column is-6">
                                    <div class="inner-content">
                                        <h2 class="feature-headline is-clean">
                                            C-Suite and Boards
                                        </h2>
                                        <p class="body-color">
                                            Get the best out of the suppliers who help you get your
                                            job done, in any department:
                                        </p>
                                        <div class="solid-list">
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Put your money where your PR mouth is
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Solid numbers and action for the proof behind your
                                                    goals and public statements
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Suppliers are a huge budget line item
                                                </div>
                                            </div>
                                            <div class="solid-list-item">
                                                <div class="list-bullet">
                                                    <i class="sl sl-icon-check"></i>
                                                </div>
                                                <div class="list-text body-color">
                                                    Get the value and return you deserve from suppliers
                                                    and employees
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-wrap mt-4">
                                            <a href="kit15-contact.html"
                                               class="button btn-align btn-more is-link color-primary">
                                                Talk about specifics for your department
                                                <i class="sl sl-icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="section is-app-grey">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper my-6">
            <div class="bg-number">4</div>
            <h2 class="title section-title has-text-centered dark-text text-bold">
                How We Do Business
            </h2>
            <!--Colored Shapes-->
            <svg class="blob-1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M37.1,-25.2C47.4,-16.7,54.5,-1.3,50,8.6C45.5,18.5,29.3,23,15.4,28.2C1.5,33.5,-10.2,39.5,-22.6,37.3C-35,35,-48,24.5,-51.2,11.4C-54.5,-1.7,-48,-17.4,-37.8,-25.9C-27.7,-34.3,-13.8,-35.6,-0.2,-35.4C13.4,-35.2,26.8,-33.7,37.1,-25.2Z"
                      transform="translate(100 100)"></path>
            </svg>

            <svg class="blob-2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M48,-10.8C56.2,9.7,52.8,38.8,37.8,49C22.8,59.2,-3.8,50.5,-24.2,35.2C-44.7,19.9,-59,-2,-53.9,-18.2C-48.9,-34.4,-24.4,-45,-2.3,-44.2C19.9,-43.5,39.7,-31.4,48,-10.8Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-3" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M45.3,-16.1C52.1,6.1,46.3,31,31.3,41.5C16.3,52,-8,48.2,-30,33.9C-52.1,19.6,-72,-5.1,-66.6,-25.4C-61.2,-45.7,-30.6,-61.5,-5.7,-59.7C19.3,-57.9,38.5,-38.3,45.3,-16.1Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-4" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M49.2,-14.2C58.8,13.6,58.2,46.5,43.2,56.7C28.2,66.9,-1.2,54.6,-18.6,38.8C-35.9,23.1,-41.1,4,-36,-17.5C-30.9,-39.1,-15.4,-63.1,2.2,-63.8C19.8,-64.5,39.6,-41.9,49.2,-14.2Z"
                      transform="translate(100 100)"></path>
            </svg>


            <svg class="blob-5" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#837FCB"
                      d="M54.1,-26.7C58.3,-4.9,41.5,14.6,23.8,25.8C6.1,37,-12.6,40,-27.3,30.9C-42.1,21.8,-52.9,0.5,-47.7,-22.7C-42.5,-46,-21.2,-71.2,1.9,-71.8C25,-72.4,50,-48.4,54.1,-26.7Z"
                      transform="translate(100 100)"></path>
            </svg>
        </div>

        <div class="columns is-vcentered py-6">
            <!--Benefits-->
            <div class="column is-4 is-offset-2">
                <div class="flex-card benefits-card">
                    <div class="benefits-header">
                        <i class="im im-icon-Flash"></i>
                        <h3 class="title is-4">We Strive to</h3>
                    </div>
                    <div class="benefits-body">
                        <div class="solid-list">
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Build trust and relationships through transparency and
                                    feedback
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Create a level playing field for all suppliers, including
                                    diverse businesses
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Weave procurement into the fabric of the company
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Foster positive relationships both internally and externally
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Benefits-->
            <div class="column is-4">
                <div class="flex-card benefits-card">
                    <div class="benefits-header">
                        <i class="im im-icon-Structure"></i>
                        <h3 class="title is-4">We Care About</h3>
                    </div>
                    <div class="benefits-body">
                        <div class="solid-list">
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Changing the course of business through engagement and
                                    intervention
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Ensuring you get the most value out of the dollars you spend
                                    with suppliers
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Helping our customers get quick, frequent and visible “wins”
                                </div>
                            </div>
                            <div class="solid-list-item">
                                <div class="list-bullet">
                                    <i class="sl sl-icon-check"></i>
                                </div>
                                <div class="list-text body-color">
                                    Surfacing critical items that would otherwise fester or never
                                    come out
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CEO Word -->
<section id="business-types" class="section">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper has-text-centered my-6">
            <div class="bg-number">5</div>
            <h2 class="section-title-landing">A Quick Word</h2>
            <h4>Every business matters, learn how we handle it.</h4>
        </div>

        <!-- Content -->
        <div class="content-wrapper pb-6">
            <div class="columns is-vcentered">
                <div class="column is-5 is-offset-1">
                    <div class="side-feature-text">
                        <h2 class="feature-headline is-clean is-flex is-align-items-center">
                            <figure class="image is-64x64 mr-4">
                                <img class="is-rounded" src="assets/img/avatars/janet.jpg"
                                     data-demo-src="assets/img/avatars/janet.jpg" alt="">
                            </figure>
                            <span>A Word from our CEO</span>
                        </h2>
                        <p class="mt-4">
                            <i class="fa fa-quote-left mr-2 is-size-4 color-primary"></i>Lorem
                            ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu
                            lorem convenire incorrupte.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has
                            eu lorem convenire incorrupte. Vis mutat altera percipit ad, ipsum
                            prompta ius eu. Sanctus appellantur vim ea.
                            <i class="fa fa-quote-right ml-2 is-size-4 color-primary"></i>
                        </p>
                    </div>
                </div>
                <!-- Card with icons -->
                <div class="column is-4 is-offset-1">
                    <div class="flex-card company-types">
                        <div class="icon-group">
                            <img src="assets/img/graphics/icons/store-yellow.svg"
                                 data-base-url="assets/img/graphics/icons/store" data-extension=".svg" alt="">
                            <span>Commerce &amp; Services</span>
                        </div>
                        <div class="icon-group">
                            <img src="assets/img/graphics/icons/bank-yellow.svg"
                                 data-base-url="assets/img/graphics/icons/bank" data-extension=".svg" alt="">
                            <span>Finance services</span>
                        </div>
                        <div class="icon-group">
                            <img src="assets/img/graphics/icons/factory-yellow.svg"
                                 data-base-url="assets/img/graphics/icons/factory" data-extension=".svg" alt="">
                            <span>Industry</span>
                        </div>
                        <div class="icon-group">
                            <img src="assets/img/graphics/icons/church-yellow.svg"
                                 data-base-url="assets/img/graphics/icons/church" data-extension=".svg" alt="">
                            <span>Non Profit</span>
                        </div>
                        <div class="icon-group">
                            <img src="assets/img/graphics/icons/warehouse-yellow.svg"
                                 data-base-url="assets/img/graphics/icons/warehouse" data-extension=".svg" alt="">
                            <span>Distribution</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Contact-->
<div id="contact" class="section parallax is-cover"
     data-background="https://images.pexels.com/photos/1024248/pexels-photo-1024248.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940"
     data-color="#545375" data-color-opacity="0.6"
     data-demo-background="https://images.pexels.com/photos/1024248/pexels-photo-1024248.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940"
     style="background-image: url(&quot;https://images.pexels.com/photos/1024248/pexels-photo-1024248.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940&quot;); background-attachment: fixed;">
    <div class="parallax-overlay" style="background-color: rgb(84, 83, 117); opacity: 0.6;"></div>
    <div class="container">
        <!--Title-->
        <div class="section-title has-text-centered my-6">
            <h2 class="title is-2 is-spaced is-light">Join Us</h2>
            <h3 class="subtitle white-text">Contact us to learn more.</h3>
        </div>

        <!--Form subsection-->
        <div class="columns is-vcentered form-wrapper">
            <div class="column is-8 is-offset-2">
                <!--Form-->
                <div class="contact-form-2">
                    <form>
                        <div class="control-material is-primary">
                            <input class="material-input" type="text" required="">
                            <span class="material-highlight"></span>
                            <span class="bar"></span>
                            <label>Full Name</label>
                        </div>
                        <div class="control-material is-primary">
                            <input class="material-input" type="text" required="">
                            <span class="material-highlight"></span>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>
                        <div class="control-material is-primary">
                            <input class="material-input" type="text" required="">
                            <span class="material-highlight"></span>
                            <span class="bar"></span>
                            <label>Company</label>
                        </div>
                        <div class="control-material is-primary">
                            <input class="material-input" type="text" required="">
                            <span class="material-highlight"></span>
                            <span class="bar"></span>
                            <label>Job Title</label>
                        </div>
                        <div class="">
                            <h4 class="title is-5">Iam interested in</h4>
                        </div>
                        <div class="columns mt-4 no-padding">
                            <div class="column is-6">
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox1" class="styled" type="checkbox">
                                        <label for="checkbox1"> More info on the solution </label>
                                    </div>
                                </div>
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox2" class="styled" type="checkbox">
                                        <label for="checkbox2"> Getting out of spreadsheets </label>
                                    </div>
                                </div>
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"> Tackling supplier diversity </label>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox4" class="styled" type="checkbox">
                                        <label for="checkbox4"> Seeing a demo </label>
                                    </div>
                                </div>
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox5" class="styled" type="checkbox">
                                        <label for="checkbox5">
                                            Looking for a similar solution
                                        </label>
                                    </div>
                                </div>
                                <!-- Checkbox -->
                                <div class="field">
                                    <div class="b-checkbox">
                                        <input id="checkbox6" class="styled" type="checkbox">
                                        <label for="checkbox6"> Other </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-material is-primary is-hidden">
                            <textarea rows="3"></textarea>
                            <span class="material-highlight"></span>
                            <span class="bar"></span>
                            <label>Message</label>
                        </div>
                        <div class="button-wrap">
                            <div class="button cta-button primary-btn is-fullwidth">
                                Submit Application
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<!-- Side dark footer -->
<footer class="footer footer-dark-left">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-6">
                <div class="mb-20">
                    <img class="small-footer-logo switcher-logo" src="assets/img/logos/logo/bulkit-yellow.svg" alt="">
                </div>
                <div>
                    <span class="moto">Designed and coded with <i
                            class="fa fa-heart color-red"></i> by CSS Ninja.</span>
                    <nav class="level is-mobile mt-20">
                        <div class="level-left level-social">
                            <a href="#" class="level-item">
                                <span class="icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a href="#" class="level-item">
                                <span class="icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a href="#" class="level-item">
                                <span class="icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a href="#" class="level-item">
                                <span class="icon"><i class="fa fa-dribbble"></i></span>
                            </a>
                            <a href="#" class="level-item">
                                <span class="icon"><i class="fa fa-github"></i></span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="column">
                <div class="footer-nav-right">
                    <a class="footer-nav-link" href="#">Home</a>
                    <a class="footer-nav-link" href="#">Features</a>
                    <a class="footer-nav-link" href="#">Pricing</a>
                    <a class="footer-nav-link" href="#">Sign in</a>
                    <a class="footer-nav-link" href="#">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Side dark footer -->
<!-- Side navigation -->
<div class="side-navigation-menu">
    <!-- Categories menu -->
    <div class="category-menu-wrapper">
        <!-- Menu -->
        <ul class="categories">
            <li class="square-logo"><img src="assets/img/logos/square-white.svg" alt=""></li>
            <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
            <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
            <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
        </ul>
        <!-- Menu -->

        <ul class="author">
            <li>
                <!-- Theme author -->
                <a href="https://cssninja.io" target="_blank">
                    <img class="main-menu-author" src="assets/img/logos/cssninja.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!-- /Categories menu -->

    <!-- Navigation menu -->
    <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Demo pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
            </a>
        </div>
        <!-- Navigation Body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span
                        class="material-icons">weekend</span>Agency</a>
                <ul>
                    <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                    <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                    <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                    <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup</a>
                <ul>
                    <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                    <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                    <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                    <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span
                        class="material-icons">apps</span>Software</a>
                <ul>
                    <li><a class="is-submenu" href="/kit15-landing-5.html">Conference v1</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-6.html">Conference v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing.html">Projects v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-2.html">Healthcare v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-3.html">Healthcare v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-4.html">Business v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-5.html">Business v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-6.html">Business v3</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-7.html">Business v4</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-8.html">Business v5</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-9.html">Business v6</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-10.html">Business v7</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-11.html">Business v8</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-12.html">Business v9</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-13.html">Business 10</a></li>
                    <li><a class="is-submenu" href="/kit1-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit1-features-2.html">Features v2</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timer</span>Freelancer</a>
                <ul>
                    <li><a class="is-submenu" href="/kit2-landing-9.html">Freelancer v1</a></li>
                    <li><a class="is-submenu" href="/kit2-landing.html">Freelancer v2</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-2.html">Freelancer v3</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-3.html">Freelancer v4</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-10.html">Freelancer v5</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-11.html">Freelancer v6</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-4.html">Freelancer v7</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-5.html">Freelancer v8</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-6.html">Freelancer v9</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-7.html">Freelancer v10</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-8.html">Freelancer v11</a></li>
                    <li><a class="is-submenu" href="/kit2-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit2-features-2.html">Features v2</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">voice_chat</span>Videoconference</a>
                <ul>
                    <li><a class="is-submenu" href="/kit16-landing.html">Videoconference v1</a></li>
                    <li><a class="is-submenu" href="/kit16-landing-2.html">Videoconference v2</a></li>
                    <li><a class="is-submenu" href="/kit16-landing-3.html">Videoconference v3</a></li>
                    <li><a class="is-submenu" href="/kit3-landing.html">Chat v1</a></li>
                    <li><a class="is-submenu" href="/kit3-landing-2.html">Chat v2</a></li>
                    <li><a class="is-submenu" href="/kit3-features.html">Features v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">domain</span>Business</a>
                <ul>
                    <li><a class="is-submenu" href="/kit17-landing.html">Crypto v1</a></li>
                    <li><a class="is-submenu" href="/kit17-landing-2.html">Crypto v2</a></li>
                    <li><a class="is-submenu" href="/kit17-landing-3.html">Crypto v3</a></li>
                    <li><a class="is-submenu" href="/kit17-landing-4.html">Crypto v4</a></li>
                    <li><a class="is-submenu" href="/kit15-landing.html">Business v1</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-2.html">Business v2</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-3.html">Business v3</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-4.html">Business v4</a></li>
                    <li><a class="is-submenu" href="/kit10-landing.html">Banking v1</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-2.html">Banking v2</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-3.html">Banking v3</a></li>
                    <li><a class="is-submenu" href="/kit18-landing.html">Car Rental v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">shopping_cart</span>Ecommerce</a>
                <ul>
                    <li><a class="is-submenu" href="/commerce-home.html">Shop page</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing-2.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                    <li><a class="is-submenu" href="/commerce-cart.html">Cart</a></li>
                    <li><a class="is-submenu" href="/commerce-payment-flow.html">Payment</a></li>
                    <li><a class="is-submenu" href="/kit11-landing.html">SaaS v1</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-2.html">SaaS v2</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-3.html">SaaS v3</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-4.html">SaaS v4</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-5.html">SaaS v5</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-6.html">SaaS v6</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-7.html">SaaS v7</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-8.html">SaaS v8</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span
                        class="material-icons">mouse</span>Services</a>
                <ul>
                    <li><a class="is-submenu" href="kit12-landing.html">Consulting v1</a></li>
                    <li><a class="is-submenu" href="kit12-landing-2.html">Consulting v2</a></li>
                    <li><a class="is-submenu" href="kit12-landing-3.html">Consulting v3</a></li>
                    <li><a class="is-submenu" href="kit12-landing-4.html">Consulting v4</a></li>
                    <li><a class="is-submenu" href="kit4-landing.html">HR v1</a></li>
                    <li><a class="is-submenu" href="kit4-landing-2.html">HR v2</a></li>
                    <li><a class="is-submenu" href="kit5-landing.html">Collaboration v1</a></li>
                    <li><a class="is-submenu" href="kit5-features.html">Collaboration v2</a></li>
                    <li><a class="is-submenu" href="kit6-landing.html">Collaboration v3</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Jobs</a>
                <ul>
                    <li><a class="is-submenu" href="/kit13-landing.html">Jobs v1</a></li>
                    <li><a class="is-submenu" href="/kit13-landing-2.html">Jobs v2</a></li>
                    <li><a class="is-submenu" href="/kit8-landing.html">Work v1</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-1.html">Work v2</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-5.html">Work v3</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-2.html">Work v4</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-6.html">Work v5</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-3.html">Work v6</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-4.html">Work v7</a></li>
                    <li><a class="is-submenu" href="/kit14-landing.html">Development v1</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-3.html">Development v2</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-2.html">Development v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">people</span>Customers</a>
                <ul>
                    <li><a class="is-submenu" href="/kit7-landing.html">CRM v1</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-alt.html">CRM v2</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-3.html">CRM v3</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-4.html">CRM v4</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-5.html">CRM v5</a></li>
                    <li><a class="is-submenu" href="/kit9-landing.html">CRM v6</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-2.html">CRM v7</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-3.html">CRM v8</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-4.html">CRM v9</a></li>
                    <li><a class="is-submenu" href="/kit8-jobs.html">Job List</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Sub Pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link has-new" href="#"><span
                        class="material-icons">account_circle</span>Personal</a>
                <ul>
                    <li><a class="is-submenu" href="/profile-1.html">Profile v1</a></li>
                    <li><a class="is-submenu" href="/profile-2.html">Profile v2</a></li>
                    <li><a class="is-submenu" href="/profile-3.html">Profile v3</a></li>
                    <li><a class="is-submenu" href="/profile-4.html">Profile v4</a></li>
                    <li><a class="is-submenu" href="/profile-5.html">Profile v5</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span
                        class="material-icons">shopping_cart</span>Commerce</a>
                <ul>
                    <li><a class="is-submenu" href="/commerce-home.html">Shop Home</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing.html">Product landing v1</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing-2.html">Product landing v2</a></li>
                    <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                    <li><a class="is-submenu" href="/commerce-cart.html">Cart page</a></li>
                    <li><a class="is-submenu" href="/commerce-payment-flow.html">Checkout page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                <ul>
                    <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                    <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                    <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                <ul>
                    <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                    <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                    <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                    <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                    <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                <ul>
                    <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                    <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                    <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link has-new" href="#"><span class="material-icons">verified_user</span>Authentication</a>
                <ul>
                    <li><a class="is-submenu" href="/startup-login.html">Login v1</a></li>
                    <li><a class="is-submenu" href="/startup-login-2.html">Login v2</a></li>
                    <li><a class="is-submenu" href="/kit1-login.html">Login v3</a></li>
                    <li><a class="is-submenu" href="/kit2-login.html">Login v4</a></li>
                    <li><a class="is-submenu" href="/kit3-login.html">Login v5</a></li>
                    <li><a class="is-submenu" href="/kit4-login.html">Login v6</a></li>
                    <li><a class="is-submenu" href="/kit5-login.html">Login v7</a></li>
                    <li><a class="is-submenu" href="/kit6-login.html">Login v8</a></li>
                    <li><a class="is-submenu" href="/kit8-login.html">Login v9</a></li>
                    <li><a class="is-submenu" href="/startup-signup.html">Signup v1</a></li>
                    <li><a class="is-submenu" href="/startup-signup-2.html">Signup v2</a></li>
                    <li><a class="is-submenu" href="/kit3-signup.html">Signup v3</a></li>
                    <li><a class="is-submenu" href="/kit4-signup.html">Signup v4</a></li>
                    <li><a class="is-submenu" href="/kit6-signup.html">Signup v5</a></li>
                    <li><a class="is-submenu" href="/kit8-signup.html">Signup v6</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                <ul>
                    <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                    <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                    <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                    <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                    <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                    <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                    <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                    <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Components</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                    <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                    <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                    <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                            light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                            solid</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                            light</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span
                        class="material-icons">view_stream</span>Sections</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                    <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                    <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                    <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                    <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                    <li><a class="is-submenu" href="/_components-sections-faq.html">FAQ</a></li>
                    <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                    <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                    <li><a class="is-submenu" href="/_components-sections-cta.html">Call To Action</a></li>
                    <li><a class="is-submenu" href="/_components-sections-posts.html">Posts</a></li>
                    <li><a class="is-submenu" href="/_components-sections-video.html">Video</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span
                        class="material-icons">playlist_add_check</span>Basic
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs &amp; pills</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges &amp; labels</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span
                        class="material-icons">check_box</span>Forms</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                    <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                    <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                    <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                    <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                    <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                    <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                    <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                    <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Navigation menu -->
</div>
<!-- /Side navigation -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<x-style-switcher></x-style-switcher>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('js/website.min.js') }}"></script>
</body>
</html>
