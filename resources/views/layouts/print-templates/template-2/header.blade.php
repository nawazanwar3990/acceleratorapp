<style>
    body{
        background-color: #ffffff !important;
    }
</style>

<div class="row">
    <div class="" style="background-color: #002A45; color: #ffffff; width: 40%; display: flex;">
        <div class="brand-logo" style="width: 100%; padding-left: 10px;display: flex;align-items: center;">
            <img src="{{ asset(\App\Services\RealEstate\BusinessService::getBusinessLogo()) }}" alt="">
        </div>

        <div class="vl" style="border-left: 6px solid #E23D21; height: 100%; margin-right: 10px"></div>
        <div class="vl" style="border-left: 6px solid #E23D21; height: 100%; margin-right: 10px"></div>

    </div>

    <div style="background-color: #E23D21; color: #ffffff; width: 60%;;">
        <p class="" style="font-family: Poppins,sans-serif; font-size: 35px; text-align: right; margin-top: 20px; font-weight: 400;">{{ $title ?? null }}</p>
    </div>
</div>
