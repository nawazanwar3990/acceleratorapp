<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-12">
    <h4 class="fw-bold">Business Accelerator</h4>
    <h6 class="fw-bold text-muted">Investment</h6>
    @php $currentRoute = request()->route()->getName(); @endphp
    <ul class="progress-bar text-left">
        <li class="{{ $currentRoute=='website.investment.index'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.index')}}">
                Welcome
            </a>
        </li>
        <li class="{{ $currentRoute=='website.investment.team'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.team')}}">
                Team
            </a>
        </li>
        <li class="{{ $currentRoute=='website.investment.product'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.product')}}">
                Product
            </a>
        </li>
        <li class="{{ $currentRoute=='website.investment.market'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.market')}}">
                Market
            </a>
        </li>
        <li class="{{ $currentRoute=='website.investment.equity'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.equity')}}">
                Equity
            </a>
        </li>
        <li class="{{ $currentRoute=='website.investment.curiosity'?'active-link':'in-active-link' }}">
            <a href="{{route('website.investment.curiosity')}}">
                Curiosity
            </a>
        </li>
    </ul>
</div>
