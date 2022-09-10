<?php

namespace Database\Seeders\CMS;

use App\Enum\TableEnum;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSectionsSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table(TableEnum::CMS_SECTIONS)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table(TableEnum::CMS_SECTIONS)->insert([
            [
                'order' => '1',
                'page_id' => '1',
                'html' => '<div id="start" class="section bg-white">
<div class="container">
<div class="columns is-multiline is-flex-portrait">
<div class="column is-one-fifth flex-portrait-4">
<div class="flex-card is-feature padding-20">
<div class="icon-container is-first is-icon-reveal"><img src="/assets/img/graphics/icons/time-green.svg" alt="" data-base-url="/assets/img/graphics/icons/time" data-extension=".svg" /></div>
<div class="content-container has-text-centered pb-4">
<h3>BA Company</h3>
<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus.</p>
</div>
</div>
</div>
<div class="column is-one-fifth flex-portrait-4">
<div class="flex-card is-feature padding-20">
<div class="icon-container is-second is-icon-reveal"><img src="/assets/img/graphics/icons/diamond-green.svg" alt="" data-base-url="/assets/img/graphics/icons/diamond" data-extension=".svg" /></div>
<div class="content-container has-text-centered pb-4">
<h3>BA Individual</h3>
<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus.</p>
</div>
</div>
</div>
<div class="column is-one-fifth flex-portrait-4">
<div class="flex-card is-feature padding-20">
<div class="icon-container is-third is-icon-reveal"><img src="/assets/img/graphics/icons/learn-green.svg" alt="" data-base-url="/assets/img/graphics/icons/learn" data-extension=".svg" /></div>
<div class="content-container has-text-centered pb-4">
<h3>Freelancer</h3>
<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus.</p>
</div>
</div>
</div>
<div class="column is-one-fifth flex-portrait-4">
<div class="flex-card is-feature padding-20">
<div class="icon-container is-third is-icon-reveal"><img src="/assets/img/graphics/icons/aquire-green.svg" alt="" data-base-url="/assets/img/graphics/icons/aquire" data-extension=".svg" /></div>
<div class="content-container has-text-centered pb-4">
<h3>Service Provider Company</h3>
<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus.</p>
</div>
</div>
</div>
<div class="column is-one-fifth flex-portrait-4">
<div class="flex-card is-feature padding-20">
<div class="icon-container is-third is-icon-reveal"><img src="/assets/img/graphics/icons/study-green.svg" alt="" data-base-url="/assets/img/graphics/icons/study" data-extension=".svg" /></div>
<div class="content-container has-text-centered pb-4">
<h3>Mentorship</h3>
<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus.</p>
</div>
</div>
</div>
</div>
</div>
</div>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '2',
                'page_id' => '1',
                'html' => '<div id="solution" class="section bg-white">
<div class="container">
<div class="section-title-wrapper py-4">
<div class="bg-number">1</div>
<h2 class="title section-title has-text-centered dark-text text-bold">Our Servics</h2>
</div>
<div class="columns is-vcentered">
<div class="column is-6 is-offset-1 has-text-centered">
<div class="masked-image"><img class="main-image" src="/uploads/sections/1.jpg" alt="" data-demo-src="/uploads/sections/1.jpg" /> <img class="image-mask" src="/assets/img/graphics/shapes/mask-1.svg" alt="" />
<div class="dot dot-primary dot-1 levitate"></div>
<div class="dot dot-success dot-2 levitate delay-3"></div>
<div class="dot dot-info dot-3 levitate delay-2"></div>
</div>
</div>
<div class="column is-4">
<div class="icon-subtitle"></div>
<h2 class="title quick-feature is-smaller text-bold no-margin">Startup Program</h2>
<div class="title-divider"></div>
<span class="section-feature-description">Investment-BackendAcceleration Program </span>
<div class="">
<div class="pt-10 pb-10"><a class="button btn-align btn-more is-link color-primary" href="#">Learn more about this</a></div>
</div>
<div class="column is-6 is-offset-1 has-text-centered is-hidden-mobile">
<div class="masked-image"></div>
</div>
</div>
</div>
<div class="columns is-vcentered">
<div class="column is-6 has-text-centered is-hidden-tablet is-hidden-desktop">
<div class="masked-image"><img class="main-image" src="/uploads/sections/2.jpg" alt="" data-demo-src="/uploads/sections/2.jpg" />
<div class="column is-4 is-offset-1">
<h2 class="title quick-feature is-smaller text-bold no-margin">Investors</h2>
<div class="title-divider"></div>
<span class="section-feature-description">Investment-Backed Acceleration Program</span>
<div class="pt-10 pb-10"><a class="button btn-align btn-more is-link color-primary" href="#">Learn more about this</a></div>
</div>
<div class="column is-6 is-offset-1 has-text-centered is-hidden-mobile">
<div class="masked-image"><img class="main-image" src="/uploads/sections/3.jpg" alt="" data-demo-src="/uploads/sections/3.jpg" /></div>
</div>
<img class="image-mask" src="/assets/img/graphics/shapes/mask-3.svg" alt="" />
<div class="dot dot-primary dot-4 levitate"></div>
<div class="dot dot-success dot-5 levitate delay-3"></div>
<div class="dot dot-info dot-3 levitate delay-2"></div>
</div>
</div>
<div class="column is-4 is-offset-1">
<div class="icon-subtitle"></div>
<h2 class="title quick-feature is-smaller text-bold no-margin">Investors</h2>
<div class="title-divider"></div>
<span class="section-feature-description">Investment-Backed Acceleration Program</span>
<div class="pt-10 pb-10"><a class="button btn-align btn-more is-link color-primary" href="#">Learn more about this</a></div>
</div>
<div class="column is-6 is-offset-1 has-text-centered is-hidden-mobile">
<div class="masked-image"><img class="main-image" src="/uploads/sections/3.jpg" alt="" data-demo-src="/uploads/sections/3.jpg" /> <img class="image-mask" src="/assets/img/graphics/shapes/mask-2.svg" alt="" />
<div class="dot dot-primary dot-4 levitate"></div>
<div class="dot dot-success dot-5 levitate delay-3"></div>
<div class="dot dot-info dot-3 levitate delay-2"></div>
</div>
</div>
</div>
<div class="columns is-vcentered">
<div class="column is-6 is-offset-1 has-text-centered">
<div class="masked-image"><img class="main-image" src="/uploads/sections/3.jpg" alt="" data-demo-src="/uploads/sections/3.jpg" /> <img class="image-mask" src="/assets/img/graphics/shapes/mask-3.svg" alt="" />
<div class="dot dot-primary dot-6 levitate"></div>
<div class="dot dot-success dot-5 levitate delay-3"></div>
<div class="dot dot-info dot-3 levitate delay-2"></div>
</div>
</div>
<div class="column is-4">
<div class="icon-subtitle"></div>
<h2 class="title quick-feature is-smaller text-bold no-margin">Business Solutions</h2>
<div class="title-divider"></div>
<span class="section-feature-description">Workspaces<br />Meeting Rooms<br />Education Hall<br />Expand Into Saudi</span>
<div class="pt-10 pb-10"><a class="button btn-align btn-more is-link color-primary" href="#">Learn more about this</a></div>
</div>
</div>
</div>
</div>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '3',
                'page_id' => '1',
                'html' => '<div id="use-cases" class="section my-6">
<div class="container">
<div class="section-title-wrapper has-text-centered">
<div class="bg-number">3</div>
<h2 class="section-title-landing">What we can do for you</h2>
<h4>A quick glimpse at our services</h4>
</div>
<div class="content-wrapper tabbed-features">
<div class="columns is-vcentered">
<div class="column">
<div class="navigation-tabs outlined-pills animated-tabs">
<div class="tabs is-centered">
<ul>
<li class="tab-link is-active" data-tab="procurement"><a>Procurement</a></li>
<li class="tab-link" data-tab="diversity"><a>Diversity</a></li>
<li class="tab-link" data-tab="business-units"><a>Business Units</a></li>
<li class="tab-link" data-tab="boards"><a>C-Suite and Boards</a></li>
</ul>
</div>
<div id="procurement" class="navtab-content is-active">
<div class="columns is-vcentered">
<div class="column is-6">
<figure class="image"><img class="has-light-shadow" src="/assets/img/demo/business/procurement.jpeg" alt="" data-demo-src="/assets/img/demo/business/procurement.jpeg" /></figure>
</div>
<div class="column is-6">
<div class="inner-content">
<h2 class="feature-headline is-clean">Procurement Services</h2>
<p class="body-color">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Sound like a dream? It’s possible.</p>
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Get off the QBR treadmill and measure the right things</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Elevate procurement’s status internally</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Move to strategic vs. transactional supplier relationships</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Negotiate contracts with real leverage</div>
</div>
</div>
<div class="button-wrap mt-4"><a class="button btn-align btn-more is-link color-primary" href="">Talk about our procurement services</a></div>
</div>
</div>
</div>
</div>
<div id="diversity" class="navtab-content">
<div class="columns is-vcentered">
<div class="column is-6">
<figure class="image"><img class="has-light-shadow" src="/assets/img/demo/business/diversity.jpeg" alt="" data-demo-src="/assets/img/demo/business/diversity.jpeg" /></figure>
</div>
<div class="column is-6">
<div class="inner-content">
<h2 class="feature-headline is-clean">Diversity Services</h2>
<p class="body-color">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte.</p>
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Supplier development – help diverse suppliers improve and thrive within your organization</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Automated feedback and clear ROI on development programs</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">See how your suppliers perform on diversity (supplier diversity, gender inequality, etc.)</div>
</div>
<div class="solid-list-item">
<div class="list-bullet">div>
<div class="list-text body-color">Customers should mirror your supplier base</div>
</div>
</div>
<div class="button-wrap mt-4"><a class="button btn-align btn-more is-link color-primary" href="">Learn more about diversity services</a></div>
</div>
</div>
</div>
</div>
<div id="business-units" class="navtab-content">
<div class="columns is-vcentered">
<div class="column is-6">
<figure class="image"><img class="has-light-shadow" src="/assets/img/demo/business/business-units.jpeg" alt="" data-demo-src="/assets/img/demo/business/business-units.jpeg" /></figure>
</div>
<div class="column is-6">
<div class="inner-content">
<h2 class="feature-headline is-clean">Business Units</h2>
<p class="body-color">Get the best out of the suppliers who help you get your job done, in any department:</p>
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Marketing and media</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Legal, Consulting</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">IT Companies</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Energy, Transportation</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">…And whatever else makes your department go</div>
</div>
</div>
<div class="button-wrap mt-4"><a class="button btn-align btn-more is-link color-primary" href="">Have some suppliers to rank?</a></div>
</div>
</div>
</div>
</div>
<div id="boards" class="navtab-content">
<div class="columns is-vcentered">
<div class="column is-6">
<figure class="image"><img class="has-light-shadow" src="/assets/img/demo/business/boards.jpeg" alt="" data-demo-src="/assets/img/demo/business/boards.jpeg" /></figure>
</div>
<div class="column is-6">
<div class="inner-content">
<h2 class="feature-headline is-clean">C-Suite and Boards</h2>
<p class="body-color">Get the best out of the suppliers who help you get your job done, in any department:</p>
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Put your money where your PR mouth is</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Solid numbers and action for the proof behind your goals and public statements</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Suppliers are a huge budget line item</div>
</div>
<div class="solid-list-item">
<div class="list-bullet">

</div>
<div class="list-text body-color">Get the value and return you deserve from suppliers and employees</div>
</div>
</div>
<div class="button-wrap mt-4"><a class="button btn-align btn-more is-link color-primary" href="">Talk about specifics for your department</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '4',
                'page_id' => '1',
                'html' => '<div class="section is-app-grey">
<div class="container">
<div class="section-title-wrapper my-6">
<div class="bg-number">4</div>
<h2 class="title section-title has-text-centered dark-text text-bold">How We Do Business</h2>
<svg class="blob-1" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#837FCB" d="M37.1,-25.2C47.4,-16.7,54.5,-1.3,50,8.6C45.5,18.5,29.3,23,15.4,28.2C1.5,33.5,-10.2,39.5,-22.6,37.3C-35,35,-48,24.5,-51.2,11.4C-54.5,-1.7,-48,-17.4,-37.8,-25.9C-27.7,-34.3,-13.8,-35.6,-0.2,-35.4C13.4,-35.2,26.8,-33.7,37.1,-25.2Z" transform="translate(100 100)"></path></svg><svg class="blob-2" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#837FCB" d="M48,-10.8C56.2,9.7,52.8,38.8,37.8,49C22.8,59.2,-3.8,50.5,-24.2,35.2C-44.7,19.9,-59,-2,-53.9,-18.2C-48.9,-34.4,-24.4,-45,-2.3,-44.2C19.9,-43.5,39.7,-31.4,48,-10.8Z" transform="translate(100 100)"></path></svg><svg class="blob-3" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#837FCB" d="M45.3,-16.1C52.1,6.1,46.3,31,31.3,41.5C16.3,52,-8,48.2,-30,33.9C-52.1,19.6,-72,-5.1,-66.6,-25.4C-61.2,-45.7,-30.6,-61.5,-5.7,-59.7C19.3,-57.9,38.5,-38.3,45.3,-16.1Z" transform="translate(100 100)"></path></svg><svg class="blob-4" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#837FCB" d="M49.2,-14.2C58.8,13.6,58.2,46.5,43.2,56.7C28.2,66.9,-1.2,54.6,-18.6,38.8C-35.9,23.1,-41.1,4,-36,-17.5C-30.9,-39.1,-15.4,-63.1,2.2,-63.8C19.8,-64.5,39.6,-41.9,49.2,-14.2Z" transform="translate(100 100)"></path></svg><svg class="blob-5" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#837FCB" d="M54.1,-26.7C58.3,-4.9,41.5,14.6,23.8,25.8C6.1,37,-12.6,40,-27.3,30.9C-42.1,21.8,-52.9,0.5,-47.7,-22.7C-42.5,-46,-21.2,-71.2,1.9,-71.8C25,-72.4,50,-48.4,54.1,-26.7Z" transform="translate(100 100)"></path></svg></div>
<div class="columns is-vcentered py-6">
<div class="column is-4 is-offset-2">
<div class="flex-card benefits-card">
<div class="benefits-header">
<h3 class="title is-4">We Strive to</h3>
</div>
<div class="benefits-body">
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Build trust and relationships through transparency and feedback</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Create a level playing field for all suppliers, including diverse businesses</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Weave procurement into the fabric of the company</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Foster positive relationships both internally and externally</div>
</div>
</div>
</div>
</div>
</div>
<div class="column is-4">
<div class="flex-card benefits-card">
<div class="benefits-header">
<h3 class="title is-4">We Care About</h3>
</div>
<div class="benefits-body">
<div class="solid-list">
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Changing the course of business through engagement and intervention</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Ensuring you get the most value out of the dollars you spend with suppliers</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Helping our customers get quick, frequent and visible “wins”</div>
</div>
<div class="solid-list-item">
<div class="list-bullet"></div>
<div class="list-text body-color">Surfacing critical items that would otherwise fester or never come out</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'order' => '5',
                'page_id' => '1',
                'html' => '<section id="business-types" class="section bg-white">
<div class="container">
<div class="section-title-wrapper has-text-centered my-6">
<div class="bg-number">5</div>
<h2 class="section-title-landing">A Quick Word</h2>
<h4>Every business matters, learn how we handle it.</h4>
</div>
<div class="content-wrapper pb-6">
<div class="columns is-vcentered">
<div class="column is-5 is-offset-1">
<div class="side-feature-text">
<figure class="image is-64x64 mr-4"><img class="is-rounded" src="/assets/img/avatars/janet.jpg" alt="" data-demo-src="/assets/img/avatars/janet.jpg" /></figure>
<h2 class="feature-headline is-clean is-flex is-align-items-center">A Word from our CEO</h2>
<p class="mt-4">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte.</p>
<p>Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad, ipsum prompta ius eu. Sanctus appellantur vim ea.</p>
</div>
</div>
<div class="column is-4 is-offset-1">
<div class="flex-card company-types">
<div class="icon-group"><img src="/assets/img/graphics/icons/store-yellow.svg" alt="" data-base-url="/assets/img/graphics/icons/store" data-extension=".svg" />Commerce &amp; Services</div>
<div class="icon-group"><img src="/assets/img/graphics/icons/bank-yellow.svg" alt="" data-base-url="/assets/img/graphics/icons/bank" data-extension=".svg" />Finance services</div>
<div class="icon-group"><img src="/assets/img/graphics/icons/factory-yellow.svg" alt="" data-base-url="/assets/img/graphics/icons/factory" data-extension=".svg" />Industry</div>
<div class="icon-group"><img src="/assets/img/graphics/icons/church-yellow.svg" alt="" data-base-url="/assets/img/graphics/icons/church" data-extension=".svg" />Non Profit</div>
<div class="icon-group"><img src="/assets/img/graphics/icons/warehouse-yellow.svg" alt="" data-base-url="/assets/img/graphics/icons/warehouse" data-extension=".svg" />Distribution</div>
</div>
</div>
</div>
</div>
</div>
</section>',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
