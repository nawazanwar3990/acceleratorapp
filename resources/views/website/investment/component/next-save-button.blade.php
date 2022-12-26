<button type="submit" class="btn  btn-primary site-first-btn-color">
    Next <i class="bx bx-arrow-to-right"></i>
</button>
@php $currentRoute = request()->route()->getName(); @endphp
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@if($currentRoute!=='website.investment.index' && isset($model))
    <a class="btn  btn-primary site-first-btn-color" onclick="saveInvestmentLater();">
        Save Later <i class="bx bx-save"></i>
    </a>
@endif
