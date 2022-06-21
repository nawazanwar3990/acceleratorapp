<ul class="nav nav-pills mt-30 mb-30" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#daily-wage" role="tab">
            <span class="hidden-xs-down">{{ __('general.daily_wage') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab">
            <span class="hidden-xs-down">{{ __('general.monthly_salary') }}</span>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="daily-wage" role="tabpanel">
        @include('dashboard.accounts.salary.components.daily-wage-fields')
    </div>
    <div class="tab-pane" id="monthly" role="tabpanel">
        @include('dashboard.accounts.salary.components.monthly-salary-fields')
    </div>
</div>
