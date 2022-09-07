<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div id="pricing" class="section is-medium">
            <div class="container">
                <div class="section-title has-text-centered">
                    <div class="title-wrap">
                        <h3 class="title title-alt is-3">Available Plans</h3>
                        <p class="subtitle is-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>

                <div class="pricing-wrapper">
                    <div class="columns">
                        <div class="column is-4">
                            <div class="pricing-box">
                                <img src="assets/img/graphics/icons/ecommerce-pricing-icon-1-green.svg" data-base-url="assets/img/graphics/icons/ecommerce-pricing-icon-1" data-extension=".svg" alt="">
                                <h3>Shop</h3>
                                <p>For starter projects</p>
                                <div class="price">
                                    <div class="price-number">
                                        <span>$12</span>
                                    </div>
                                </div>
                                <p>Up to 250 products</p>
                                <a class="button primary-btn raised is-fullwidth">Try it free</a>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="pricing-box">
                                <img src="assets/img/graphics/icons/ecommerce-pricing-icon-2-green.svg" data-base-url="assets/img/graphics/icons/ecommerce-pricing-icon-2" data-extension=".svg" alt="">
                                <h3>Store</h3>
                                <p>For established stores</p>
                                <div class="price">
                                    <div class="price-number">
                                        <span>$25</span>
                                    </div>
                                </div>
                                <p>Up to 2000 products</p>
                                <a class="button primary-btn raised is-fullwidth">Try it free</a>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="pricing-box">
                                <img src="assets/img/graphics/icons/ecommerce-pricing-icon-3-green.svg" data-base-url="assets/img/graphics/icons/ecommerce-pricing-icon-3" data-extension=".svg" alt="">
                                <h3>Flagship</h3>
                                <p>For bigger stores</p>
                                <div class="price">
                                    <div class="price-number">
                                        <span>$55</span>
                                    </div>
                                </div>
                                <p>Unlimited products</p>
                                <a class="button primary-btn raised is-fullwidth">Try it free</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs is-centered ref-tabs">
                    <ul>
                        <li>
                            <a><img src="assets/img/logos/custom/gutwork.svg" alt=""></a>
                        </li>
                        <li>
                            <a><img src="assets/img/logos/custom/kromo.svg" alt=""></a>
                        </li>
                        <li>
                            <a><img src="assets/img/logos/custom/infinite.svg" alt=""></a>
                        </li>
                        <li>
                            <a><img src="assets/img/logos/custom/covenant.svg" alt=""></a>
                        </li>
                        <li>
                            <a><img src="assets/img/logos/custom/tribe.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>
